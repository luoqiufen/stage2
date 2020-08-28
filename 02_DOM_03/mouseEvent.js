// 封装插件:
// - 封装三个事件: mousemove mousedown mouseup
// - 默认每次: 操作1个dom
// 一个页面,默认只需要一个对象
window.MouseEvent = {};
// 形参:
// elem: 操作dom的远足
// msm:鼠标移动 - 自定义的处理函数
// msd:鼠标按下 - 自定义的处理函数
// msu:鼠标弹起 - 自定义的处理函数
MouseEvent.mouse = function (elem, msm, msd, msu) {
    // 函数:获取坐标点
    var getPoints = function (e) {
        return {
            x: e.pageX - elem.offsetLeft,
            y: e.pageY - elem.offsetTop
        }
    }

    // 添加三个dom事件
    elem.addEventListener('mousemove', function (e) { //事件处理函数 e:event
        e.points = getPoints(e);//扩展属性
        // e.points = {x: ,y: };
        // 调用函数 msm - 伪装成一个事件处理函数
        msm && msm.call(this,e);
    });
    elem.addEventListener('mousedown', function (e) {
        e.points = getPoints(e);
        msd && msd.call(this,e);//让this->dom,让设计更合理
        // msd(e);this->window
    });
    elem.addEventListener('mouseup', function (e) {
        e.points = getPoints(e);
        msu && msu.call(this,e);
    })
}