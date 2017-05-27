<?php
	class code{
		private $letter="ABCDEFGHJKMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz";
		public $text;     //文字
		private $num=4;   //字母数量
		public $width=200;   //画布宽
		public $height=80;   //画布高
		public $lineNum=10;   //线条数量
		public $imgType="png";  //生成图片类型
		public $letterUrl;  //字体
        public $print=50;   //干扰点
		public $fontsize=array("min"=>15,"max"=>20);  //字体大小
        public $img;   //图片
	    public $resultLetter;  //保存生成的文字
		private function getcolor(){
			$arr[0]=mt_rand(0,128);
			$arr[1]=mt_rand(0,128);
			$arr[2]=mt_rand(0,128);
			return $arr;
		}
		private function getTextcolor(){
			$arr[0]=mt_rand(129,256);
			$arr[1]=mt_rand(129,256);
			$arr[2]=mt_rand(129,256);
			return $arr;
		}
		private function create(){           //创建画布
			$this->img=imagecreatetruecolor($this->width,$this->height);
			$colorArr=$this->getcolor();
			$bgcolor=imagecolorallocate($this->img,$colorArr[0],$colorArr[1],$colorArr[2]);
			imagefill($this->img,0,0,$bgcolor);
		}
		private function createCode(){   //生成文字
			$len = strlen($this->letter)-1;
			for($i=0;$i<$this->num;$i++){
			$this->text .= $this->letter[mt_rand(0,$len)];
			}
            $this->resultLetter=strtolower($this->text);
	    }
		private function createFont(){    //将文字写入画布
            $this->createCode();
		    $x = $this->width / $this->num;
		    for ($i=0;$i<$this->num;$i++) {
                $fontsize=mt_rand($this->fontsize["min"],$this->fontsize["max"]);
                $color=$this->getTextcolor();
		        $fontcolor=imagecolorallocate($this->img,$color[0],$color[1],$color[2]);
		        imagettftext($this->img,$fontsize,mt_rand(-30,30),$x*$i+mt_rand(1,5),$this->height/1.4,$fontcolor,$this->letterUrl,$this->text[$i]);
		    }
		}
        private function creatline(){    //干扰线
            for ($i=0;$i<$this->lineNum;$i++){
                $x1=mt_rand(1,$this->width-1);
                $y1=mt_rand(1,$this->height-1);
                $x2=mt_rand(1,$this->width-1);
                $y2=mt_rand(1,$this->height-1);
                $color=$this->getcolor();
                $bgcolor=imagecolorallocate($this->img,$color[0],$color[1],$color[2]);
                imageline($this->img,$x1,$y1,$x2,$y2,$bgcolor);
            }
        }
        private function printline(){    //干扰点
            for($i=0;$i<$this->print;$i++){
                $x=mt_rand(1,$this->width-1);
                $y=mt_rand(1,$this->height-1);
                $color=$this->getTextcolor();
                $bgcolor=imagecolorallocate($this->img,$color[0],$color[1],$color[2]);
                imagesetpixel ( $this->img , $x , $y ,  $bgcolor );
            }
        }
        public function output(){      //进行调用
            header("content-type:image/".$this->imgType);
            $out="image".$this->imgType;
            $this->create();
//            $this->createCode();
            $this->createFont();
            $this->creatline();
            $this->printline();
            $out($this->img);
            $this->resultLetter;
            imagedestroy($this->img);
        }
	}
//$code=new code();
//$code->upout();
?>