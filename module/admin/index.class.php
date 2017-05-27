<?php
	class index extends main {
	    function init(){
	    	if($this->checklogin()){
	    		$this->smarty->assign("aname",$this->session->get("aname"));
	    		$this->smarty->display("admin/index.html");
	    		$this->smarty->set("coming","yes");
	    	}
	    }
	    function login(){
	    	if($this->session->get("coming")){	
	    		header("location:index.php?m=admin");
	    		exit;
	    	}
	    	$this->smarty->display("admin/login.html");
	    }
	    function reg(){
	    	$this->smarty->display("admin/reg.html");
	    }
	    function code(){
            $code=new code();
            $code->width=100;
            $code->height=30;
            $code->letterUrl=FONT_PATH."/msyh.ttf";
            $code->output();
            $session=new session();
            $session->set("code",$code->resultLetter);
	    }
	    function check(){
            $code=@strtolower($_POST["code"]);
            $session=$this->session;
            if($code!==$session->get("code")){
                $this->jump("index.php?m=admin&f=index&a=login","验证码错误");
                exit;
            }
            $aname=P("aname");
	    	$apass=P("apass");
	    	$db=new db("admin");
	    	$result=$db->select();
	    	foreach($result as $v){
	    		if($v["aname"]==$aname){
	    			if($v["apass"]==$apass){
	    				$session->set("login","yes");
	    				$session->set("aname",$aname);
	    				$session->set("aid",$v["aid"]);
	    				$this->jump("index.php?m=admin","登陆成功");
	    				exit;
	    			}
	    		}
	    	}
	    	$this->jump("index.php?m=admin&a=login","登陆失败");
	    }
	    function  logout(){
	    	$this->session->clear();
	    	$this->jump("index.php?m=admin&f=index&a=login","退出成功");
	    }
	}
?>