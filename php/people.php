<!DOCTYPE html>
<html lang="en">
<head>
    <title>��������</title>
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
        <tr><th>�������Ľ���</th></tr>
        <tr><td><p>�˺ű�ţ�</p></td><td><?php echo $rows['id']?></td></tr>
        <tr><td><p>�û�����</p></td><td><?php echo $rows['name']?></td></tr>
        <tr><td><p>email��</p></td><td><?php echo $rows['email']?></td></tr>
        <tr><td><p>telphone��</p></td><td><?php echo $rows['tel']?></td></tr>
        <tr><td><p>��ַ��</p></td><td><?php echo $rows['address']?></td></tr>
    </table>
    <button><a href="fix.php">�޸ĸ�����Ϣ</a></button><br>
    <table border="3px" width="400px">
    <tr><th><p>�ѽ�ͼ�飺</p></th> </tr>
                                    
                                       <?php
                                                while($row2=mysqli_fetch_assoc($result2)){
                                                    $row5=$row2['book_id'];
                                                    $sql3="select * from yx_books where id='$row5'";
                                                    $result4=$conn->query("$sql3");
                                                    $row3=mysqli_fetch_assoc($result4);
                                            ?>
                                            <tr>
                                            <td><?php echo $row3['name']?></td><td><p><a href>�鿴</a></p></td></tr>
                                            <?php
                                        }
                                            ?>
    </table>
        <?php
      }
        ?>
<a href="shouye1.php"><button>�ص���ҳ</button></a>
</body>
</html>