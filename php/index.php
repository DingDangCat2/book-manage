<?php include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>��ҳ</title>
<link rel="stylesheet" href="./static/bootstrap.css">
<link rel="stylesheet" href="./static/css/index.css">
</head>
<?php
header("content-type:text/html;charset=gbk");
if(@$_GET['tj'] == 'out'){
 session_destroy();
 echo "<script language=javascript>alert('�˳��ɹ���');window.location='index.php'</script>";
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
    $username=$_POST['user'];
    $password=$_POST['password'];
    $code=$_POST['code'];
    $sql="select * from user where name='$username' and password='$password'";
    $res=$conn->query($sql);
    $result=mysqli_fetch_assoc($res);
    if(!$code==$_SESSION['auth']){
        echo "<script language=javascript>alert('��֤�����');window.location='index.php'</script>";
    exit; 
    }
if(!empty($result)) {
	$_SESSION['id']=$result['id'];
	
    echo "<script language=javascript>alert('��½�ɹ�');window.location='shouye1.php'</script>";
    exit;
}
else { 
    
    echo "<script language=javascript>alert('���벻��ȷ');window.location='index.php'</script>";
    exit;
	}
}
?>
<body>
<img src="">
<div class="f1">
<form  name="form" method="post" action="" style="margin-bottom:5px;" onsubmit="return check2()" >
<label for="user">�û���
<input type="text" name="user" id="user" class="user">
</label><br>
<label for="password">���룺
<input type="password" name="password" id="password" class="password">
</label><br>

        <label for="code">��֤��:
        <input name="code" type="text" id="code" maxlength="4" class="chknumber_input" />
        </label>
        <img src="yanzhengma.php" style="vertical-align:middle" />
  <br>
<button type="submit" name="submit" value="��½" >��½</button>
<button><a href="./admin/adminindex.php">����Ա��½</a></button>
</form>
<a href='zhuce.php' class="a2">û���˺ţ����ע��>></a>    <br>
<a href='adminzhuce.php' class="a2">����Ա,���ע��>></a>
</div>
<script language="javascript">
    function check2(){
    
        if(form.user.value==""){
            alert("�û���Ϊ�գ�");
            form.user.focus();
    
            return false;

    }
        else if(form.password.value==""){
            alert("md,������!");    
            form.password.focus();
            return false;
        };return true;
    }
</script>
<script src="./static/jquery-3.4.1.js"></script>
<script src="./static/bootstrap.js"></script>
</body>
</html>