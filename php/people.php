<!DOCTYPE html>
<html lang="en">
<head>
    <title>个人中心</title>
</head>
<body>
    <?php
    include('config.php');
    header("content-type:text/html;charset=gbk");
    ?>
    <?php
    if($_SESSION['id']){
        $sql="select * from user where id ='".$_SESSION['id']."'";
        $sql2="select * from lend where user_id='".$_SESSION['id']."'";
        $result2=$conn->query("$sql2");
        $result=$conn->query("$sql");
        if($result){
            $rows=mysqli_fetch_assoc($result);
        }
    ?>
    <table border="3px" width="400px">
        <tr><th>个人中心界面</th></tr>
        <tr><td><p>账号编号：</p></td><td><?php echo $rows['id']?></td></tr>
        <tr><td><p>用户名：</p></td><td><?php echo $rows['name']?></td></tr>
        <tr><td><p>email：</p></td><td><?php echo $rows['email']?></td></tr>
        <tr><td><p>telphone：</p></td><td><?php echo $rows['tel']?></td></tr>
        <tr><td><p>地址：</p></td><td><?php echo $rows['address']?></td></tr>
    </table>
    <button><a href="fix.php">修改个人信息</a></button><br>
    <table border="3px" width="400px">
    <tr><th><p>已借图书：</p></th> </tr>
                                    
                                       <?php
                                                while($row2=mysqli_fetch_assoc($result2)){
                                                    $row5=$row2['book_id'];
                                                    $sql3="select * from yx_books where id='$row5'";
                                                    $result4=$conn->query("$sql3");
                                                    $row3=mysqli_fetch_assoc($result4);
                                            ?>
                                            <tr>
                                            <td><?php echo $row3['name']?></td><td><p><a href>查看</a></p></td></tr>
                                            <?php
                                        }
                                            ?>
    </table>
        <?php
      }
        ?>
<a href="shouye1.php"><button>回到首页</button></a>
</body>
</html>