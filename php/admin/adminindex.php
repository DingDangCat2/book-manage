<?php

use function PHPSTORM_META\type;

include("../config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>����Ա��ҳ</title>
</head>
<?php
header("content-type:text/html;charset=gbk");
if(@$_GET['tj'] == 'adminout'){
 session_destroy();
 echo "<script language=javascript>alert('�˳��ɹ���');window.location='adminindex.php'</script>";
 exit;
}
?>
<?php
if(isset($_POST["submit"])){
  /* if(isset($_SESSION["id"])){//php��session����������ҳ��ر�֮���������������رյ�ǰҳ�治�����session,�޷��õ������лỰ�����Ѿ��رա����¼�������session���������
        echo "<script language=javascript>alert('��½�ɹ�');window.location='shouye1.php'</script>";
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
    echo "<script language=javascript>alert('��½�ɹ�');window.location='adminshouye1.php'</script>";
    exit;
}
else { 

    echo "<script language=javascript>alert('��½ʧ�ܣ�');window.location='adminindex.php'</script>";
        exit;
        }
    exit;
	
}
?>
<body>
<img src="">
<form  name="form2" method="post" action="" style="margin-bottom:5px;" onsubmit="return check3()">
<label for="adminuser">����Ա��
<input type="text" name="adminuser" id="adminuser">
</label><br>
<label for="adminpassword">���룺
<input type="password" name="adminpassword" id="adminpassword">
</label><br>
<div class="chknumber">
        <label>��֤�룺
        <input name="code" type="text" id="code" maxlength="4" class="chknumber_input" />
        </label>
        <img src="yanzhengma.php" style="vertical-align:middle" />
      </div><br>
<input type="submit" name="submit" value="��½">
</form>
<button><a href="../index.php?tj==out">�û���½</a></button>
<script language="javascript">
    function check3(){
        if(form2.adminuser.value==""){
            alert("�û���Ϊ�գ�");
            form2.adminuser.focus();
            return false;
        }
        else if(form2.adminpassword.value==""){
            alert("md,������!");
            form2.adminpassword.focus();
            return false;
        };return true;
    }
</script>
</body>
</html>