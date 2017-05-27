<?php
	class category extends main{
		function __construct(){
			parent::__construct();
			$this->db=new db("category");
		}
		function del(){
			
		}
		function show(){
			
		}
		function add(){
			$img=P("hidden");
			$cname=P("cname");
			$pid=P("pid");
			if($this->db->insert("pid={$pid};cname='$cname';img='$img'")>0){
				$this->jump("index.php?m=admin&f=category&a=showadd","添加成功");
			}else{
				$this->jump("index.php?m=admin&f=category&a=showadd","添加失败");
			}
		}
		function showadd(){
			$obj=new infinite();
			$obj->tree(0,0,$this->db->connect,"category");
			$this->smarty->assign("tree",$obj->str);
			$this->smarty->display("admin/showadd.html");
		}
		function edit(){
			$obj=new infinite();
			$obj->table(0,0,$this->db->connect,"category");
			$this->smarty->assign("tree",$obj->str);
			$this->smarty->display("admin/edit.html");
		}
	}
?>