$(function(){
	//遮罩
	$(".mask").css("height",$(window).height());
    //关注
	$(".guanzhu").click(function(){
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=addguanzhu",
            data:{
                near:location.href,
                uid2:$(".author-name").attr("attr")
            },
            success:function(e){
                if(e=="no"){
                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block")
                }else if(e=="yes"){
                    $(".guanzhu").css("display","none");
                    $(".quxiaoguanzhu").css("display","inline-block");

                    $(".notice").css("display","block");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none")
                        $(".mask").css("display","none")

                    },2000)
                }
            }

        })
    })
	//取消关注
	$(".quxiaoguanzhu").click(function(){
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=quxiaoguanzhu",
            data:{
                uid2:$(".author-name").attr("attr")
            },
            success:function(e){
                if(e=="ok"){
                    $(".quxiaoguanzhu").css("display","none");
                    $(".guanzhu").css("display","inline-block");
                    $(".notice").css("display","block");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none")
                        $(".mask").css("display","none")

                    },2000)
                }else{
                    $(".notice").css("display","block").html("操作失败");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none").html("操作成功");
                        $(".mask").css("display","none")

                    },2000)
                }
            }
        })
    })
	//收藏
	$(".love").click(function(){
		$.ajax({
			url:"index.php?m=index&f=love&a=love",
			data:{
				near:location.href,
				sid:$(".author-name").attr("sid")
			},
			success:function(e){
				if(e=="no"){
					$(".mask").css("display","block");
                    $(".notice-login").css("display","block");
				}else if(e=="yes"){
					$(".love").css("display","none");
                    $(".loveCancel").css("display","inline-block");
                    $(".notice").css("display","block");
                    $(".mask").css("display","block");
                    setTimeout(function(){
                    	$(".notice").css("display","none")
                        $(".mask").css("display","none")
                    },2000)
				}
			}
		})
	})
	//取消收藏
	$(".loveCancel").click(function(){
        $.ajax({
            url:"index.php?m=index&f=love&a=loveCancel",
            data:{
                sid:$(".author-name").attr("sid")
            },
            success:function(e){
                if(e=="ok"){
                    $(".loveCancel").css("display","none");
                    $(".love").css("display","inline-block");
                    $(".notice").css("display","block");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none")
                        $(".mask").css("display","none")

                    },2000)
                }else{
                    $(".notice").css("display","block").html("操作失败");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none").html("操作成功");
                        $(".mask").css("display","none")

                    },2000)
                }
            }
        })
    })
	
	//回复的相关信息
	var data={};
	$(".replayBtn").click(function(){
		$(this).parents(".comment").find(".submit2").slideToggle(100);
		data.sid=$(".author-name").attr("sid");
		data.uid2=$(this).attr("uid2");
		data.pid=$(this).attr("pid");
	})
	
	//发表回复
	$(".btn-send").click(function(){
		$.ajax({
			url:"index.php?m=index&f=message&a=add",
			data:{
				near:location.href,
				uid2:$(".author-name").attr("attr"),
				sid:$(".author-name").attr("sid"),
				mcon:$(".mcon").val()
			},
			dataType:"json",
			success:function(e){
				if(e.message=="ok"){
					
					// 创建留言框
					var commect=$("<div class='comment'></div>").appendTo(".message");
					//克隆留言html结构
					var liuyan =$(".liuyan:eq(0)").clone(true);
                   commect.append(liuyan);
					//更改内容
					liuyan.find(".name").html("我");
					liuyan.find("meta").html(getDate());
					liuyan.find(".comment-wrap").html($(".mcon").val());
					//创建输入框
					var submit2=$(".sub-comment-list:eq(0)").clone(true);
					commect.append(submit2);
					//留言清空
					$(".mcon").val("");
					//修改总条数
					var num=$(".message").find(".top .comment").html();
					num=num==""?0:num;
					
					$(".message").find(".top .comment").html((num*1+1));
					//更改回复按钮数据
					$(".replyBtn1").attr("pid",e.mid).attr("uid2",e.uid);
					
					$(".notice").css("display","block").html("操作成功");
					setTimeout(function(){
						$(".notice").css("display","none");
					},2000);
				}else if(e.message=="no"){
					$(".mask").css("display","block");
					$(".notice-login").css("display","block");
				}
			}
		})
	})
	$(".replyBtn3").click(function(){
        var that=$(this);
        var mcon=that.parent().parent().find("textarea").val();
        $.ajax({
            url:"index.php?m=index&f=message&a=reply",
            data:{
                near:location.href,
                sid:data.sid,
                uid2:data.uid2,
                pid:data.pid,
                mcon:mcon
            },
            dataType:"json",
            success:function(e){
                if(e.message=="no"){
                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block")
                }else if(e.message=="ok"){

                    //1. clone replylist结构

                    var replylist=$(".replylist:eq(0)").clone(true).appendTo(".reply");
                    //2.修改replylist里面的内容

                        //a. 修改名字


                    replylist.find(".replylist p").html("我");
                      // b. 修改内容

                    replylist.find(".replylist .span").html(mcon);


                       //c. 修改时间

                    replylist.find(".replystate .time").html(getDate());

                  //3 修改按钮上面的值

                    replylist.find(".replyBtn2").attr("uid2",e.uid);

                    replylist.find(".replyBtn2").attr("pid",replylist.parents(".message").find(".replyBtn1").attr("pid"));





                }
            }

        })
    })

    $(".replyBtn2").click(function(){

        $(this).parents(".message").find("textarea").val("@"+$(this).parents(".replylist").find(".replycon span").html()+":");
    })
    $("notice-login .btn").click(function(){
    	$(".mask").css("display","none");
    	$(".notice-login").css("display","none");
    })
    
    $.ajax({
        url:"index.php?m=index&f=message&a=hit",
        data:{
            sid:$(".author-name").attr("sid")
        },
        success:function(e){
            if(e=="ok"){
               $(".hitnum").html($(".hitnum").html()*1+1);
            }
        }
    })
    
})
 //时间
    function getDate(){
    var time=new Date();
    var year=time.getFullYear();
    var month=time.getMonth()+1;
    var day=time.getDate();

    var hours=time.getHours();
    var min=time.getMinutes();
    var sec=time.getSeconds();

    return year+"-"+month+"-"+day+" "+hours+":"+min+":"+sec;
    }