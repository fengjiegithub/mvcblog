<?php
/* Smarty version 3.1.30, created on 2017-03-13 05:02:38
  from "F:\wamp\www\w1610\2-28mvc\template\index\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c619dee68bf9_31786842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b06e60643d104d2aa9b5c7939ed8f824768a9a80' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\index\\home.html',
      1 => 1489377756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58c619dee68bf9_31786842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/home.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<div class="container person">
	<div class="row">
		<div class="col-xs-16 main">
			<div class="main-top">
				<a class="avatar" href="/u/60bfdce39d74">
					<img src="" alt="">
				</a>

				<div class="title">
					<a class="name" href="/u/60bfdce39d74">12345_489b</a>
				</div>
				<div class="info">
					<ul>
						<li>
							<div class="meta-block">
								<a href="/users/60bfdce39d74/following">
									<p>0</p>
									关注 <i class="iconfont ic-arrow"></i>
								</a>
							</div>
						</li>
						<li>
							<div class="meta-block">
								<a href="/users/60bfdce39d74/followers">
									<p>0</p>
									粉丝 <i class="iconfont ic-arrow"></i>
								</a>
							</div>
						</li>
						<li>
							<div class="meta-block">
								<a href="/u/60bfdce39d74">
									<p>0</p>
									文章 <i class="iconfont ic-arrow"></i>
								</a>
							</div>
						</li>
						<li>
							<div class="meta-block">
								<p>0</p>
								<div>字数</div>
							</div>
						</li>
						<li>
							<div class="meta-block">
								<p>0</p>
								<div>收获喜欢</div>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div id="outer-container">
				<ul class="trigger-menu" data-pjax-container="#list-container">
					<li class="active">
						<a href=""><i class="iconfont ic-articles"></i> 文章</a>
					</li>
					<li class="">
						<a href=""><i class="iconfont ic-feed"></i> 动态</a>
					</li>
					<li class="">
						<a href=""><i class="iconfont ic-latestcomments"></i> 最新评论</a>
					</li>
					<li class="">
						<a href=""><i class="iconfont ic-hot"></i> 热门</a>
					</li>
				</ul>

				<div id="list-container">
					<!-- 文章列表模块 -->
					<ul class="mui-table-view">
                <li class="mui-table-view-cell mui-media">
                    <a href="javascript:;">
                        <img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">
                        <div class="mui-media-body">
                            幸福
                            <p class="mui-ellipsis">能和心爱的人一起睡觉，是件幸福的事情；可是，打呼噜怎么办？</p>
                        </div>
                    </a>
                </li>
                <li class="mui-table-view-cell mui-media">
                    <a href="javascript:;">
                        <img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">
                        <div class="mui-media-body">
                            木屋
                            <p class="mui-ellipsis">想要这样一间小木屋，夏天挫冰吃瓜，冬天围炉取暖.</p>
                        </div>
                    </a>
                </li>
                <li class="mui-table-view-cell mui-media">
                    <a href="javascript:;">
                        <img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">
                        <div class="mui-media-body">
                            CBD
                            <p class="mui-ellipsis">烤炉模式的城，到黄昏，如同打翻的调色盘一般.</p>
                        </div>
                    </a>
                </li>
            </ul>
				</div>
			</div>
		</div>

		<div class="col-xs-7 col-xs-offset-1 aside">
			<div class="description">
				<div class="js-intro"></div>

			</div>
			<ul class="list user-dynamic">
				<li>
					<a href="/users/60bfdce39d74/subscriptions">
						<i class="iconfont ic-collection"></i> <span>我关注的专题/文集</span>
					</a>
				</li>
				<li>
					<a href="/users/60bfdce39d74/liked_notes">
						<i class="iconfont ic-like"></i> <span>我喜欢的文章</span>
					</a>
				</li>
			</ul>
			<!-- 专题和文集 -->
			<div>
				<div>
					<!---->
					<div class="title">我创建的专题</div>
					<div class="new-collection-block">
						<a href="/collections/new" class="new-collection-btn"><i class="iconfont ic-follow"></i><span>创建一个新专题</span></a>
					</div>
				</div>
				<!---->
				<!---->
			</div>
		</div>

	</div>
</div>
</body>

</html><?php }
}
