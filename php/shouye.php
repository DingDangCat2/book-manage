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
       
        $sql="select * from yx_books where type='".($_GET["Type"])."'";//��ҳ�е�url������ȻΪδ��������ݣ���������Ϊphp5���ϵİ汾�Զ��Ա������ݽ����˽��롣
        $res=$conn->query($sql);
$result=mysqli_fetch_all($res);
if(mysqli_num_rows($res)>0){
    $count=mysqli_num_rows($res);
    echo "<table border=2 bgcolor=#FFFooo width=700>";
    echo "<tr><td width=100>���</td><td width=100>����</td><td>�۸�</td><td width=100>���ʱ��</td><td width=100>����</td><td width=100>����</td><td width=100>����</td></tr>";
for($i=0;$i<$count;$i++){
    echo "<tr>";
    for($j=0;$j<6;$j++){
        $a=$result[$i][$j];//�õ���rsult[i][j]�������е�ĳһ���ʱ�����htmlҳ���echo�����ҪΪ�ַ��������Խ�result[i][j]��ֵ�����������
        echo"<td>$a</td>";
        

    }
    echo "</tr>";
}

echo "</table>";//�������������ʾ��ԭ��ʱ�������⣬���ݿ�ʹ���ı��벻һ�£�
}
    }
    ?>
    <body>

    </body>
</html>