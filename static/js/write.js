window.onload=function(){
			var btn=document.querySelector(".btn");
			var hiddenIput=document.querySelector("#hidden");
			var newobj=new upload("upload.php",".file",".box","img");
			console.log(newobj);
			newobj.up(function(e){
				hiddenIput.setAttribute("value",e);
				btn.removeAttribute("disabled");
			})
			newobj.loadstart=function(){
				btn.setAttribute("disabled","disabled");
			}
		}