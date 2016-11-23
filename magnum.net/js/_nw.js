function rnd_win(){
   var randscript = -1;
   var howMany =10000;
   while (randscript <= 0 || randscript > howMany || isNaN(randscript)){
      randscript = parseInt(Math.random()*(howMany+1));
   }
   return randscript;
}


function screen_view (url, wSize)
{
 var  v_screens =  rnd_win(); 
 var   height = 515;
 var   width = 640;
 if (wSize == 1){ height = 502;width = 658;}
 window.open(url,v_screens,"toolbar=no,width="+width+",height="+height+",directories=no,status=no,scrollbars=no,resize=no,resizeable=no,menubar=no,screenX=0,screenY=0");
}
