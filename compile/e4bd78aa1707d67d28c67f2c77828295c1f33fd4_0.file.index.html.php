<?php
/* Smarty version 3.1.30, created on 2017-03-17 17:53:34
  from "F:\wamp\www\w1610\2-28mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc148e1b2170_28449781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4bd78aa1707d67d28c67f2c77828295c1f33fd4' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\index\\index.html',
      1 => 1489769610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58cc148e1b2170_28449781 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'F:\\wamp\\www\\w1610\\2-28mvc\\libs\\smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container index">
	<div class="row">
		<!-- Banner -->
		<div id="indexCarousel" class="carousel slide">
			<!--ol class="carousel-indicators">
            <li data-target="#indexCarousel" data-slide-to="0"
              class="active"></li>
            <li data-target="#indexCarousel" data-slide-to="1"
              class=""></li>
            <li data-target="#indexCarousel" data-slide-to="2"
              class=""></li>
            <li data-target="#indexCarousel" data-slide-to="3"
              class=""></li>
            <li data-target="#indexCarousel" data-slide-to="4"
              class=""></li>
            <li data-target="#indexCarousel" data-slide-to="5"
              class=""></li>
            <li data-target="#indexCarousel" data-slide-to="6"
              class=""></li>
        </ol-->
			<div class="carousel-inner">
				<div class="item">
					<div class="banner">
						<a target="_blank" href=""><img src="<?php echo IMG_PATH;?>
/41252640489599b0fba76fca545cda612f49a5e0.jpg" alt=""></a>
					</div>
					<div class="banner">
						<a target="_blank" href=""><img src="<?php echo IMG_PATH;?>
/da276b0e8bdf72cc4fed73a4afcb48841243e7cb.jpg" alt=""></a>
					</div>
					<div class="banner">
						<a target="_blank" href=""><img src="<?php echo IMG_PATH;?>
/50c41cf9071633ca547721ea6e2771fa8b83b4a8.jpg" alt=""></a>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#indexCarousel" role="button" data-slide="prev"><i class="iconfont ic-previous-s"></i></a>
			<a class="right carousel-control" href="#indexCarousel" role="button" data-slide="next"><i class="iconfont ic-next-s"></i></a>
		</div>
		<!-- Banner -->
		<div class="col-xs-16 main">
			<div class="recommend-collection">
				<div class="top-line">
					<div class="row">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result1']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
						<a class="col-xs-4 col-lg-3 back-drop" target="_blank" href="">
							<img src="<?php echo $_smarty_tpl->tpl_vars['s']->value['img'];?>
" alt="195">
							<div class="name"><?php echo $_smarty_tpl->tpl_vars['s']->value["cname"];?>
</div>
							<div class="mask"></div>
						</a>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<a class="col-xs-4 col-lg-3" target="_blank" href="">
							<div class="more-hot-collection">更多热门专题 <i class="iconfont ic-link"></i></div>
						</a>
					</div>
				</div>
			</div>
			<div id="list-container">

				<!-- 文章列表模块 -->
				<ul class="note-list" infinite-scroll-url="/">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
					<li class="have-img">
						<a class="wrap-img" href="" target="_blank">
							<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['simg'];?>
">
						</a>
						<div class="content">

							<div class="author">
								<a class="avatar" target="_blank" href="">
									<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['uimg'];?>
" alt="">
								</a>
								<div class="name">
									<a class="blue-link" target="_blank" href=""><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</a>
									<span class="time" data-shared-at="2017-03-05T08:48:48+08:00"><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</span>
								</div>
							</div>
							<a class="title" target="_blank" href="index.php?m=index&f=cone&a=show&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
							<p class="abstract">
								<?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['v']->value["scon"]),90,"...");?>

							</p>
							<div class="meta">
								<a class="collection-tag" target="_blank" href=""><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
								<a target="_blank" href="">
									<i class="iconfont ic-list-read"></i> 6474
								</a>
								<a target="_blank" href="">
									<i class="iconfont ic-list-comments"></i> 110
								</a> <span><i class="iconfont ic-list-like"></i> 567</span>
								<span><i class="iconfont ic-list-money"></i> 3</span>
							</div>
						</div>
					</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>

				<!-- 文章列表模块 -->
			</div>
		</div>
		<div class="col-xs-7 col-xs-offset-1 aside">
			<!--<div class="board">
				<a target="_blank" href="/recommendations/notes?category_id=56&amp;utm_medium=index-banner-s&amp;utm_source=desktop">
					<img src="<?php echo IMG_PATH;?>
/banner-s-1-b8ff9ec59f72ea88ecc8c42956f41f78.png" alt="Banner s 1">
				</a>
				<a target="_blank" href=""><img src="<?php echo IMG_PATH;?>
/banner-s-2-0ca33954547a07153f9cccd5eddbad42.png" alt="Banner s 2"></a>
				<a target="_blank" href=""><img src="<?php echo IMG_PATH;?>
/banner-s-3-7123fd94750759acf7eca05b871e9d17.png" alt="Banner s 3"></a>
				<a target="_blank" href=""><img src="<?php echo IMG_PATH;?>
/banner-s-4-b70da70d679593510ac93a172dfbaeaa.png" alt="Banner s 4"></a>
			</div>-->

			<!-- 首页右侧 App 下载提示 -->
			<!--<div class="download">
				<a href="/apps"><img id="js-download-img" src="<?php echo IMG_PATH;?>
/app_download-e9146ff3a117129153d283495b51f40e.png" alt="App download"></a>
				<div class="link-btn" id="js-link-btn" style="display: block;">
					<a class="col-xs-8 scan" data-toggle="popover" data-placement="top" data-html="true" data-trigger="hover" data-content="<img src=&quot;img/download-app-qrcode-0257cd2c1d094cba9caa7bdc9e5a1393.png&quot; alt=&quot;Download app qrcode&quot; />" href="javascript:void(0)" data-original-title="" title="">
						<div><i class="iconfont ic-qrcode"></i><span>扫码</span></div>
					</a>
					<a class="col-xs-8 android" href="http://downloads.jianshu.io/apps/haruki/jianShu-release-2.1.3-JianShu.apk">
						<div><i class="iconfont ic-android"></i><span>安卓</span></div>
					</a>
					<a class="col-xs-8 ios" href="https://itunes.apple.com/cn/app/jian-shu/id888237539">
						<div><i class="iconfont ic-ios"></i><span>iOS</span></div>
					</a>
				</div>
			</div>-->
			<!-- -->

			<div class="recommend">
				<div class="title"><span>推荐作者</span>
					<div class="reload">
						<div class="page-count">1/26</div>
						<div class="page-change">
							<a><i class="iconfont ic-previous-s"></i></a>
							<a><i class="iconfont ic-next-s"></i></a>
						</div>
					</div>
				</div>
				<ul class="list">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
					<li>
						<a href="/u/5SqsuF?utm_source=desktop&amp;utm_medium=index-users" target="_blank" class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['uimg'];?>
"></a>
						<a class="follow"><i class="iconfont ic-follow"></i>关注
						</a>
						<a href="/u/5SqsuF?utm_source=desktop&amp;utm_medium=index-users" target="_blank" class="name">
							<?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>

						</a>
						<p>
							<!--写了223.2K字 · 13.3K喜欢-->
							写了<?php echo strlen($_smarty_tpl->tpl_vars['v']->value["scon"]);?>
字
						</p>
					</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
				<a href="/recommendations/users?utm_source=desktop&amp;utm_medium=index-users" target="_blank" class="find-more">
					查看全部<i class="iconfont ic-link"></i></a>
			</div>
		</div>
	</div>
</div>
</body>

</html><?php }
}
