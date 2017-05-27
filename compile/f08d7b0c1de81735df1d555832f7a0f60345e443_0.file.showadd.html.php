<?php
/* Smarty version 3.1.30, created on 2017-03-13 10:34:42
  from "F:\wamp\www\w1610\2-28mvc\template\admin\showadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c667b28e5a82_17545670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f08d7b0c1de81735df1d555832f7a0f60345e443' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\admin\\showadd.html',
      1 => 1489397677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c667b28e5a82_17545670 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/showadd.css" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/ajax_upload.js"><?php echo '</script'; ?>
>
	</head>
	<?php echo '<script'; ?>
>
		window.onload=function(){
			var btn=document.querySelector(".btn");
			var hiddenIput=document.querySelector("#hidden");
			var newobj=new upload("upload.class.php",".file",".box","img");
			console.log(newobj);
			newobj.up(function(e){
				hiddenIput.setAttribute("value",e);
				btn.removeAttribute("disabled");
			})
			newobj.loadstart=function(){
				btn.setAttribute("disabled","disabled");
			}
		}
	<?php echo '</script'; ?>
>
	<body>
	<form action="index.php?m=admin&f=category&a=add" method="post">
		上级分类<select name="pid">
					<option value="0">一级分类</option>
					<?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

			</select><br/><br/>
		添加分类<input type="text" name="cname"/><br/><br/>
		<input type="file" name="file" value="" multiple="multiple" class="file"/>
		<input type="hidden" name="hidden" id="hidden" value="" />
		<div class="wrap">
			<img src="" alt="" />
			<div class="box"></div>
		</div>
		<input type="submit" value="提交" /><br/>
	</form>
</body>
</html>
<?php }
}
