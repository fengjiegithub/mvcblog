<?php
class indexMain{   //前台
	function __construct(){
		$this->smarty=new Smarty();
		$this->smarty->setTemplateDir("template");  //模板目录
		$this->smarty->setCompileDir("compile");    //编译目录
		$this->session=new session();
		$this->smarty->assign("indexLogin",$this->session->get("indexLogin"));
		$this->smarty->assign("uname",$this->session->get("uname"));
	}
	
	function checkLogin(){
		$session=$this->session;
		if(!($session->get("indexLogin")&&MVC=="yes")){
			$this->jump("index.php?m=index&f=index&a=init","请登录");
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