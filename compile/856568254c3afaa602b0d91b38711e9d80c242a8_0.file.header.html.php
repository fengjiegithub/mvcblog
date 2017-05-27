<?php
/* Smarty version 3.1.30, created on 2017-03-17 17:54:30
  from "F:\wamp\www\w1610\2-28mvc\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc14c615ca22_87317087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856568254c3afaa602b0d91b38711e9d80c242a8' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\index\\header.html',
      1 => 1489769667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cc14c615ca22_87317087 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index.css" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/click.js"><?php echo '</script'; ?>
>

	</head>

	<body class="reader-black-font">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="width-limit">
				<!-- 左上方 Logo -->
				<!-- <a class="logo" href=""><img src="<?php echo IMG_PATH;?>
/logo-58fd04f6f0de908401aa561cda6a0688.png" alt=""></a>-->

				<!-- 右上角 -->
				<!-- 未登录显示登录/注册/写文章 -->
				<a class="btn write-btn" href="index.php?m=index&f=art&a=show">
					<i class="iconfont ic-write"></i>写文章</a>
				<?php if (!empty($_smarty_tpl->tpl_vars['indexLogin']->value)) {?>
				<div class="user">
					<div data-hover="dropdown">
						<a class="avatar" href=""><img src="<?php echo IMG_PATH;?>
/11.jpg" alt="120"></a>
					</div>
					<ul class="dropdown-menu">
						<li>
							<a href="index.php?m=index&f=my&a=init">
								<i class="iconfont ic-navigation-profile"></i><span>我的主页</span>
							</a>
						</li>
						<li>
							<a href="/bookmarks">
								<i class="iconfont ic-navigation-mark"></i><span>收藏的文章</span>
							</a>
						</li>
						<li>
							<a href="/users/60bfdce39d74/liked_notes">
								<i class="iconfont ic-navigation-like"></i><span>喜欢的文章</span>
							</a>
						</li>
						<li>
							<a href="/wallet">
								<i class="iconfont ic-navigation-wallet"></i><span>我的钱包</span>
							</a>
						</li>
						<li>
							<a href="/settings">
								<i class="iconfont ic-navigation-settings"></i><span>设置</span>
							</a>
						</li>
						<li>
							<a rel="nofollow" data-method="delete" href="index.php?m=index&f=login&a=logout">
								<i class="iconfont ic-navigation-signout"></i><span>退出</span>
							</a>
						</li>
					</ul>
				</div>
				<?php } else { ?>
				<a class="btn sign-up" href="index.php?m=index&f=login&a=reg">注册</a>
				<a class="btn log-in" href="index.php?m=index&f=login&a=init">登录</a>
				<?php }?>
				<div class="container">
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="index.php?m=index">
									<span class="menu-text">首页</span><i class="iconfont ic-navigation-discover menu-icon"></i>
								</a>
							</li>
							<!--<li class="">
								<a class="app-download-btn" href="/apps"><span class="menu-text">下载App</span><i class="iconfont ic-navigation-download menu-icon"></i></a>
							</li>-->
							<!--<li class="search">
								<form target="_blank" action="/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
									<input type="text" name="q" id="q" value="" placeholder="搜索" class="search-input">
									<a class="search-btn" href="javascript:void(null)"><i class="iconfont ic-search"></i></a>
								</form>
							</li>-->
						</ul>
					</div>
				</div>
			</div>
		</nav><?php }
}
