window.onload=function(){
	var span=document.getElementsByTagName("span")[0];
	var num=5;
	var url=document.querySelector("a").href;
	var t=setInterval(function(){
		num--;
		if(num<0){
			clearInterval(t);
			location.href=url;
		}else{
			span.innerHTML=num;
		}
	},1000)
}