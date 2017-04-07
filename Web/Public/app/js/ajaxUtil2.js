var $ = {
    ajax: function (options) {
        var xhr = new XMLHttpRequest();
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
    getJSON: function(options){
        var xhr = new XMLHttpRequest();
        xhr.open("GET", options.url, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    if (options.success) {
                        //var data = JSON.parse(xhr.responseText)
                        //options.success(data);
                        // 直接在这里解析为js对象，然后返回
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
    }
};