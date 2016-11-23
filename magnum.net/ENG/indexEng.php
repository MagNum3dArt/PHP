<?
include "__var.php";
//include "_conect.php";?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Language" content="en-us">
	<meta http-equiv="KEYWORDS" content="MagNum 3D Animator Artist MagNum3D">
	<meta http-equiv="DESCRIPTION" content="MagNum 3D Animator Artist MagNum3D">
	<title>MagNum 3D - <?=$titles[$tmp]?><?if($s){?>: <?=$subTitle[$tmp][$s_tmp]?><?}?></title>
</head>
<!--  -->
<body bgcolor="<?=$background?>" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" text="<?=$text?>"  style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px;" link="<?=$text?>">
<STYLE type=text/css>
.style1 {
	FONT-SIZE: 12px; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif
}
.style3 {
	FONT-WEIGHT: bold; FONT-SIZE: 10px; COLOR: <?=$text?>; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif
}
.style10 {
	COLOR: <?=$background?>
}
.style14 {
	COLOR: <?=$text?>
}
.h1 {
	FONT-WEIGHT: bold; FONT-SIZE: 12px; COLOR: <?=$text?>; 
	FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
	text-transform: uppercase;
}
.h2 {
	FONT-WEIGHT: bold; FONT-SIZE: 11px; COLOR: <?=$text1?>; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif
}
.h3 {
	FONT-SIZE: 9px; COLOR: <?=$text1?>; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif
}
A {
	color : <?=$text?>;
	font-weight : bold;
	
}
A:ACTIVE {
	color : <?=$text?>;
}

A:VISITED {
	color : <?=$text1?>;
}

A:HOVER {
	color : <?=$text?>;
	text-decoration : none;
}
.menu {
	FONT-SIZE: 12px; COLOR: <?=$text1?>; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
	font-weight : bold;
	text-decoration : none;
	text-transform: uppercase;
}
.submenu {
	FONT-SIZE: 12px; COLOR: <?=$text1?>; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
	text-decoration : none;
	font-weight : normal;
}
</STYLE>
<p align="center">
<table cellspacing="0" cellpadding="0" align="center">
<tr>
<td align="right" width="210" valign="top"><img src="../img/0.gif" alt="" width="10" height="20" border="0"><br>
<img src="../img/magnum.gif" alt="MagNum" width="115" height="32" border="0"></td>
<td bgcolor="<?=$text?>" width="1"><img src="../img/0.gif" alt="" width="1" height="80" border="0"></td>
<td align="left" width="650"><img src="../img/0.gif" alt="" width="10" height="1" border="0"><br>
<img src="../img/3d.gif" alt="3D" width="34" height="32" border="0"><br><img src="../img/0.gif" alt="" width="10" height="1" border="0"><br><img src="../img/contacts.gif" alt="Contacts" width="171" height="50" border="0" align="right"></td>
</tr>
</table>
<table cellspacing="0" cellpadding="0" width="860" align="center"><tr><td bgcolor="<?=$text?>"><img src="../img/0.gif" alt="" width="10" height="1" border="0"></td></tr></table>
<table cellspacing="0" cellpadding="0" align="center">
<tr>
<td align="left" width="240" valign="top"><img src="../img/0.gif" alt="" width="10" height="50" border="0"><br>

<?
for($i=1; $i<=count($theme);$i++){
	if(!$sub[$i][1]){
?>
<a href="<?=$lin[$i]?>" class = menu><img src="../img/0.gif" alt="" width="55" height="20" border="0">:: <?=$titles[$i]?></a><br>
<?
	}else{?>
<div id= "menu" class = menu><a href="<?=$lin[$i]?>" class = menu><img src="../img/0.gif" alt="" width="55" height="20" border="0">:: <?=$titles[$i]?></a><br><img src="../img/0.gif" alt="" width="55" height="5" border="0"></div>
	<?	for($j=1; $j<=count($sub[$i]);$j++){?>
<a href="<?=$lin[$i]?>&s=<?=$sub[$i][$j]?>" class = submenu><img src="../img/0.gif" alt="" width="90" height="15" border="0"><?=$subTitle[$i][$j]?></a><br>	
	<?	}

	
	}
}
?></td>
<td bgcolor="<?=$text?>" width="1"><img src="../img/0.gif" alt="" width="1" height="150" border="0"></td>
<td align="left" width="680" valign="top"><img src="../img/0.gif" alt="" width="10" height="20" border="0"><br>
<!-- Body --><?include './body/'.$t.'.php';?><!-- End Body --></td>
</tr>
</table></p>
</body>
</html>
<?// include "_close.php"; ?>