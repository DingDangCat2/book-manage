<table width="1200px" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" >
  <tr>
    <td bgcolor="#FFFFFF"><img src="./static/2915.jpg_wh1200.jpg" width="1200" height="150" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="800" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" background="images/button1_bg.jpg"><a href="shouye1.php?Type=<?php echo urlencode('wangye');?>" title="��ҳ����">��ҵ����</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="shouye1.php?Type=<?php echo urlencode('wangluo');?>" title="����Ӫ��">����Ӫ��</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="shouye1.php?Type=<?php echo urlencode('ASP');?>" title="ASP">ASP���</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="shouye1.php?Type=<?php echo urlencode('php');?>" title="php���">php���</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="shouye1.php?Type=<?php echo urlencode('ruanjian');?>" title="�������">�������</a></td>

        <td align="center" background="images/button1_bg.jpg"><?php 
		if ($_SESSION["id"]){
      echo "<a href='index.php?tj=out'  title='�˳�'>�˳��˻�</a>";
		}
        ?>
        </td>
        <td align="center" background="images/button1_bg.jpg"><a href="people.php" title="��������">��������</a></td></td>
      </tr>
    </table></td>
  </tr>
</table>