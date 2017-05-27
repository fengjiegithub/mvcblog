<?php
	class main{   //后台
		function __construct(){
			$this->smarty = new Smarty();
		  	$this->smarty->setTemplateDir("template");  //模板目录
		  	$this->smarty->setCompileDir("compile");    //编译目录
            $this->session=new session();
		}

		function checkLogin(){
			$session=$this->session;
			if(!($session->get("login")&&MVC=="yes")){
				$this->jump("index.php?m=admin&f=index&a=login","请登录");
				exit;		
			}else{
				return true;
			}
		}
		function jump($url,$message){
			$this->smarty->assign("url",$url);
			$this->smarty->assign("message",$message);
			$this->smarty->display("admin/message.html");
		}
	}
?>