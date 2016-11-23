<script language="JavaScript">
<!--
function rnd_win(){
   var randscript = -1;
   var howMany =10000;
   while (randscript <= 0 || randscript > howMany || isNaN(randscript)){
      randscript = parseInt(Math.random()*(howMany+1));
   }
   return randscript;
}


function screen_view (url)
{
var  v_screens=  rnd_win(); window.open(url,v_screens,"toolbar=no,width=804,height=654,directories=no,status=no,scrollbars=no,resize=no,resizeable=no,menubar=no,screenX=0,screenY=0");
}

function screen_view_big (url)
{
 var  v_screens=  rnd_win(); 
 var   height=768+54; window.open(url,v_screens,"toolbar=no,width=1028,height="+height+",directories=no,status=no,scrollbars=no,resize=no,resizeable=no,menubar=no,screenX=0,screenY=0");
}


function wallpaper_view (url, res)
{
	if (res) { var x_res = res;	} else { var x_res = 800; }
	 var  v_screens=  rnd_win(); 
	var y_res = x_res*0.75;
    window.open(url,v_screens,"toolbar=no,width=" + (x_res + 4) + ",height=" + (y_res + 54) + ",directories=no,status=no,scrollbars=no,resize=no,resizeable=no,menubar=no,screenX=0,screenY=0");
}
-->
</script>