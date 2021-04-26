<?php
include('../config.php');
if($_GET['book_id']){
$id=$_GET['book_id'];
$sql12="update yx_books set total=total+1 where id=$id";
$result13=$conn->query($sql12);
if($result13){
echo "<script language=javascript>alert('增加图书成功!');window.location='adminshouye1.php';</script>";
}
if(!$result13){
    echo "<script language=javascript>alert('增加图书失败!');window.location='adminshouye1.php';</script>";
}
}
else{
    echo "<script language=javascript>alert('不存在书籍信息!');window.location='adminshouye1.php';</script>";
}
?>