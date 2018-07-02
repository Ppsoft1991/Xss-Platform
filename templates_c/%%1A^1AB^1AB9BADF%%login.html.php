<?php /* Smarty version 2.6.26, created on 2013-12-08 00:58:08
         compiled from login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XSS Platform</title>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/style/screen.css" type="text/css" media="screen, projection"> 
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/style/print.css" type="text/css" media="print"> 
<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/style/ie.css" type="text/css" media="screen, projection"><![endif]-->
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/style/style.css" type="text/css" media="screen, projection">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['root']; ?>
/source/js/jquery.js"></script>
<?php echo '
<script type="text/javascript">
function Login(){
	if($("#user").val()==""){
		ShowError("用户名不能为空");
		return false;
	}
	if($("#pwd").val()==""){
		ShowError("密码不能为空");
		return false;
	}
	$("#contentForm").submit();
}
function ShowError(content){
	$("#contentShow").attr("class","error");
	$("#contentShow").html(content);
}
</script>
'; ?>

</head>
<body>
<div class="container">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form id="contentForm" action="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=login&act=submit" method="post"> 
<fieldset> 
	<legend>登录</legend>
	<div id="contentShow"></div>
	<p> 
		<label for="user">用户名</label><br> 
		<input type="text" class="title" name="user" id="user"> 
	</p> 
	<p> 
		<label for="title">密码</label><br> 
		<input type="password" class="title" name="pwd" id="pwd"> 
	</p>
	<p> 
		<!--<input type="button" value="登录" onclick="Login()">-->
		<input type="submit" value="登录" onclick="Login()">
		<span style="margin-left:20px">
			还没有账号? <a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=register">立刻注册</a>
		</span>
	</p> 
</fieldset> 
</form>
</div>
</body>
</html>
<script>document.getElementById('user').focus();</script>  