<?php
/* public 公开
 * private $bb="bb";  私有的，只能在本类的内部访问
 * protected   受保护的   只能在本类或者是子类中访问
 * static     静态的   这个方法或属性，只能作用在类的内部
 */

class db{
	public $hostname="localhost";   //地址
	public $dbname="blog";         //数据库
    private $username="root";       // 账号
	private $password="";           //密码
	public $tablename;              //数据表
	public $connect;                //连接对象赋值
	public $fileds;                 //选项
	/* 晚绑定    弱类型  
	 */
    function __construct($tablename=""){
		$this->tablename=empty($tablename)?"demo":$tablename;
		$this->config();
	}
	public function config(){
		$this->connect=new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
		if(mysqli_connect_errno($this->connect)){
			echo "连接数据库错误";
			$this->connect->close();
			exit;
		}
		$this->connect->query("set names utf8");
		$this->fileds["filed"]=$this->fileds["filed"]?$this->fileds["filed"]:"*";  //初始化
		$this->fileds["where"]=$this->fileds["order"]=$this->fileds["limit"]="";   //初始化
	}
	public function select($str=""){    //查询
		if(strpos($str,"elect")){
			$sql=$str;
		}else if(empty($str)){
			$sql="select ".$this->fileds["filed"]." from ".$this->tablename." ".$this->fileds["where"]." ".$this->fileds["order"]." ".$this->fileds["limit"];
		}else{
			$this->filed($str);
			$sql="select ".$this->fileds["filed"]." from ".$this->tablename." ".$this->fileds["where"]." ".$this->fileds["order"]." ".$this->fileds["limit"];
		}
		$result=$this->connect->query($sql);
		$arr=array();
//		var_dump($result);
		while($row=$result->fetch_assoc()){
		    $arr[]=$row;
		}
		return $arr;
	}
	public function filed($str=""){
		$sql=$str?$str:"*";
		if(strpos($sql,";")){
			$arr=explode(";",$sql);
			$keys="";
		    $values="";
		    foreach($arr as $k=>$v){
				$newarr=explode("=",$v);
				$keys.=$newarr[0].",";   
				$values.=$newarr[1].",";
			}
			$sql=str_replace(";",",",$sql);
			$this->keys=substr($keys,0,-1);
			$this->values=substr($values,0,-1);
		}else if(strpos($sql,"=")){
			$newarr=explode("=",$sql);
			$this->keys=$newarr[0];
			$this->values=$newarr[1];
		}
		$this->fileds["filed"]=$sql;
		return $this;
   	}	
	public function where($str=""){
		$sql=empty($str)?"":"WHERE ".$str;
		$this->fileds["where"]=$sql;
		return $this;
	}
	public function order($str=""){
		$sql=empty($str)?"":"ORDER BY ".$str;
		$this->fileds["order"]=$sql;
		return $this;
	}
	public function limit($str=""){
		$sql=empty($str)?"":" LIMIT ".$str;
		$this->fileds["limit"]=$sql;
		return $this;
	}
    public function delete($str=""){ //删除
    	if(strpos($str,"elete")){
    		$sql=$str;
    	}else if(empty($str)){
    		$sql="delete from ".$this->tablename." ".$this->fileds["where"];
    	}else{
    		$this->filed($str);
    		$sql="delete from ".$this->tablename." ".$this->fileds["where"];
    	}
    $this->connect->query($sql);
    return $this->connect->affected_rows;
    }
  	public function update($str=""){    //修改
  		if(strpos($str,"pdate")){
  			$sql=$str;
  		}else if(empty($str)){
  			$sql="update ".$this->tablename." set ".$this->fileds["filed"]." ".$this->fileds["where"];
  		}else{
  			$this->filed($str);
  			$sql="update ".$this->tablename." set ".$this->fileds["filed"]." ".$this->fileds["where"];
  		}
    $this->connect->query($sql);
    return $this->connect->affected_rows;
	}
	public function insert($str=""){    //增加
		if(strpos($str,"nsert")){
  			$sql=$str;
  			var_dump($sql);
  		}else if(empty($str)){
  			$this->fileds["filed"]="(".$this->keys.") values (".$this->values.")";
  			$sql="insert into ".$this->tablename." ".$this->fileds["filed"];
  		}else{
  			$this->filed($str);
  			$this->fileds["filed"]="(".$this->keys.") values (".$this->values.")";
  			$sql="insert into ".$this->tablename." ".$this->fileds["filed"];
  		}
    $this->connect->query($sql);
    return $this->connect->affected_rows;
	}
}
//$db=new db("user");
//var_dump($db->select("select pid from catagory where pid=2")); //查找
//var_dump($db->delete("delete from person where age=20"));   //删除
//var_dump($db->where("id=26")->filed("age='20'")->update());   //修改
//var_dump($db->filed("name='李四';sex='男'")->insert());  //增加
//var_dump($db->insert("insert into person ( name,age,sex) values ( '王五','24','女')")); //增加
?>
