/**
 * Created by hxsd on 2016/7/13.
 */
var $= {

    ajax: function (options) {
        var xhr=this.createRequest();
        xhr.open(options.method, options.url, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    if (options.success) {
                        options.success(xhr.responseText);
                    }
                } else {
                    if (options.fail) {
                        options.fail();
                    }
                }
            }
        };
        xhr.send(null);
    },

    getJSON: function (options) {
        var xhr=this.createRequest();
        xhr.open("GET", options.url, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    if (options.success) {
                        options.success(JSON.parse(xhr.responseText));
                    }
                } else {
                    if (options.fail) {
                        options.fail();
                    }
                }
            }
        };
        xhr.send(null);
    },

    createRequest: function () {
        var xhr=null;
        try{
            xhr=new XMLHttpRequest();
        }catch(e){
            try{
                xhr=new ActiveXObject("Msxm12.XMLHTTP");
            }catch(e){
                try{
                    xhr= new ActiveXObject("Microsoft.XMLHTTP");
                }catch(e){
                    console.log("你的浏览器是在太LOW了，快升级！");
                }
            }
        }
        return xhr;
    }

};
