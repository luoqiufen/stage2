 //处理cookie信息
 var cookies = {
  //获取指定的cookie信息
  get:function(key){
    var arr =document.cookie.split('; ');
    /*["uname=apple","upass=123"]*/
    for(var i in arr){
      var newArr = arr[i].split('=');
      //['uname','apple']
      //['upass','123']
      if(key == newArr[0]){
        return newArr[1]
      }
    }
  },
  //设置cookie信息
  set:function(key,value,time){
    document.cookie = key+"="+value+";Max-Age="+time;
  }
}
