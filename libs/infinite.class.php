<?php
//	class infinite{
//		function __construct(){
//			$this->str="";
//		}
//		function tree($pid,$flag,$table,$db,$currentId=null){
//			$currentPid=null;
//			if($currentId){
//				$result=$db->query("select * from $table where cid=".$currentId);
//				$row=$result->fetch_assoc();
//				$p=$row["pid"];
//			}
//			$flag=$flag+1;
//			$sql="select * from $table where pid=".$pid;
//			$row=$result=$db->query($sql);
//			while($row=$result->fetch_assoc()){
//				$cid=$row["cid"];
//				$str=str_repeat("-",$flag);
//				if($currentId&&$p==$row["cid"]){
//					$this->str.="<option value='$p' selected='selected'>{$str}{$row["cname"]}</option>";
//				}else{
//					$this->str.="<option value='$cid'>{$str}{$row["cname"]}</option>";
//					$this->tree($row["cid"],$flag,$table,$db,$currentId);
//				}
//			}
//		}
//		function table($pid,$flag,$table,$db){
//			$flag=$flag+1;
//			$sql="select * from $table where pid=".$pid;
//			$row=$result=$db->query($sql);
//			while($row=$result->fetch_assoc()){
//				$cid=$row["cid"];
//				$str=str_repeat("-",$flag);
//				$this->str.="<tr>
//					<td>{$cid}</td>
//					<td>{$str}{$row["cname"]}</td>
//					<td>{$row["pid"]}</td>
//					<td>{$row["img"]}</td>
//					<td>{$row["url"]}</td>
//					<td><a href='delCatagory.php?id=$cid'>删除</><a href='updateCatagory.php?id=$cid'>编辑</a></td>
//					</tr>";
//				$this->table($row["cid"],$flag,$table,$db);
//			}
//		}
//		function delete($cid,$table,$db){
//			$sql="select * from $table where pid=".$cid;
//			$result=$db->query($sql);
//			$row=$result->fetch_assoc();
//			if(!$row){
//				$sql="delete from $table where cid=".$cid;
//				$db->query($sql);
//				if($db->affected_rows>0){
//					$mesege="删除成功！";
//					$url="ediCatagory.php";
//					include "add_success.php";
//					exit;
//				}	
//			}
//			else{
//				$mesege="有子类，请先删除子类！";
//				$url="ediCatagory.php";
//				include "add_success.php";
//				exit;	
//			}
//		}
//		function treeCon($pid,$flag,$table,$db,$currentId=null){
//			$flag=$flag+1;
//			$sql="select * from $table where pid=".$pid;
//			$row=$result=$db->query($sql);
//			while($row=$result->fetch_assoc()){
//				$cid=$row["cid"];
//				$str=str_repeat("-",$flag);
//				if($currentId==$row["cid"]){
//					$this->str.="<option value='$cid' selected='selected'>{$str}{$row["cname"]}</option>";
//				}else{
//					$this->str.="<option value='$cid'>{$str}{$row["cname"]}</option>";
//					$this->treeCon($row["cid"],$flag,$table,$db,$currentId);
//				}	
//			}
//		}
//	}
class infinite{
    function __construct(){

        $this->str="";
    }

    /*
     * $pid   从哪一级开始找
     * $flag  下级标识出现的次数
     * $db    数据库的链接对象
     * $table   表名
     * $current  当前的属于的类别
     * */

    function tree($pid, $flag, $db, $table,$current=null){
        $currentPid=null;
        if($current){
            $sql="select * from $table where cid=".$current;
            $result=$db->query($sql);
            $row=$result->fetch_assoc();
            $currentPid=$row["pid"];
        }
        $flag=$flag+1;
        $sql = "select * from $table where pid=" . $pid;
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $cid = $row["cid"];
            $str=str_repeat('-',$flag);

            if($currentPid==$row["cid"]){
                $this->str.= "<option value='$cid' selected='selected'>{$str}{$row['cname']}</option>";
            }else {
                $this->str .= "<option value='$cid'>{$str}{$row['cname']}</option>";
            }
            $this->tree($row["cid"], $flag, $db, $table,$current);

        }
    }

    function table($pid, $flag, $db, $table)
    {
        $flag=$flag+1;
        $sql = "select * from $table where pid=" . $pid;
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $cid = $row["cid"];
            $str=str_repeat('-',$flag);
            $cid=$row["cid"];
            $cname=$row["cname"];
            $pid=$row["pid"];
            $img=$row["img"];
            $this->str.= "<tr>
			<td>$cid</td>
			<td>{$str}{$cname}</td>
			<td>$pid</td>
			<td>$img</td>
			<td>
			<a href='delCategory.php?id={$cid}'>删除</a>
			<a href='editCategory.php?id={$cid}'>编辑</a>
			</td>
			</tr>";
            $this->table($row["cid"], $flag, $db, $table);
        }
    }

    function  del($id,$db,$table){
        $sql="select * from $table where pid=".$id;
        $result=$db->query($sql);
        if($result->fetch_assoc()){
            $message="包含子类，不能删除，请先删除子类";
            $url="showCategory.php";
            include "message.html";
        }else{
            $sql="delete from $table where cid=".$id;
            $db->query($sql);
            if($db->affected_rows>0){
                $message="删除分类成功";
                $url="showCategory.php";
                include "message.html";
            }
        }

    }
}

?>