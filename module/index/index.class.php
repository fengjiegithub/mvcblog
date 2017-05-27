<?php
  class index  extends indexMain{
  	function __construct(){
  		parent::__construct();
  		$this->db=new db("shows");
		  $this->db1=new db("category");
		  $this->db2=new db("user");
  	}
  	function init(){      
  		if($this->session->get("indexLogin")=="yes"){
  			$this->session->set("welcome","yes");
  		}
  		$result=$this->db->select("select * from shows,user,category where shows.uid=user.uid and shows.cid=category.cid and state=3");
  		$this->smarty->assign("result",$result);

  		$result1=$this->db1->select();
  		$this->smarty->assign("result1",$result1);
  		
  		$result2=$this->db2->select();
  		$this->smarty->assign("result2",$result2);
  		
  		$this->smarty->display("index/index.html");
  	}
  }
?>