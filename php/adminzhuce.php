<?php
    include('config.php');
    header("content-type:text/html;charset=gbk");
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>eroll</title>
</head>
<?php
if(isset($_POST["submit"])){
    $zhuuser=$_POST["zhuUser"];
    $zhuPassword=$_POST["zhuPassword"];
    $zhuEmail=$_POST["zhuEmail"];
    $zhuTel=$_POST["zhuTel"];
    $zhuAdress=$_POST["zhuAdress"];
    $sql5="insert into admin(username,password,email,tel,address) values('$zhuuser','$zhuPassword','$zhuEmail','$zhuTel','$zhuAdress')";
    $result5=$conn->query($sql5);
    if($result5==='false'){
        echo "err";
    }
	$sql6="select last_insert_id()";
    $result6=$conn->query($sql6);
    if($result6){
$re_arr=mysqli_fetch_array($result6);
$id=$re_arr[0];	
$_SESSION["id"]=$id;

echo "<script language=javascript>alert('ע��ɹ�,�ǰ�!');window.location='index.php'</script>";
}
}
?>
<body>
<form action="" method="post" onsubmit="return checks()" name="form1">
        <p font-size="20px">����Աע�����<p>
            <label for="zhuUser">�û�����<input type="text" name="zhuUser"></label><br>
            <label for="zhuPassword">���룺<input type="password" name="zhuPassword"></label><br>
            <label for="Pas">���룺<input type="password" name="Pas"></label><br>
            <label for="zhuEmail">e-mail:<input type="email" name="zhuEmail"></label><br>
            <label for="tel">�绰:<input type="tel" name="zhuTel"></label><br>
            <label for="zhuEmail">��ַ��<input type="text" name="zhuAdress"></label><br>
            <input type="submit" value="submit" name="submit">
            <input type="reset" value="reset" name="reset">
</form>
<script language='javascript'>
    function checks()
    { 			
		if (form1.zhuUser.value=="")
		{
			
	        alert("��ʵ��������Ϊ�գ�");
			form1.zhuUser.focus();
			return false;
	    }
		if (form1.zhuPassword.value=="" )
		{
			
	        alert("���벻��Ϊ�գ�");
			form1.zhuPassword.focus();
			return false;
	    }
		if (form1.pas.value=="" )
		{
			
	        alert("ȷ�����벻��Ϊ�գ�");
			form1.pas.focus();
			return false;
	    }
		
		if (form1.password.value!=form1.pas.value && form1.password.value!="")
		{
			alert("�������벻һ������ȷ�ϣ�");
			form1.password.focus();
			return false;
		}
		if (form1.zhuEmail.value=="")
		{
			
	        alert("Email����Ϊ�գ�");
			form1.zhuEmail.focus();
			return false;
	    }
			
		else if (form1.zhuEmail.value.charAt(0)=="." ||
			form1.zhuEmail.value.charAt(0)=="@"||
			form1.zhuEmail.value.indexOf('@', 0) == -1 ||
			form1.zhuEmail.value.indexOf('.', 0) == -1 ||
			form1.zhuEmail.value.lastIndexOf("@")==form1.zhuEmail.value.length-1 ||
			form1.zhuEmail.value.lastIndexOf(".")==form1.zhuEmail.value.length-1)
		{
			alert("Email�ĸ�ʽ����ȷ��");
			form1.zhuEmail.select();
			return false;
		}
		return true;

    }	
</script>
</body>
</html>