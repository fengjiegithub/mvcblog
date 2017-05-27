<?php
class art extends indexMain{
	function __construct(){
		parent::__construct();
		$this->db=new db("shows");
		$this->db1=new db("category");
	}
	function show(){
		$obj=new infinite();
		$obj->tree(0,0,$this->db->connect,"category");
		$this->smarty->assign("tree",$obj->str);
		if($this->checkLogin()){
			$this->smarty->display("index/write.html");
		}
		
	}
	function add(){
			$cid=P("cid");
			$stitle=P("stitle");
			$sview=P("sview");
			$scon=P("scon");
			$simg=P("hidden");
			$uid=$this->session->get("uid");
			if($this->db->insert("insert into shows (cid,stitle,scon,uid,sview,simg) values ('$cid','$stitle','$scon','$uid','$sview','$simg')")){
				$this->jump("index.php?m=index&f=art&a=show","添加成功");
			}else{
				$this->jump("index.php?m=index&f=art&a=show","添加失败");
			}
		}
}
?>