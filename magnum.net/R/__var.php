<?
error_reporting('E_ALL & ~E_NOTICE');
$t=$_GET['t'];

$color[1] =1;
$color[2] =0;
$color[3] =1;
$color[4] =0;
$color[5] =1;
$color[6] =0;
$color[7] =1;
$color[8] =0;
$color[9] =1;
$color[10]=0;
$color[11]=0;
$color[12]=1;
$color[13]=0;
$color[14]=1;
$color[15]=0;
$color[16]=1;
$color[17]=0;
$color[18]=1;
$color[19]=1;
$color[20]=0;
$color[21]=1;
$color[22]=0;
$color[23]=1;
$color[24]=0;
$color[25]=1;
$color[26]=0;
$color[27]=1;
$color[28]=0;
$color[29]=0;
$color[30]=1;
$color[31]=0;
$color[32]=1;
$color[33]=0;
$color[34]=1;
$color[35]=0;
$color[36]=1;

$tower1=[1,4,7,10,13,16,19,22,25,28,31,34];
$tower2=[2,5,8,11,14,17,20,23,26,29,32,35];
$tower3=[3,6,9,12,15,18,21,24,27,30,33,36];

$black=0;
$red=0;

$even=0;
$odd=0;

$f_18=0;
$s_36=0;

$fst12=0;
$sec12=0;
$trd12=0;

$fst1TWR=0;
$sec1TWR=0;
$trd1TWR=0;

if($t==0){
	
	$black=0;
	$red=0;
	
	$even=0;
	$odd=0;
	
	$f_18=0;
	$s_36=0;
	
	$fst12=0;
	$sec12=0;
	$trd12=0;
	
	$fst1TWR=0;
	$sec1TWR=0;
	$trd1TWR=0;

}else{
	
	if($t>0&&$t<13){
		
		$fst12=0;
		$sec12++;
		$trd12++;
	}
	
	if($t>12&&$t<25){
		
		$fst12++;
		$sec12=0;
		$trd12++;
	}
	
	if($t>24){
		
		$fst12++;
		$sec12++;
		$trd12=0;
		
	}
	
	
	
	if($color[$t]>0){
		$red=0;
		$black++;
	}else{
		$red++;
		$black=0;
	}
	
	
	if($t>18){
		$f_18++;
		$s_36=0;
	}else{
		$f_18=0;
		$s_36++;
	}
	
}



?>