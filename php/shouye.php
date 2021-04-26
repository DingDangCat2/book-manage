<?php

use function PHPSTORM_META\type;

include ("config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>shouye</title>
    </head>
    <?php
    header("content-type:text/html;charset=gbk");
    include("head.php");
    ?>
    <?php
    if(urldecode($_GET["Type"])){
       
        $sql="select * from yx_books where type='".($_GET["Type"])."'";//网页中的url参数仍然为未编码的数据，可能是因为php5以上的版本自动对编码数据进行了解码。
        $res=$conn->query($sql);
$result=mysqli_fetch_all($res);
if(mysqli_num_rows($res)>0){
    $count=mysqli_num_rows($res);
    echo "<table border=2 bgcolor=#FFFooo width=700>";
    echo "<tr><td width=100>编号</td><td width=100>书名</td><td>价格</td><td width=100>入库时间</td><td width=100>种类</td><td width=100>存有</td><td width=100>操作</td></tr>";
for($i=0;$i<$count;$i++){
    echo "<tr>";
    for($j=0;$j<6;$j++){
        $a=$result[$i][$j];//得到的rsult[i][j]是数组中的某一项，此时输出到html页面的echo语句需要为字符串，所以将result[i][j]赋值给变量再输出
        echo"<td>$a</td>";
        

    }
    echo "</tr>";
}

echo "</table>";//最初不能正常显示的原因时编码问题，数据库和代码的编码不一致，
}
    }
    ?>
    <body>

    </body>
</html>