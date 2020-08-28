/*
 * @Author: LuoQiufen
 * @Date: 2020-07-01 15:35:17
 * @LastEditTime: 2020-07-01 16:36:01
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_04\02_ajaxTools.js
 */


// 封装Ajax
// - get请求
// - post请求
// - ajax请求

window.$ = {
    // 参数1: url 地址
    // 参数2: data 数据: uname=apple&upass=123
    /* 参数3: callback 回调函数
        callback = function(mess) {
            // 拿到响应数据mess 接收xhr.response
            // 自己去做后续处理...
        }
    */
    get: function (url, data, callback) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // 接收响应 xhr.response
                // 把事情交给调用者自己去做
                // 调用回调函数
                callback(xhr.response);
            }
        }
        // 如果有data数据,需要?传递
        if (data) {
            url += '?' + data;
        }
        xhr.open('get', url);
        xhr.send(null);
    },
    post: function (url, data = null, callback) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                callback(xhr.response);
            }
        }
        xhr.open('post', url);
        xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
        xhr.send(data);
    },
    ajax: function (method, url, data = null, callback) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                callback(xhr.response);
            }
        }

        if (method == 'get') {
            if (data) {
                url += '?' + data;
            }
            xhr.open('get', url);
            xhr.send(null);
        } else { //post
            xhr.open('post', url);
            xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
            xhr.send(data);
        }
    }
}