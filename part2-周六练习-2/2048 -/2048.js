var game ={
	data:null,//保存数据
	RN:4,//总行数
	CN:4,//总列数
	start(){//启动游戏
		//创建空数组保存在data中
		this.data=[];
		//遍历循环行 r
		for(var r=0;r<this.RN;r++){
			//创建空数组保存在r中
			this.data[r]=[];
			//内存循环 列 c
			for(var c=0;c<this.CN;c++){
				//在r行c列中值为0
					this.data[r][c]=0;
				}
			}

			this.randomNum();
			this.randomNum();
			this.updatadiv();

			document.onkeydown=function(e){//事件处理函数 this->document
				// alert(e.keyCode);
				switch(e.keyCode){
					case 37: this.moveLeft();break;//左移
					case 39: this.moveRight();break;
				}
			}.bind(this);
			// call: 立即执行,临时调用
			// bind: 永久绑定this,不是立即执行

		//(遍历结束)
		console.log(this.data.join("\n"));
	},
	randomNum(){//随机位置生成2或者4
		//反复：
		while(true){
			//随机生成0-3的整数保存在r中
			var r=Math.floor(Math.random()*this.RN);
			//随机生成0-3的整数保存在c中
			var c=Math.floor(Math.random()*this.CN);
			//如果数组当前位置是0
			if(this.data[r][c]==0){
				this.data[r][c]=Math.random()<0.5?2:4;
				//就给数组当前位置=(随机生成小数<0.5) 2?:4
				break;
			}
		}		
	},
	updatadiv(){
		//遍历数组里面的元素
		//外层循环 r
		for(var r=0;r<this.RN;r++){
			//内层循环 c
			for(var c=0;c<this.CN;c++){
			//当前值保存在n中
			var n=this.data[r][c];
			//得到对应div元素('r'+r+c)
			var div=document.getElementById("c"+r+c);
			//如果n!=0
			if(n!=0){
				//设置div元素为n
				div.innerHTML=n;
				//设置div的classname="cell n"+n
				div.className="cell n"+n;
			}else{
				//否则
					//设置div元素为空
					div.innerHTML="";
					//设置div的classname="cell"
					div.className="cell";
				}
			}
		}
	},
	moveLeft(){//左移所有行
		var before = String(this.data);
		for(var r=0;r<this.RN;r++){
			this.moveLeftInrow(r);
		}
		var after = String(this.data);
		if(before != after){
			this.randomNum();
			this.updatadiv();
		}
	}
	,
	moveLeftInrow(r){//左移一行
		for(var c=0;c<this.CN-1;c++){
			var nextc = this.getnextc(r,c);//下标
			if(nextc == -1) break;
			else if(this.data[r][c]==0){
				this.data[r][c]=this.data[r][nextc];
				this.data[r][nextc] =0;
				c--;
			}else if(this.data[r][c]=this.data[r][nextc]){
				this.data[r][c]*=2;
				this.data[r][nextc] =0;
			}
		}
	},
	moveRight(){//右移所有行
		var before = String(this.data);
		for(var r=0;r<this.RN;r++){
			this.moveRightInrow(r);
		}
		var after = String(this.data);
		if(before != after){
			this.randomNum();
			this.updatadiv();
		}
	}
	,
	moveRightInrow(r){//右移一行
		for(var c=0;c<this.CN-1;c++){
			var nextc = this.getnextc(r,c);//下标
			if(nextc == -1) break;
			else if(this.data[r][c]==0){
				this.data[r][c]=this.data[r][nextc];
				this.data[r][nextc] =0;
				c--;
			}else if(this.data[r][c]=this.data[r][nextc]){
				this.data[r][c]*=2;
				this.data[r][nextc] =0;
			}
		}
	},
	getnextc(r,c){//下一个c,不为0
		for(var i=c+1;i<this.CN;i++){
			if(this.data[r][i]!=0) return i;
		}
		return -1;
	}
	

	// m:model 数据层
	// v:view 视图层
	// vm:viewmodel 视图操作
	// 图片懒加载：v-lazy
}
game.start();