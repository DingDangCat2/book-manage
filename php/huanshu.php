<?php
use function PHPSTORM_META\type;
include ('config.php');
header("content-type:text/html;charset=gbk");
if($_SESSION['id']==""){
    echo "<script language=javascipt>alert('信息失效，请重新登陆');window.location='index.php'</script>";
    exit();
}else{
$bookId=$_GET['book_id'];

$sql1="delete from lend where book_id='$bookId' and user_id='".$_SESSION['id']."'";
$result1=$conn->query($sql1);
if($result1===false){
    echo "failed delete";
}
$sql2="update yx_books set total=total+1 where id='$bookId'";
$result2=$conn->query($sql2);
if($result2===false){
    echo "failed updated";
}
echo "<script language=javascript>alert('还书成功');window.location='shouye1.php'</script>";
}
?>