<?php
/* Smarty version 3.1.30, created on 2017-03-10 02:29:10
  from "F:\wamp\www\w1610\2-28mvc\template\admin\info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c20166442312_48711665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14fa574dd797449f145177a5e30e9572bea8d08f' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\admin\\info.html',
      1 => 1489109138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c20166442312_48711665 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<h1><?php echo $_smarty_tpl->tpl_vars['result']->value[0]["stitle"];?>
</h1>
	    <p><?php echo $_smarty_tpl->tpl_vars['result']->value[0]["scon"];?>
</p>
	    <form action="index.php?m=admin&f=art&a=view" method="post">
	    	未审核:<input type="radio" value="0" name="state"/><br />
	    	未通过:<input type="radio" value="1" name="state" /><br />
	    	审核中:<input type="radio" value="2" name="state"/><br />
	    	审核通过:<input type="radio" value="3" name="state"/><br />
	    	<input type="hidden"  value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sid'];?>
" name="sid"/>
	    	<input type="submit"  name="btn" value="提交"/>
	    </form>
	</body>
</html>
<?php }
}
