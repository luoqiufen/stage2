// 封装 (1个)刮刮卡效果
/* 
属性: 
画布: c1
画布宽: c1_width
画布高: c1_height

方法:
0)入口方法
1)绘图 :画灰色底+"刮一刮"
2)记录刮卡次数效果
3)再来一次
*/

var ggl = {
    c1: null, //画布canvas
    c1_width: 376, //画布宽
    c1_height: 82, //画布高
    shape: null, //形状
    num: 0, //记录当前刮卡次数
    ismousedown: false, //鼠标状态  默认未按下
    // 0)入口方法: init
    init: function (selector) {
        this.c1 = document.querySelector(selector);
        // 设置画布宽高(属性)
        this.c1.width = this.c1_width;
        this.c1.height = this.c1_height;
        this.shape = this.c1.getContext('2d'); //形状
        // 绘制底色+文字
        this.drawText();
        this.initNum();

        // 给画布添加鼠标事件
        MouseEvent.mouse(this.c1, this.mouseMove, this.mouseDown, this.mouseUp);
        // 离开事件:未按下
        this.c1.onmouseout = function(){
            ggl.ismousedown = false;
        }
    },
    // 1)绘制底色+文字
    drawText: function () {
        // 开始绘制
        // 画灰色底
        this.shape.fillStyle = '#797979';
        this.shape.fillRect(0, 0, this.c1_width, this.c1_height);
        // 画文字   
        this.shape.beginPath();
        this.shape.fillStyle = '#CCC';
        this.shape.font = 'bold 30px 微软雅黑';
        this.shape.textAlign = 'center'; //水平居中
        this.shape.textBaseline = 'middle'; //垂直居中
        this.shape.fillText('刮一刮', this.c1_width / 2, this.c1_height / 2);
        this.shape.closePath();

        this.shape.beginPath();
        this.shape.closePath();

    },
    // 2)刮卡次数效果
    initNum: function () {
        $('.num1').text(5 - this.num); //剩余刮卡机会
        // 该次的中奖信息
        var getRandom = function (min, max) {
            return Math.round(Math.random() * (max - min) + min);
        }
        // 生成随机数
        var PR = getRandom(3, 10);
        // 如果随机数<当前次数:中奖
        $('.btn').hide();//隐藏所有按钮
        if (PR < this.num) { //中奖
            $('#prompt').html('<font color=red>恭喜你,中大奖了</font>');
            $('#ok').show().one('click', function () {
                alert('点击领取大奖');
                $('.num1').text(0);
                ggl.num = 5;
            });
        } else {
            $('#prompt').html('谢谢参与');
            $('#no').show().unbind().click(function () {
                console.log('再来一次');
            });
            ggl.onceAgain();
            $('.btn').css('z-index','0');
        }

        // 提高图层
        // $('.btn').css('z-index','5');
    },
    // 3)再来一次
    onceAgain:function(){
        if(this.num<5){//再来一次
            this.num++;//更新当前次数
            // 重绘
            this.drawText();
            this.initNum();
        }else{
            '运气用光了,明天再来吧'
        }
    },
    // 处理鼠标事件
    // 处理鼠标移动
    mouseMove: function (e) {
        var x = e.points.x - $('.ggl').offset().left;
        var y = e.points.y - $('.ggl').offset().top;
        // document.title = "x:" + x + " - y:" + y;

        // 橡皮擦擦除
        if (ggl.ismousedown) { //鼠标按下才可以擦除
            ggl.shape.clearRect(x, y, 20, 10);
        }
    },
    // 处理鼠标按下
    mouseDown: function () {
        ggl.ismousedown = true; //按下了鼠标
    },
    // 处理鼠标弹起
    mouseUp: function () {
        console.log('弹起');
        ggl.ismousedown = false;
        // 如果擦除面积过半,就全部刮开
        var data = ggl.shape.getImageData(0, 0, ggl.c1_width, ggl.c1_height).data; //所有像素数据
        // console.log(data);
        // 一个像素rgba:占4个位置
        // 像素1的位置:3
        // 像素2的位置:7
        // 像素3的位置:11
        // i:每个像素的起始下标
        // j:记录透明像素个数
        for (var i = 0, j = 0; i < data.length; i+=4) {
            // 当前像素: data[i]
            // 当前像素透明度: data[i+3]
            if(data[i+3] == 0){//该像素透明
                j++
            }
            // 如果透明像素过半(data.length/4/2)
            if(j>=data.length/8){
                ggl.shape.clearRect(0,0,ggl.c1_width,ggl.c1_height);
                // 提高btn图层
                $('.btn').css('z-index','5');
            }
        }
    }

};

// 调用
ggl.init('.canvas');
console.log(ggl.c1)