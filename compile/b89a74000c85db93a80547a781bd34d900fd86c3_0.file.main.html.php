<?php
/* Smarty version 3.1.30, created on 2017-03-15 02:02:51
  from "F:\wamp\www\w1610\2-28mvc\template\index\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c892bb5a9093_97542116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b89a74000c85db93a80547a781bd34d900fd86c3' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\index\\main.html',
      1 => 1489539768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_58c892bb5a9093_97542116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--<!DOCTYPE html>-->
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/main.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/bootstrap.min.css" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/show.js"><?php echo '</script'; ?>
>
	</head>

	<body>
		<div class="note">
			<div class="post">
				<div class="article">
					<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['result']->value["stitle"];?>
</h1>
					<div class="author">
						<a class="avatar" href="">
							<img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['uimg'];?>
" alt="144">
						</a>
						<div class="info">
							<span class="tag">作者</span>
							<span class="name author-name" attr="<?php echo $_smarty_tpl->tpl_vars['result']->value['uid'];?>
" sid="<?php echo $_smarty_tpl->tpl_vars['result']->value['sid'];?>
"><a href=""><?php echo $_smarty_tpl->tpl_vars['result']->value["uname"];?>
</a></span>
							<a class="btn btn-success follow"><i class="iconfont ic-follow"></i><span>关注</span></a>
							<div class="meta">
								<span class="publish-time"><?php echo $_smarty_tpl->tpl_vars['result']->value["stime"];?>
</span>
								<span class="wordage">字数 <span><?php echo strlen($_smarty_tpl->tpl_vars['result']->value["scon"]);?>
</span></span>
								<span class="views-count">阅读  <span class="hitnum"><?php echo $_smarty_tpl->tpl_vars['result']->value["hits"];?>
</span></span><span class="comments-count">评论  <span class="comment"><?php echo count($_smarty_tpl->tpl_vars['liuyanArr']->value);?>
</span></span><span class="likes-count">喜欢 301</span></div>
						</div>
					</div>
					<div class="show-content">
						<?php echo $_smarty_tpl->tpl_vars['result']->value["scon"];?>

					</div>
					<div class="show-foot">
						<a class="notebook" href="/nb/10339969">
							<i class="iconfont ic-search-notebook"></i> <span>日记本</span>
						</a>
						<div class="copyright" data-toggle="tooltip" data-html="true" data-original-title="转载请联系作者获得授权，并标注“简书作者”。">
							© 著作权归作者所有
						</div>
						<div class="modal-wrap" data-report-note="">
							<a id="report-modal">举报文章</a>
						</div>
					</div>
				</div>
				<div class="follow-detail">
					<div class="info">
						<?php if ($_smarty_tpl->tpl_vars['guanzhu']->value == "true") {?>
						<a class="btn btn-success guanzhu" style="display: none;"><span>关注</span></a>
						<a class="btn btn-success quxiaoguanzhu"><span>取消关注</span></a>
						<?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "false") {?>
						<a class="btn btn-success guanzhu"><span>关注</span></a>
						<a class="btn btn-success quxiaoguanzhu" style="display: none;"><span>取消关注</span></a>
						<?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "nosession") {?>
						<a class="btn btn-success guanzhu"><span>关注</span></a>
						<a class="btn btn-success quxiaoguanzhu" style="display: none;"><span>取消关注</span></a>
						<?php }?> <?php if ($_smarty_tpl->tpl_vars['love']->value == "true") {?>
						<a class="btn btn-success love" style="display: none;"><span>收藏</span></a>
						<a class="btn btn-success loveCancel"><span>取消收藏</span></a>
						<?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "false") {?>
						<a class="btn btn-success love"><span>收藏</span></a>
						<a class="btn btn-success loveCancel" style="display: none;"><span>取消收藏</span></a>
						<?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "nosession") {?>
						<a class="btn btn-success love"><span>收藏</span></a>
						<a class="btn btn-success loveCancel" style="display: none;"><span>取消收藏</span></a>
						<?php }?>
					</div>
				</div>
				<div>
					<div id="comment-list" class="comment-list">
						<div class="submit submit1">
							<form class="new-comment">
								<a class="avatar"><img src="<?php echo IMG_PATH;?>
/11.jpg"></a><textarea class="mcon" placeholder="写下你的评论..."></textarea>
								<div class="write-function-block">
									<a class="btn btn-send">发送</a>
									<a class="cancel">取消</a>
								</div>
							</form>
						</div>
						<div id="normal-comment-list" class="normal-comment-list ">
							<div class="message">
								<div>
									<div class="comment"style="display: none;">
										<div class="liuyan">
											<div class="author">
												<a href="" target="_blank" class="avatar"><img src=""></a>
												<div class="info">
													<a href="" target="_blank" class="name"></a>
													<div class="meta"><span></span></div>
												</div>
											</div>
											<div class="comment-wrap">
												<p></p>
												<div class="tool-group">
													<a><i class="iconfont ic-zan"></i> <span>8人赞</span></a>
													<a class="replayBtn replayBtn1" uid2="" pid=""><i class="iconfont ic-comment"></i> <span>回复1</span></a>
												</div>
											</div>
										</div>
										<div class="sub-comment-list reply">
											
											<div class="sub-comment replylist">
												<p>
													<a href="" target="_blank"></a>：
													<span></span>
												</p>
												<div class="sub-tool-group"><span class="time"></span>
													<a class="replayBtn replayBtn2" uid2="" pid=""><i class="iconfont ic-comment"></i> <span>回复2</span></a>
												</div>
											</div>
											
											<div class="sub-comment more-comment">
												<a class="add-comment-btn"><i class="iconfont ic-subcomment"></i> <span>添加新评论</span></a>
												<span class="line-warp"><a>收起</a></span>
											</div>
											<div class="submit submit2">
												<form class="new-comment">
													<textarea class="mcon" placeholder="写下你的评论..."></textarea>
													<div class="write-function-block">
														<a class="btn btn-sends replyBtn3">回复</a>
														<a class="cancel">取消</a>
													</div>
												</form>
											</div>
											<!---->
										</div>
									</div>
									
									<?php if (count($_smarty_tpl->tpl_vars['arr']->value) < 1) {?> <div class="top">
										<span class="comment">0</span>
										<span>条评论</span>
										<div class="pull-right">
											<a class="active">按喜欢排序</a>
											<a class="">按时间正序</a>
											<a class="">按时间倒序</a>
										</div>
								</div>
								<?php } else { ?>
								<div class="top">
									<span class="comment"><?php echo count($_smarty_tpl->tpl_vars['liuyanArr']->value);?>
</span>
									<span>条评论</span>
									<div class="pull-right">
										<a class="active">按喜欢排序</a>
										<a class="">按时间正序</a>
										<a class="">按时间倒序</a>
									</div>
								</div>
							</div>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
							<div class="comment">
								<div class="liuyan">
									<div class="author">
										<a href="" target="_blank" class="avatar"><img src=""></a>
										<div class="info">
											<a href="" target="_blank" class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</a>
											<div class="meta"><span><?php echo $_smarty_tpl->tpl_vars['v']->value["mtime"];?>
</span></div>
										</div>
									</div>
									<div class="comment-wrap">
										<p><?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>
</p>
										<div class="tool-group">
											<a><i class="iconfont ic-zan"></i> <span>8人赞</span></a>
											<a class="replayBtn replayBtn1" uid2="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
"><i class="iconfont ic-comment"></i> <span>回复</span></a>
										</div>
									</div>
								</div>
								<div class="sub-comment-list reply">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["son"], 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
									<div class="sub-comment replylist">
										<p>
											<a href="" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v1']->value["uname"];?>
</a>：
											<span><?php echo $_smarty_tpl->tpl_vars['v1']->value["mcon"];?>
</span>
										</p>
										<div class="sub-tool-group"><span class="time"><?php echo $_smarty_tpl->tpl_vars['v1']->value["mtime"];?>
</span>
											<a class="replayBtn replayBtn2" uid2="<?php echo $_smarty_tpl->tpl_vars['v1']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
"><i class="iconfont ic-comment"></i> <span>回复2</span></a>
										</div>
									</div>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

									<div class="sub-comment more-comment">
										<a class="add-comment-btn"><i class="iconfont ic-subcomment"></i> <span>添加新评论</span></a>
										<span class="line-warp"><a>收起</a></span>
									</div>
									<div class="submit submit2">
										<form class="new-comment">
											<textarea class="mcon" placeholder="写下你的评论..."></textarea>
											<div class="write-function-block">
												<a class="btn btn-sends replyBtn3">回复</a>
												<a class="cancel">取消</a>
											</div>
										</form>
									</div>
									<!---->
								</div>
							</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 <?php }?>
						</div>
					</div>
					<ul class="pagination">
						<li>
							<a href="javascript:void(null)" class="active">1</a>
						</li>
						<li>
							<a>2</a>
						</li>
						<li>
							<a>3</a>
						</li>
						<li>
							<a>4</a>
						</li>
						<li>
							<a>下一页</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		</div>
		<div class="mask"></div>
		<?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="notice">操作成功</div>
	</body>

</html><?php }
}
