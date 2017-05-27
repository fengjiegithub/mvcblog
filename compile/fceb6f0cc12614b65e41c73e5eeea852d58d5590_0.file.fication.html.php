<?php
/* Smarty version 3.1.30, created on 2017-03-07 02:05:17
  from "F:\wamp\www\w1610\2-28mvc\template\admin\fication.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58be074d5f9819_48947461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fceb6f0cc12614b65e41c73e5eeea852d58d5590' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\admin\\fication.html',
      1 => 1488848712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58be074d5f9819_48947461 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
	<form action="addConCheck.php"  >
		上级分类<select name="pid">
					<option value="0">一级分类</option>
			</select><br/><br/>
		标题<input type="text" name="stitle" value="" /><br/>
		内容<br/><textarea name="scon" rows="" cols=""></textarea><br/><br/>
		<input type="file" name="file" value="" multiple="multiple" class="file"/>
		<input type="hidden" name="hidden" id="hidden" value="" />
		<div class="wrap">
			<img src="" alt="" />
			<div class="box"></div>
		</div>
		<input type="submit" name="" id="" value="提交" class="btn"/>
	</form>
</body>
</html>
<?php }
}
