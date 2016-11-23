<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?include "../__var.php";?>
<html>
<head>
<script language="JavaScript" src="../../js/swfobject.js"></script>
<script type="text/javascript">
function swfLoader(){
<?
if ($fSize==0){?>
var movieSWF = '../../video/flv2swf.swf';
var FLVcontentPath = '<?=$file?>.flv';
var swfWidth = 640;
var swfHeight = 515;
<?}else{?>
var movieSWF = '../../video/<?=$file?>.swf';
var FLVcontentPath = '';
var swfWidth = 658;
var swfHeight = 502;
<?}?>
var so = new SWFObject(movieSWF, "mySWFmovie", swfWidth, swfHeight, "7", "#000000");
if (FLVcontentPath!=''){ 
so.addVariable("FLVpath", FLVcontentPath);
}
so.write("flashcontent");
}
</script>


	<title>MagNum 3D. File: <?=$file?></title>
</head><body leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0" bgcolor="#000000" onload="swfLoader()">
<div id="flashcontent" align="center"><img src="../../img/0.gif" alt="" width="10" height="200" border="0"><br><a href="javascript:swfLoader()"><img src="../../img/play.gif" alt="PLAY" width="100" height="100" border="0"></a></div></body>
</html>
