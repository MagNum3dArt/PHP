<table cellspacing="0" cellpadding="0" width="100%" height="10"><tr><td align="right"><P class=style3 ><img src="../img/0.gif" alt="" width="20" height="20" border="0"><br><?
for ($i=1; $i<=count($sub[$tmp]);$i++){
if ($i!=$s_tmp){?><a href="<?=$lin[$tmp]?>&s=<?=$sub[$tmp][$i]?>"><?}?><?=$subTitle[$tmp][$i]?><?if ($i!=$s_tmp){?></a><?}?><?if($i<count($sub[$tmp])){?>&nbsp;::&nbsp;<?}?><?}?>&nbsp;&nbsp;</p></td></tr></table>
<table cellspacing="0" cellpadding="0" width="100%" height="100%">
<tr><td width="<?=$body_left_indent?>"><img src="../img/0.gif" alt="" width="<?=$body_left_indent?>" height="20" border="0"></td><td align="left" valign="top"><div id = "h1" class=h1><?=$titles[$tmp]?>: <?=$subTitle[$tmp][$s_tmp]?>
<br>
<img src="../img/0.gif" alt="" width="30" height="20" border="0"></div>

<? 

if($s!=''){
	include './body/'.$t.'/'.$s.'.php';
	}
else{
	?>
	<iframe width="640" height="480" src="https://www.youtube.com/embed/gQYmAX1gkfI" frameborder="0" allowfullscreen></iframe>
<br><img src="../img/0.gif" alt="" width="125" height="20" border="0"><br>
<a  class=style3 href="<?=$lin[$tmp]?>&s=<?=$sub[$tmp][1]?>">More Scripts/Improvements</a>
<br><img src="../img/0.gif" alt="" width="125" height="20" border="0"><br>

	<iframe width="640" height="480" src="https://www.youtube.com/embed/l6S0cIeN1_0" frameborder="0" allowfullscreen></iframe>
<br><img src="../img/0.gif" alt="" width="125" height="20" border="0"><br>
<a  class=style3 href="<?=$lin[$tmp]?>&s=<?=$sub[$tmp][2]?>">More Handmade animation</a>
<br><img src="../img/0.gif" alt="" width="125" height="20" border="0"><br>

	<iframe width="640" height="480" src="https://www.youtube.com/embed/8_HwkgY0D5A" frameborder="0" allowfullscreen></iframe>
<br><img src="../img/0.gif" alt="" width="125" height="20" border="0"><br>
<a  class=style3 href="<?=$lin[$tmp]?>&s=<?=$sub[$tmp][3]?>">More Motion Capture</a>
<br><img src="../img/0.gif" alt="" width="125" height="20" border="0"><br>

	<?
    }
?>

</td><td><img src="../img/0.gif" alt="" width="<?=$body_right_indent?>" height="20" border="0"></td></tr></table>
<table cellspacing="0" cellpadding="0" width="100%" height="10"><tr><td align="right"><P class=style3 ><img src="../img/0.gif" alt="" width="20" height="40" border="0"><br><?
for ($i=1; $i<=count($sub[$tmp]);$i++){
if ($i!=$s_tmp){?><a href="<?=$lin[$tmp]?>&s=<?=$sub[$tmp][$i]?>"><?}?><?=$subTitle[$tmp][$i]?><?if ($i!=$s_tmp){?></a><?}?><?if($i<count($sub[$tmp])){?>&nbsp;::&nbsp;<?}?><?}?>&nbsp;&nbsp;</p></td></tr></table>
