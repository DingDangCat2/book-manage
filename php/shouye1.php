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
    $pagesize=10;
    if(urldecode(@$_GET["Type"])){
       
        $sqll="select * from yx_books where type='".($_GET["Type"])."'";//��ҳ�е�url������ȻΪδ��������ݣ���������Ϊphp5���ϵİ汾�Զ��Ա������ݽ����˽��롣
        $ress=$conn->query($sqll);
        $recordcount=mysqli_num_rows($ress);
	$pagecount=($recordcount-1	)/$pagesize+1;
	$pagecount=(int)$pagecount;
	@$pageno=$_GET["pageno"];
	if($pageno=="")
	{
		$pageno=1;
	}
	if($pageno<1)
	{
		$pageno=1;
	}
	if($pageno>$pagecount)
	{
		$pageno=$pagecount;
	}
	$startno=($pageno-1)*$pagesize;
	$sql="select * from yx_books where type='".($_GET["Type"])."' order by id asc limit $startno,$pagesize";//��$startno+1��ʼ��$pagesize������
	$res=$conn->query($sql);
	
}

    ?>
 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
      <td width="88" height="30" align="center" bgcolor="#FFFFFF" class="line2">ID</td>
	    <td width="103" align="center" bgcolor="#FFFFFF" class="line2">����</td>
	    <td width="77" align="center" bgcolor="#FFFFFF" class="line2">�۸�</td>
	    <td width="152" align="center" bgcolor="#FFFFFF" class="line2">���ʱ��</td>
	    <td width="107" align="center" bgcolor="#FFFFFF" class="line2">���</td>
	    <td width="126" align="center" bgcolor="#FFFFFF" class="line2">��������(��)</td>
	    <td width="121" align="center" bgcolor="#FFFFFF" class="line2">����</td>
        </tr>
		<?php
        	while(@$rows=mysqli_fetch_assoc($res))
            {

				
            ?>
            <tr>
              <td height="30" align="center" bgcolor="#FFFFFF"><?php echo $rows["id"];?></td>
              <td align="center" bgcolor="#FFFFFF"><?php echo $rows["name"];?></td>
              <td align="center" bgcolor="#FFFFFF"><?php echo $rows["price"];?></td>
              <td align="center" bgcolor="#FFFFFF"><?php echo $rows["uploadtime"];?></td>
              <td align="center" bgcolor="#FFFFFF"><?php echo $rows["type"];?></td>
              <td align="center" bgcolor="#FFFFFF"><?php echo $rows["total"];?></td>
              <td align="center" bgcolor="#FFFFFF" class="line2">
              <?php 
	  $rs2=$conn->query("select * from lend where book_id='".$rows['id']."' and user_id='".$_SESSION['id']."'");//������������ַ�����$rows[]�Ǹ����飬�������еġ�id�����Բ��ü����ţ���$_session["id"]�Ǹ��������б��������
	  $rows2=mysqli_fetch_assoc($rs2);
	  if(@$rows2['book_id']){
	  echo "<font color='red'>���ѽ���</font>&nbsp;&nbsp;<a href=huanshu.php?book_id=$rows[id]>��Ҫ����</a>";
	  }else{
	  	if($rows["total"]==0){
		echo "<font color='#cccc00'>�����ѽ���</font>";
		}else{
	  echo "<a href=jieshu.php?book_id=$rows[id]>��Ҫ����</a>";
	  }
	  	}
	  ?>	  </td>
	</tr>
	<?php
	}
?>
</table>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
  <td height="35" align="center" bgcolor="#FFFFFF">
  <?php
	if(@$pageno==1)
	{
	?>
    ��ҳ | ��һҳ | <a href="shouye1.php?Type=<?php echo $_GET['Type'];?>@&pageno=<?php echo $pageno+1?>">��һҳ</a> | <a href="shouye1.php?Type=<?php echo $_GET['Type'];?>&pageno=<?php echo $pagecount?>">ĩҳ</a>
    <?php
	}
	else if(@$pageno==@$pagecount)
	{
	?>
    <a href="shouye1.php?Type=<?php echo @$_GET['Type'];?>@&pageno=1">��ҳ</a> | <a href="shouye1.php?@Type=<?php echo @$_GET['Type'];?>&pageno=<?php echo @$pageno-1?>">��һҳ</a> | ��һҳ | ĩҳ
    <?php
	}
	else
	{
	?>
    <a href="shouye1.php?Type=<?php echo $_GET['Type'];?>&pageno=1">��ҳ</a> | <a href="shouye1.php?Type=<?php echo $_GET['Type'];?>&pageno=<?php echo $pageno-1?>">��һҳ</a> | <a href="shouye1.php?Type=<?php echo $_GET['Type']?>&pageno=<?php echo $pageno+1?>">��һҳ</a> | <a href=shouye1.php"?pageno=<?php echo $pagecount?>">ĩҳ</a>
    <?php
	}
?>
    &nbsp;ҳ�Σ�<?php echo @$pageno ?>/<?php echo @$pagecount ?>ҳ&nbsp;����<?php echo @$recordcount?>����Ϣ</td>
  </tr>
</table>
 
    <body>

    </body>
</html>