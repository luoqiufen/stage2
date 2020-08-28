/*
 * @Author: your name
 * @Date: 2020-07-08 09:35:36
 * @LastEditTime: 2020-07-08 20:26:47
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \2-code\04_移动端_02\m.jd\js\index.js
 */
window.onload = function () {
    navBar();
    secondSale();
    Swipper.init('.jd_banner');
}
// 1) 导航条: 窗口滚动事件window scroll
// 滚动时,超出banner盒子,加红色背景
// 未超出,透明背景
function navBar() {
    window.addEventListener('scroll', function () {
        // 兼容处理
        var top = window.screenY || document.body.scrollTop || document.documentElement.scrollTop; //鼠标滚动高度
        var bannerH = document.querySelector('.jd_banner').offsetHeight; //banner区域高
        // console.log(bannerH);
        var header = document.querySelector('.jd_header'); //搜索栏
        /* if(top>bannerH-header.offsetHeight){
            header.style.background = 'rgb(220,0,0)';
        }else{
            header.style.background = 'none';
        } */
        header.style.background = top > bannerH - header.offsetHeight ? 'rgb(220,0,0)' : 'none';
    })
}

// 2) 掌上秒杀 sk_time
// 限时1个小时
function secondSale() {
    var time = 1.5 * 60 * 60; //总时长(s)
    // 时间显示且变换
    function t() {
        // 时间: 字符串形式
        var h = Math.floor(time / 3600).toString(); //时
        var m = Math.floor(time % 3600 / 60).toString(); //分
        var s = (time % 60).toString(); //秒
        h < 10 ? h = '0' + h : h;
        m < 10 ? m = '0' + m : m;
        s < 10 ? s = '0' + s : s;
        var spans = document.querySelectorAll('.sk_time span');
        // 时
        spans[0].innerText = h[0];
        spans[1].innerText = h[1];
        // 分
        spans[3].innerText = m[0];
        spans[4].innerText = m[1];
        // 秒
        spans[6].innerText = s[0];
        spans[7].innerText = s[1];

        time > 0 ? time-- : clearInterval(t1);
    }

    // 默认调用一次
    t();
    // 计时器控制
    var t1 = setInterval(t, 1000);
}

// 3) banner轮播图
var Swipper = {
    // 属性
    banner: null, //banner区域
    imgBox: null, //图片盒子区域
    points: null, //所有的点
    num: 1, //当前图: 默认1
    img_w: null, //一张图的宽
    timer: null, //计时器
    startX: null, //触摸起始点X点坐标
    amout: null, //滑动的距离
    // 方位
    // 00) 入口函数
    init: function (selector) {
        this.banner = document.querySelector(selector);
        this.imgBox = this.banner.children[0];
        this.points = this.banner.children[1].children;
        this.img_w = this.imgBox.children[this.num - 1].offsetWidth; //当前图片的宽
        // this.img_w = this.imgBox.children[0].offsetWidth;//图片宽
        // console.log(this.img_w);

        // 调用位移
        this.setTranslate();
        // 调用过渡
        this.startTransition();
        // 调用计时器
        this.setTimer();
        // 调用事件处理
        this.eventHander();

        document.title = this.num; //标题里显示banner图序号
    },
    // 01) 位移效果
    setTranslate: function () {
        // this.imgBox.style.transform = 'translate('+(-this.num*10)+'%)';
        this.imgBox.style.transform = 'translate(' + (-this.num * this.img_w) + 'px)';
        this.imgBox.style.webkitTransform = 'translate(' + (-this.num * this.img_w) + 'px)'; //兼容
    },
    // - 02-1)过渡效果(实现动画)
    startTransition: function () {
        this.imgBox.style.transition = "all 0.5s";
        this.imgBox.style.webkitTransition = "all 0.5s";
    },
    // - 02-1)取消过渡(取消动画效果)
    endTransition: function () {
        this.imgBox.style.transition = "";
        this.imgBox.style.webkitTransition = "";
    },
    // - 03)计时器(循环动画):显示下一张
    setTimer: function () {
        var _this = this;
        this.timer = setInterval(function () {
            _this.num++;

            // 效果略显生硬
            /* if(_this.num>8){//回到第一张
                _this.num=1;
                _this.endTransition();//取消过渡
            }else{
                _this.startTransition();
            } */

            _this.setTranslate();
            _this.startTransition()
            // _this.togglePoints();
            document.title = _this.num; //标题里显示序号
        }, 1500);
    },
    // 04) 切换点: 所有点移除now类,当前的点添加now
    togglePoints: function () {
        for (var key = 0; key < this.points.length; key++) {
            this.points[key].classList.remove('now');
        }
        this.points[this.num - 1].classList.add('now');
    },

    // -----------开始事件处理---------------
    eventHander: function () {
        var self = this;
        // 1) 过渡动画完成之后触发事件 transitionend
        this.imgBox.addEventListener('transitionend', function () {
            // 第九张动画完成之后,偷偷切回第一张
            if (self.num > 8) { //回到第一张
                self.num = 1;
                /* self.endTransition(); //取消过渡
                self.setTranslate(); */
            } else if (self.num < 1) {
                self.num = 8;
                /* self.endTransition();
                self.setTranslate(); */
            }
            self.endTransition(); //取消过渡
            self.setTranslate();
            self.togglePoints(); //当前图过渡完之后,切换对应的圆点 
        });

        // 2-1) 触摸开始: 
        // 暂停计时器: 
        // 记录触摸开始坐标x
        this.imgBox.addEventListener('touchstart', function (e) {
            clearInterval(self.timer);
            self.startX = e.touches[0].clientX;
        });

        // 2-2) 触摸滑动: 
        // 实时记录更新滑动位置
        this.imgBox.addEventListener('touchmove', function (e) {
            // 滑动距离 = 当前x-触摸起始点
            self.amout = e.touches[0].clientX - self.startX;
            document.title = '滑动了' + self.amout;
            // 移动当前图
            // 当前图位置+滑动距离
            var dis = -self.num * self.img_w + self.amout;
            self.imgBox.style.transform = 'translate(' + dis + 'px)';
            self.imgBox.style.webkitTransform = 'translate(' + dis + 'px)'
        });

        // 2-3) 触摸结束
        // 滑动距离超过1/3,允许切换
        this.imgBox.addEventListener('touchend', function (e) {
            if (Math.abs(self.amout) > self.img_w / 3) { //可以换图: 正值上一张,负值下一张
                self.amout > 0 ? self.num-- : self.num++;
            }
            // 切换图
            self.setTranslate();
            self.startTransition();

            // 再次调用计时器
            self.setTimer();
        });


    }


}