<?php
require_once('../config.php');
header("content-type:text/html;charset=gbk")
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͼ�����ϵͳ</title>
<style "text/css">
<!--
body {
	margin-left: 3px;
	margin-top: 0px;
	margin-right: 3px;
	margin-bottom: 0px;
}
.STYLE1 {
	color: #e1e2e3;
	font-size: 12px;
}
.STYLE6 {color: #000000; font-size: 12; }
.STYLE10 {color: #000000; font-size: 12px; }
.STYLE19 {
	color: #344b50;
	font-size: 12px;
}
.STYLE21 {
	font-size: 12px;
	color: #3b6375;
}
.STYLE22 {
	font-size: 12px;
	color: #295568;
}
button{

margin-top: 20px;
}
a:hover{
    color: green;
}
</style>
</head>
<?php
date_default_timezone_set("Etc/GMT-8");
?>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="images/tb.gif" width="14" height="14" /></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1"> �������йز���</span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">&nbsp;</span><span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
      <tr>
        <td width="23%" height="20" align="left" bgcolor="#FFFFFF" class="STYLE6"><div align="center"><span class="STYLE19">php�汾</span></div></td>
        <td width="77%" height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo "PHP".PHP_VERSION; ?></div></td>
        </tr>
      <tr>
        <td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><div align="center">MYSQL�汾��</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"></div></td>
        </tr>
      <tr>
        <td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><div align="center">����������</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $_SERVER['SERVER_NAME']; ?></div></td>
        </tr>
      <tr>
        <td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><div align="center">������IP��</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $_SERVER["HTTP_HOST"]; ?></div></td>
        </tr>
      <tr>
        <td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><div align="center">�������˿ڣ�</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $_SERVER["SERVER_PORT"]; ?></div></td>
        </tr>
      <tr>
        <td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><div align="center">������ʱ�䣺</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $showtime=date("y-m-d h:i:s");?></div></td>
        </tr>
      <tr>
        <td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><div align="center">����������ϵͳ��</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo PHP_OS; ?></div></td>
        </tr>
      <tr>
        <td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><div align="center">վ������·����</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $_SERVER["DOCUMENT_ROOT"]; ?></div></td>
        </tr>
      <tr>
        <td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">ϵͳ����Ա</div></td>
      </tr>
      <tr>
        <td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><div align="center">����Ա���</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $_SESSION['admin']?></div></td>
      </tr>
      <tr>
        <td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><div align="center">����Ա�˻�</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo @$_SESSION['user']?></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<div id="search">
<form action="" method="post">
<input type="text" placeholder="������������" name="submitss">
<input type="submit" name="submits" value="�ύ">
</form>
</div>
<table border="1" width="700px">
<tr><br>
    <th bgcolor="#353c44"><span class="STYLE1">ͼ����Ϣ����</span></th>
  </tr>
  <tr>
  <td height="20" align="left" bgcolor="#353c44" class="STYLE19"><span class="STYLE1">id</span></td>
  <td height="20" align="left" bgcolor="#353c44" class="STYLE19"><span class="STYLE1">name</span></td>
  <td height="20" align="left" bgcolor="#353c44" class="STYLE19"><span class="STYLE1">price</span></td>
  <td height="20" align="left" bgcolor="#353c44" class="STYLE19"><span class="STYLE1">updatetime</span></td>
  <td height="20" align="left" bgcolor="#353c44" class="STYLE19"><span class="STYLE1">type</span></td>
  <td height="20" align="left" bgcolor="#353c44" class="STYLE19"><span class="STYLE1">total</span></td>
  <td height="20" align="left" bgcolor="#353c44" class="STYLE19"><span class="STYLE1">����</span></td>
</tr>
<?php
$sousuo=@$_POST['submitss'];
$posts=@$_GET['submit2'];
//ʹ��a��ǩ������ת����ҳ��ʱ�����ڴ�ʱ��post����Ϊnull�������ڵ����һҳʱ����ֻص���ʼδ������ʱ������
  if($sousuo){
    $sqls="select * from yx_books where name like'$sousuo%'";
  }else
  if($posts){
    $sousuo=$posts;
    $sqls="select * from yx_books where name like'$posts%'";
  }
  else{
    $sqls="select * from yx_books";
  }
$ress=$conn->query($sqls);
$pagesize=10;
$recordcount=mysqli_num_rows($ress);
$pagecount=($recordcount-1)/$pagesize+1;
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
  if($sousuo){//ʹ��like����ѯʱ��%��ʾ0�������ַ���_��ʾ�����ַ�
    $sql13="select * from yx_books where name like'$sousuo%' order by id asc limit $startno,$pagesize";//��������������������ֻ����ĳһ����ʹ�����������ֻ�ܼ������뵱ǰ�ֶ�������ͬ�ļ�¼.���������һ���������õ�����У���˿��Լ�����ͬ������ͬ�ֶεĶ������ݡ�Ψһ�����������е�ֵΨһ�������п�ֵ�������Ψһ���������������������ֵ����ϱ���Ψһ�����������������Ψһ�������������ֵ��ȫ��������������
    //�����������������ʱ��mysqlֻ��ʹ������Ϊ����Ч�ʵ���һ������������
  }else
  if($posts){
    $sql13="select * from yx_books where name like'$posts%' order by id asc limit $startno,$pagesize";
  }else{
    $sql13="select * from yx_books order by id asc limit $startno,$pagesize";
  }
$res=$conn->query($sql13);

while($result=@mysqli_fetch_assoc($res))
{
?>
<tr><td  height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><?php echo$result['id']?></td>
<td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><?php echo$result['name']?></td>
<td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><?php echo$result['price']?></td>
<td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><?php echo$result['uploadtime']?></td>
<td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><?php echo$result['type']?></td>
<td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19"><?php echo$result['total']?></td>
<td height="20" align="left" bgcolor="#FFFFFF" class="STYLE19">
  <?php 
$sql11="select * from yx_books where id=$result[id]";
$res11=$conn->query($sql11);
$result11=mysqli_fetch_assoc($res11);
if(!$result11['total']){
    echo "<span>ɾ��ͼ��</span><a href=increase.php?book_id=$result[id]><span>/</span><span>����ͼ��</span></a>";
}
if($result11['total']){
    echo "<a href=decrease.php?book_id=$result[id]><span>ɾ��ͼ��</span></a><a href=increase.php?book_id=$result[id]><span>/</span><span>����ͼ��</span></a>"; 
}
?></td>
</tr>

<?php
} 
?>
</table>
<table border="1" width="700px">
  <tr>
  <td height="35" align="center" bgcolor="#FFFFFF">
  <?php
	if(@$pageno==1)
	{
	?>
    <a href="adminshouye1.php?&pageno=1">����ͼ��</a> | ��һҳ | <a href="adminshouye1.php?@&pageno=<?php echo $pageno+1?>&submit2=<?php echo $sousuo;?>">��һҳ</a> | <a href="adminshouye1.php?&pageno=<?php echo $pagecount?>&submit2=<?php echo $sousuo;?>">ĩҳ</a>
    <?php
	}
	else if(@$pageno==@$pagecount)
	{
	?>
    <a href="adminshouye1.php?@&pageno=1">����ͼ��</a> | <a href="adminshouye1.php?&pageno=<?php echo @$pageno-1?>&submit2=<?php echo $sousuo;?>">��һҳ</a> | ��һҳ | ĩҳ
    <?php
	}
	else
	{
	?>
    <a href="adminshouye1.php?&pageno=1">����ͼ��</a> | <a href="adminshouye1.php?&pageno=<?php echo $pageno-1?>&submit2=<?php echo $sousuo;?>">��һҳ</a> | <a href="adminshouye1.php?&pageno=<?php echo $pageno+1?>&submit2=<?php echo $sousuo;?>" class="forumRowHighlight">��һҳ</a> | <a href="adminshouye1.php?pageno=<?php echo $pagecount?>&submit2=<?php echo $sousuo;?>">ĩҳ</a>
    <?php
	}
?>
    &nbsp;ҳ�Σ�<?php echo @$pageno ?>/<?php echo @$pagecount ?>ҳ&nbsp;����<?php echo @$recordcount?>����Ϣ</td>
  </tr>
</table>
<button><a href="adminindex.php?tj==adminout">�˳���ǰ����Ա�˻�</a></button>
</body>
</html>