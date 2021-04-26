<table width="1200px" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" >
  <tr>
    <td bgcolor="#FFFFFF"><img src="./static/2915.jpg_wh1200.jpg" width="1200" height="150" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="800" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" background="images/button1_bg.jpg"><a href="shouye1.php?Type=<?php echo urlencode('wangye');?>" title="网页美工">网业美工</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="shouye1.php?Type=<?php echo urlencode('wangluo');?>" title="网络营销">网络营销</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="shouye1.php?Type=<?php echo urlencode('ASP');?>" title="ASP">ASP编程</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="shouye1.php?Type=<?php echo urlencode('php');?>" title="php编程">php编程</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="shouye1.php?Type=<?php echo urlencode('ruanjian');?>" title="软件工程">软件工程</a></td>

        <td align="center" background="images/button1_bg.jpg"><?php 
		if ($_SESSION["id"]){
      echo "<a href='index.php?tj=out'  title='退出'>退出账户</a>";
		}
        ?>
        </td>
        <td align="center" background="images/button1_bg.jpg"><a href="people.php" title="个人中心">个人中心</a></td></td>
      </tr>
    </table></td>
  </tr>
</table>