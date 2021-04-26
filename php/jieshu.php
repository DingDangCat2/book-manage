<?php include("config.php");header("content-type:text/html;charset=gbk");
		$bookid=$_GET['book_id'];
		if ($bookid==""){
			echo "<script language=javascript>alert('err');window.location='shouye1.php'</script>";
			exit();
		}
		else {

		if ($_SESSION['id']==""){
			echo "<script language=javascript>alert('err2');window.location='index.php'</script>";
			exit();
		}else{
		
		$now = date("Y-m-d");
		$lendsql="insert into lend(book_id, book_title, lend_time, user_id) values('$bookid','','$now','".$_SESSION['id']."')";
		$result3=$conn->query($lendsql);
		$conn->query("update yx_books set total=total-1 where id='$bookid'");
		echo "<script>alert('ΩË È≥…π¶');window.location='shouye1.php?Type=php'</script>";
	};
};
?>