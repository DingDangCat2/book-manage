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
       
        $sqll="select * from yx_books where type='".($_GET["Type"])."'";//网页中的url参数仍然为未编码的数据，可能是因为php5以上的版本自动对编码数据进行了解码。
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
	$sql="select * from yx_books where type='".($_GET["Type"])."' order by id asc limit $startno,$pagesize";//从$startno+1开始的$pagesize行数据
	$res=$conn->query($sql);
	
}

    ?>
 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
      <td width="88" height="30" align="center" bgcolor="#FFFFFF" class="line2">ID</td>
	    <td width="103" align="center" bgcolor="#FFFFFF" class="line2">书名</td>
	    <td width="77" align="center" bgcolor="#FFFFFF" class="line2">价格</td>
	    <td width="152" align="center" bgcolor="#FFFFFF" class="line2">入库时间</td>
	    <td width="107" align="center" bgcolor="#FFFFFF" class="line2">类别</td>
	    <td width="126" align="center" bgcolor="#FFFFFF" class="line2">现有数量(本)</td>
	    <td width="121" align="center" bgcolor="#FFFFFF" class="line2">操作</td>
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
	  $rs2=$conn->query("select * from lend where book_id='".$rows['id']."' and user_id='".$_SESSION['id']."'");//点号用来连接字符串。$rows[]是个数组，所以其中的“id”可以不用加引号，而$_session["id"]是个对象，其中必须加引号
	  $rows2=mysqli_fetch_assoc($rs2);
	  if(@$rows2['book_id']){
	  echo "<font color='red'>您已借阅</font>&nbsp;&nbsp;<a href=huanshu.php?book_id=$rows[id]>我要还书</a>";
	  }else{
	  	if($rows["total"]==0){
		echo "<font color='#cccc00'>该书已借完</font>";
		}else{
	  echo "<a href=jieshu.php?book_id=$rows[id]>我要借书</a>";
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
    首页 | 上一页 | <a href="shouye1.php?Type=<?php echo $_GET['Type'];?>@&pageno=<?php echo $pageno+1?>">下一页</a> | <a href="shouye1.php?Type=<?php echo $_GET['Type'];?>&pageno=<?php echo $pagecount?>">末页</a>
    <?php
	}
	else if(@$pageno==@$pagecount)
	{
	?>
    <a href="shouye1.php?Type=<?php echo @$_GET['Type'];?>@&pageno=1">首页</a> | <a href="shouye1.php?@Type=<?php echo @$_GET['Type'];?>&pageno=<?php echo @$pageno-1?>">上一页</a> | 下一页 | 末页
    <?php
	}
	else
	{
	?>
    <a href="shouye1.php?Type=<?php echo $_GET['Type'];?>&pageno=1">首页</a> | <a href="shouye1.php?Type=<?php echo $_GET['Type'];?>&pageno=<?php echo $pageno-1?>">上一页</a> | <a href="shouye1.php?Type=<?php echo $_GET['Type']?>&pageno=<?php echo $pageno+1?>">下一页</a> | <a href=shouye1.php"?pageno=<?php echo $pagecount?>">末页</a>
    <?php
	}
?>
    &nbsp;页次：<?php echo @$pageno ?>/<?php echo @$pagecount ?>页&nbsp;共有<?php echo @$recordcount?>条信息</td>
  </tr>
</table>
 
    <body>

    </body>
</html>