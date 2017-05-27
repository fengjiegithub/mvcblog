<?php
/* Smarty version 3.1.30, created on 2017-03-13 12:49:45
  from "F:\wamp\www\w1610\2-28mvc\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6875912d504_23195869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93f58aded2beb9a66c7f391e37c58ded613c9f43' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\index\\reg.html',
      1 => 1489405782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6875912d504_23195869 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/reg.css" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>	
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/reg.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/ajax_upload.js"><?php echo '</script'; ?>
>
	</head>

	<body>
		<div class="sign">
			<!--<div class="logo"><a href="/"><img src="<?php echo IMG_PATH;?>
/logo-58fd04f6f0de908401aa561cda6a0688.png" alt="Logo"></a></div>-->
			<div class="main">
				<h4 class="title">
				<div class="normal-title">
					<a class="" href="/sign_in">注册</a>
				</div>
			</h4>
				<div class="js-sign-up-container">
					<form action="index.php?m=index&f=login&a=addReg" method="post" id="myform">
						<div class="input-prepend restyle">
							<input placeholder="用户名" type="text" name="uname" />
						</div>
						<div class="input-prepend restyle no-radius js-normal ">
							<input placeholder="请输入密码" type="password" name="upass" id="pass" />
						</div>
						<div class="input-prepend">
							<input placeholder="请再次输入密码" type="password" name="upass2" />
						</div>
						<div class="input-prepend ">
							<input class="w88" placeholder="请输入验证码" type="text" name="code" />
							<img src="index.php?m=admin&f=index&a=code" alt="" width="100" height="50" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()" style="vertical-align:middle">
						</div>
						<input type="file" name="file" value="选择头像" multiple="multiple" class="file"/>
						<input type="hidden" name="hidden" id="hidden" value="选择头像" />
						<div class="wrap">
							<img src="" alt="" />
							<div class="box"></div>
						</div>
						<input type="submit" name="commit" value="注册" class="sign-up-button">
					</form>
					已有用户名？请
					<a href="index.php?m=index&f=login&a=init">登陆</a>

					<a href="index.php">返回主页</a>
				</div>
			</div>
		</div>
	</body>

</html><?php }
}
