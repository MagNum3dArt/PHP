<?
error_reporting('E_ALL & ~E_NOTICE');
$t=$_GET['t'];
$page=$_GET['page'];
$s=$_GET['s'];
$file=$_GET['file'];
$fSize=$_GET['fSize'];
if(!$fSize){$fSize = 0;}
if(!$page){$page = 1;} 
if(!$t){ $t="about";}
#if($t=="animation"&&!$page){ $page=1;}
$index="indexEng.php";

$body_left_indent=20;
$body_dev=10;
$body_right_indent=20;
$background ="#000000";
$text ="#ffffff";
$text1 ="#cccccc";

$titles[1]="About Myself";
$titles[2]="CV";
$titles[3]="Projects";
$titles[4]="3D Animation";
$titles[5]="Unity3D";
//$titles[6]="Rigging";

#$titles[6]="Modeling";
#$titles[7]="Texturing";

$theme[1]="about";
$theme[2]="cv";
$theme[3]="projects";
$theme[4]="animation";
$theme[5]="unity3d";
//$theme[6]="rigging";
#$theme[6]="modeling";
#$theme[7]="texturing";
#####################################
//$sub[3][1]="3D";
//$sub[3][2]="2D";
//$sub[3][3]="PHP";
//$subTitle[3][1]="3D";
//$subTitle[3][2]="2D";
//$subTitle[3][3]="PHP";

#####################################
$sub[4][1]="scripts";
$sub[4][2]="handmade";
$sub[4][3]="motioncapture";
$subTitle[4][1]="Scripts/Improvements";
$subTitle[4][2]="Handmade";
$subTitle[4][3]="Motion Capture";
/*
$sub[3][1]="officers";
$sub[3][2]="glukoza";

$subTitle[3][1]="Officers";
$subTitle[3][2]="Glukoza";

$subTitle[4][3]="Creatures";

$subTitle[4][5]="Characters";
$sub[4][3]="creatures";
$sub[4][4]="mocap";
*/
#$sub[4][5]="characters";
########################################## 
for($i=1; $i<=count($theme);$i++){
		if($t==$theme[$i]){

				$tmp=$i;
				break;
		}
}
if(!$s){$s='';}
if($s){
		for($i=1; $i<=count($sub[$tmp]);$i++){
			if($s==$sub[$tmp][$i]){
				$s_tmp=$i;
				break;
			}
		}
}
for($i=1; $i<=count($theme);$i++){
		$lin[$i]=$index."?t=$theme[$i]";
}


?>