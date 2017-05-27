<?php
 class art extends main{
 	function __construct(){
 		parent::__construct();
 		$this->db=new db("shows");
 	}
 	function show(){
 		$result=$this->db->select("select * from shows");
 		$obj=new pages(count($result),5);
 		$this->smarty->assign("pages",$obj->out());
   		$currentResult=$this->db->select("select * from shows,category,user where shows.uid=user.uid and shows.cid=category.cid ".$obj->limit);
 		$this->smarty->assign("result",$currentResult);
 		$this->smarty->display("admin/art.html");
 	}
   	function info(){
   		$sid=$_GET["sid"];
   		$result=$this->db->where("sid=$sid")->select();
   		$this->smarty->assign("result",$result);
   		$this->smarty->display("admin/info.html");
   	}
   	function view(){
   		$state=$_POST["state"];
   		$sid=$_POST["sid"];
   		if($this->db->where("sid=$sid")->update("state=$state")){
   			$this->jump("index.php?m=admin&f=art&a=show","审核完成");
   		}else{
   			$this->jump("index.php?m=admin&f=art&a=show","审核失败");
   		}
   	}
 }
?>