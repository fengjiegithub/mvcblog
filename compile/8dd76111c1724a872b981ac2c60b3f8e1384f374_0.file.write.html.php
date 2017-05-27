<?php
/* Smarty version 3.1.30, created on 2017-03-17 17:59:59
  from "F:\wamp\www\w1610\2-28mvc\template\index\write.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc160f9a0ee4_30480807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dd76111c1724a872b981ac2c60b3f8e1384f374' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\index\\write.html',
      1 => 1489769995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58cc160f9a0ee4_30480807 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/write.css" />
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/bootstrap.min.css" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.all.min.js">
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/ajax_upload.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/write.js"><?php echo '</script'; ?>
>
</head>

<body>
	<form class="form" action="index.php?m=index&f=art&a=add" method="post">
		<div class="form-group">
			<label for="exampleInputEmail1">选择分类</label>
			<select class="form-control" name="cid" id="cid">
				<option value="0">一级分类</option>
				<?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

			</select>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">文章标题</label>
			<input type="text" class="form-control" id="stitle" name="stitle" placeholder="标题">
		</div>
		<!--<div class="form-group">
			<label for="exampleInputPassword1">文章概述</label>
			<input type="text" class="form-control" name="sview" />
		</div>-->
		<input type="file" name="file" value="选择头像" multiple="multiple" class="file"/>
			<input type="hidden" name="hidden" id="hidden" value="选择头像" />
			<div class="wrap">
				<img src="" alt="" />
				<div class="box"></div>
			</div>
		<!--<input id="lefile" type="file" style="display:none" class="file" name="file">
			<div class="input-append">
				<input id="photoCover" class="input-large" type="hidden" style="height:30px;"name="hidden">
				<a class="btn" onclick="$('input[id=lefile]').click();">选择图片</a>
			</div>
			 
			<?php echo '<script'; ?>
 type="text/javascript">
			$('input[id=lefile]').change(function() {
			$('#photoCover').val($(this).val());
			});
<?php echo '</script'; ?>
>-->
		<div class="form-group">
			<label for="scon">文章内容</label>
			<?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:100%;height:430px;" name="scon"><?php echo '</script'; ?>
>
		</div>
		<button type="submit" class="btn btn-default">提交</button>
	</form>
	<?php echo '<script'; ?>
>
		var ue = UE.getEditor('editor');
	<?php echo '</script'; ?>
>
</body>

</html><?php }
}
