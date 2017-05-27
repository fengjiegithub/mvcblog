<?php
//	var_dump($_SERVER);
    define("MVC","yes");
	define("ROOT_URL",__DIR__);  //当前文件地址
	define("LIBS_URL",ROOT_URL."/libs");   //根目录
	define("TPL_ADMIN_URL",ROOT_URL."/template/admin");  //后台地址
	define("TPL_INDEX_URL",ROOT_URL."/template/index");   //前台地址
	define("HTTP_URL","http://".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")));
	define("FILE_URL","http://".$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"]);  //入口文件地址
	define("CSS_PATH",HTTP_URL."/static/css");    //css地址
	define("JS_PATH",HTTP_URL."/static/js");    //js地址
	define("IMG_PATH",HTTP_URL."/static/img");  //img地址
    define("FONT_PATH",ROOT_URL."/static/font");  //字体地址
    define("EDIT_PATH",HTTP_URL."/static/edit");  //文本编辑器
//	var_dump(EDIT_PATH);

	include LIBS_URL."/db.class.php";  //引入
	include LIBS_URL."/session.class.php";
	include LIBS_URL."/indexMain.class.php";
	include LIBS_URL."/main.class.php";
	include LIBS_URL."/infinite.class.php";
	include LIBS_URL."/pages.class.php";
	include LIBS_URL."/route.class.php";
    include LIBS_URL."/code.class.php";
    require LIBS_URL."/function.php";
	require LIBS_URL."/smarty/Smarty.class.php";
	$obj=new route();
    $obj->init();
?>