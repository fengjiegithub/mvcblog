<?php
//class page{
//	public $pagesNum;//总页数
//	public $total;//总数量
//	public $pageNum=10; //每页显示的数量
//	public $page;  //当前的页数
//	public $param;  //地址栏默认参数
//	public $limit;
//	 function __construct($total,$pageNum=10,$param="pages"){
//		$this->total=$total; 
//		$this->pageNum=$pageNum;
//		$this->pagesNum=ceil($this->totlal/$this->pageNum);
//		$this->param=$param;
//	}
//	function out(){
//		$this->current=isset($_GET[$this->param])?$_GET[$this->param]:0;
//		isset($_GET[$this->param])?substr($_SERVER("REQUEST_URL"),0,strrpos($_SERVER("REQUEST_URL"),"=")+1):$_SERVER("REQUEST_URL")."&pages=";
//		$str="一共有".$this->total."条&nbsp;&nbsp";
//		$str.="一共".$this->pagesNum."页&nbsp;&nbsp";
//		$str.="[<a href='{$url}0'>首页</a>]";
//		$up=$this->current-1<0?0:$this->current-1;
//		$str.="[<a href='{$url}{$up}'>上一页</a>]";
//		$start=$this->current-3<0?0:$tihs->current-3;
//			if($this->current-3<0){
//				$end=6>$this->pagesNum?$rhis->pageNum:6;
//			}else{
//				$end=$this->current+3>$this->pagesNum?$this->pagesNum:$this->current+3;
//			}
//			for($i=$start;$i<$end;$i++){
//				$n=$i+1;
//				$str.="[<a href='{$url}{$i}'>".$n."</a>]";
//			}
//			$next=$this->current+1>$this->pagesNum?$this->pagesNum:$this->current+1;
//		$str.="[<a href='{$url}{$next}'>下一页</a>]";
//		$last=$this->pagesNum-1;
//		$str.="[<a href='{$url}{$last}'>尾页</a>]";
//		$this->limit="limit".$this->current*$this->pageNum.",".$this->pageNum;
//		return $str;
//		
//	}
//}
//$page=new page();
//$page.out();
class pages{

    public $total;//数据总量
    public $pageNum=10;//每页显示的条数
    public $current;//当前的页数
    public $pageNums;//总页数
    public $param;//地址栏默认的参数

    public $limit;



    function __construct($total,$pageNum=10,$param="pages"){
            $this->total=$total;
            $this->pageNum=$pageNum;
            $this->pageNums=ceil  ($this->total/$this->pageNum);
            $this->param=$param;
    }

    function out(){
         $this->current=isset($_GET[$this->param])?$_GET[$this->param]:0;



       $url=isset($_GET[$this->param])?substr($_SERVER["REQUEST_URI"],0, strrpos($_SERVER["REQUEST_URI"],"=")+1):$_SERVER["REQUEST_URI"]."&pages=";


       $str="一共有".$this->total."条&nbsp;&nbsp;";
       $str.="一共".$this->pageNums."页&nbsp;&nbsp;";
       $str.="[<a href='{$url}0'>首页</a>]";

       $up=$this->current-1<0?0:$this->current-1;
       $str.="[<a href='{$url}{$up}'>上一页</a>]";

       // 最小值
        //最大值
        //步进值

        $start=$this->current-3<0?0:$this->current-3;

       if($this->current-3<0){
           $end=6>$this->pageNums?$this->pageNums:6;
       }else{
           $end=$this->current+3>$this->pageNums?$this->pageNums:$this->current+3;
       }


        for($i=$start;$i<$end;$i++){
           $n=$i+1;
          $str.="[<a href='{$url}{$i}'>".$n."</a>]";
        }


       $next=$this->current+1>$this->pageNums-1?$this->pageNums-1:$this->current+1;
       $str.="[<a href='{$url}{$next}'>下一页</a>]";


       $last=$this->pageNums-1;

       $str.="[<a href='{$url}{$last}'>尾页</a>]";

       $this->limit="limit ".$this->current*$this->pageNum.",".$this->pageNum;

      return $str;

    }

}
?>