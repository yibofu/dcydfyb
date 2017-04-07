var policyText = {
    "expiration": "2020-01-01T12:00:00.000Z", //设置该Policy的失效时间，超过这个失效时间之后，就没有办法通过这个policy上传文件了
    "conditions": [
    ["content-length-range", 0, 1048576000] // 设置上传文件的大小限制
    ]
};
accessid= "LTAI1MFNp22bfnNS";
accesskey= "3VT0MCIDYZezG7ZlTRrPHv6kK0IfKI";
host = "http://dcyd.oss-cn-shanghai.aliyuncs.com";
// accessid= "NwBaNTl1HEAtVRAu";
// accesskey= "aAgl3ddFwLkQH766CbNvHvYbAINRNa";
// host = "http://luoxiaoshou.oss-cn-shanghai.aliyuncs.com";
//accessid= 'NwBaNTl1HEAtVRAu';
//accesskey= 'aAgl3ddFwLkQH766CbNvHvYbAINRNa';
//host = 'http://post-test.oss-cn-hangzhou.aliyuncs.com';
//host ='http://oss-cn-shanghai.aliyuncs.com';
//host =' http://luoxiaoshou.oss-cn-shanghai.aliyuncs.com ';
var policyBase64 = Base64.encode(JSON.stringify(policyText))
message = policyBase64
var bytes = Crypto.HMAC(Crypto.SHA1, message, accesskey, { asBytes: true }) ;
var signature = Crypto.util.bytesToBase64(bytes);
var uploader = new plupload.Uploader({
	runtimes : 'html5,flash,silverlight,html4',
	browse_button : 'selectfiles', 
    //runtimes : 'flash',
	container: document.getElementById('container'),
	flash_swf_url : 'lib/plupload-2.1.2/js/Moxie.swf',
	silverlight_xap_url : 'lib/plupload-2.1.2/js/Moxie.xap',

    url : host,

	multipart_params: {
		'Filename': '${filename}', 
        'key' : '${filename}',
		'policy': policyBase64,
        'OSSAccessKeyId': accessid, 
        'success_action_status' : '200', //让服务端返回200,不然，默认会返回204
		'signature': signature,
	},

	init: {
		PostInit: function() {//这个函数是显示文件是否上传
			document.getElementById('ossfile').innerHTML = '';
			document.getElementById('postfiles').onclick = function() {
				uploader.start();
				document.getElementById('h4').innerHTML = '文件正在上传';

				return false;
			};
		},

		FilesAdded: function(up, files) {//这个函数是展示进度条
			plupload.each(files, function(file) {
				document.getElementById('ossfile').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ')<b></b>'
				+'<div class="progress"><div class="progress-bar" style="width: 0%"></div></div>'
				+'</div>';
			});
			if((document.getElementsByClassName('ossfile').innerHTML)=='100%'){
				document.getElementById('h4').innerHTML = '文件上传完毕';
				
			}
		},

		UploadProgress: function(up, file) {
			var d = document.getElementById(file.id);
			d.getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
            
            var prog = d.getElementsByTagName('div')[0];
			var progBar = prog.getElementsByTagName('div')[0]
			progBar.style.width= 2*file.percent+'px';
			progBar.setAttribute('aria-valuenow', file.percent);
		},

		FileUploaded: function(up, file, info) {
            //alert(info.status)
            if (info.status >=200 || info.status < 200)
            {
                document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '100%';
				if( document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '100%'){
                    document.getElementById('h4').innerHTML = '文件上传完毕';
					
//注意修改
                    var add_li = '<li>'+file.name+'</li>';
                     var src_ = 'http://dcyd.oss-cn-shanghai.aliyuncs.com/'+ $(add_li).html();
                    $('.div_1').append(src_);
                   
				}
            }
            else
            {
                document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = info.response;
            } 
		},

		Error: function(up, err) {
			document.getElementById('console').appendChild(document.createTextNode("\nError xml:" + err.response));
		}
	}
});

uploader.init();
