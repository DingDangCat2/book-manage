<?php include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>首页</title>
<link rel="stylesheet" href="./static/bootstrap.css">
<link rel="stylesheet" href="./static/css/index.css">
</head>
<?php
header("content-type:text/html;charset=gbk");
if(@$_GET['tj'] == 'out'){
 session_destroy();
 echo "<script language=javascript>alert('退出成功！');window.location='index.php'</script>";
 exit;
}
?>
<?php
if(isset($_POST["submit"])){
  /* if(isset($_SESSION["id"])){//php的session必须在所有页面关闭之后才能清除，仅仅关闭当前页面不能清楚session,无法得到“所有会话窗口已经关闭”的事件来触发session清除工作。
        echo "<script language=javascript>alert('登陆成功');window.location='shouye1.php'</script>";
   exit;
    }
    */
    $username=$_POST['user'];
    $password=$_POST['password'];
    $code=$_POST['code'];
    $sql="select * from user where name='$username' and password='$password'";
    $res=$conn->query($sql);
    $result=mysqli_fetch_assoc($res);
    if(!$code==$_SESSION['auth']){
        echo "<script language=javascript>alert('验证码错误');window.location='index.php'</script>";
    exit; 
    }
if(!empty($result)) {
	$_SESSION['id']=$result['id'];
	
    echo "<script language=javascript>alert('登陆成功');window.location='shouye1.php'</script>";
    exit;
}
else { 
    
    echo "<script language=javascript>alert('密码不正确');window.location='index.php'</script>";
    exit;
	}
}
?>
<body>
<img src="">
<div class="f1">
<form  name="form" method="post" action="" style="margin-bottom:5px;" onsubmit="return check2()" >
<label for="user">用户：
<input type="text" name="user" id="user" class="user">
</label><br>
<label for="password">密码：
<input type="password" name="password" id="password" class="password">
</label><br>

        <label for="code">验证码:
        <input name="code" type="text" id="code" maxlength="4" class="chknumber_input" />
        </label>
        <img src="yanzhengma.php" style="vertical-align:middle" />
  <br>
<button type="submit" name="submit" value="登陆" >登陆</button>
<button><a href="./admin/adminindex.php">管理员登陆</a></button>
</form>
<a href='zhuce.php' class="a2">没有账号？点击注册>></a>    <br>
<a href='adminzhuce.php' class="a2">管理员,点击注册>></a>
</div>
<script language="javascript">
    function check2(){
    
        if(form.user.value==""){
            alert("用户名为空！");
            form.user.focus();
    
            return false;

    }
        else if(form.password.value==""){
            alert("md,输密码!");    
            form.password.focus();
            return false;
        };return true;
    }
</script>
<script src="./static/jquery-3.4.1.js"></script>
<script src="./static/bootstrap.js"></script>
</body>
</html>