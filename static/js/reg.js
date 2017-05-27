$(function(){
	$("#myform").validate({
		rules:{
			uname:{
				required:true,
				minlength:5,
				remote:{
					url:"index.php?m=index&f=login&a=ajax",
					type:"post",
					dataType:"json",
					data:{
						uname:function(){
							return $("input[name=uname]").val()
						}
					}
				}
			},
			upass:{
				required:true,
				minlength:5
			},
			upass2:{
				required:true,
				minlength:5,
				equalTo:"#pass"
			},
			code:{
				required:true,
				remote:{
					url:"index.php?m=index&f=login&a=ajaxCode",
					type:"post",
					dataType:"json",
					data:{
						code:function(){
							return $("input[name=code]").val()
						}
					}
				}
			}
		},
		messages:{
			uname:{
				required:"用户名必填",
				minlegtn:"不能少于5位"
			},
			upass:{
				required:"密码必填",
				minlegtn:"不能少于5位"
			},
			upass2:{
				required:"请再次输入密码",
				minlegtn:"不能少于5位",
				equalTo:"两次密码不一致"
			},
			code:{
				required:"验证码未填写",
				remote:"验证码不对"
			}
		}
	})
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
})
