<?php

use function PHPSTORM_META\type;

include("../config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>管理员首页</title>
</head>
<?php
header("content-type:text/html;charset=gbk");
if(@$_GET['tj'] == 'adminout'){
 session_destroy();
 echo "<script language=javascript>alert('退出成功！');window.location='adminindex.php'</script>";
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
    $adminuser=$_POST['adminuser'];
    $adminpassword=$_POST['adminpassword'];
    $_SESSION['user']=$adminuser;
    $adsql="select * from admin where username='$adminuser' and password='$adminpassword'";
    $ress=$conn->query($adsql);
    $result9=mysqli_fetch_assoc($ress);
    if(!empty($result9)) {
    $_SESSION['admin']=$result9['id'];
    $_SESSION['user']=$adminuser;
    echo "<script language=javascript>alert('登陆成功');window.location='adminshouye1.php'</script>";
    exit;
}
else { 

    echo "<script language=javascript>alert('登陆失败！');window.location='adminindex.php'</script>";
        exit;
        }
    exit;
	
}
?>
<body>
<img src="">
<form  name="form2" method="post" action="" style="margin-bottom:5px;" onsubmit="return check3()">
<label for="adminuser">管理员：
<input type="text" name="adminuser" id="adminuser">
</label><br>
<label for="adminpassword">密码：
<input type="password" name="adminpassword" id="adminpassword">
</label><br>
<div class="chknumber">
        <label>验证码：
        <input name="code" type="text" id="code" maxlength="4" class="chknumber_input" />
        </label>
        <img src="yanzhengma.php" style="vertical-align:middle" />
      </div><br>
<input type="submit" name="submit" value="登陆">
</form>
<button><a href="../index.php?tj==out">用户登陆</a></button>
<script language="javascript">
    function check3(){
        if(form2.adminuser.value==""){
            alert("用户名为空！");
            form2.adminuser.focus();
            return false;
        }
        else if(form2.adminpassword.value==""){
            alert("md,输密码!");
            form2.adminpassword.focus();
            return false;
        };return true;
    }
</script>
</body>
</html>