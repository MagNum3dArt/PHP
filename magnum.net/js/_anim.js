
var img0 = new Image ();
for (i=0 ; i<pages_menu.length ; i++) {
	eval ('var ' + pages_menu[i] + '_On = new Image ();');
	eval ('var ' + pages_menu[i] + '_Off = new Image ();');
}

for (i=0 ; i<vshots_menu.length ; i++) {
	eval ('var ' + vshots_menu[i] + '_On = new Image ();');
	eval ('var ' + vshots_menu[i] + '_Off = new Image ();');
}


function onInitAnim ()
{
var bInit = 0;
	for (i=0 ; i<pages_menu.length ; i++) {
		eval (pages_menu[i] + '_Off.src = "'+ image_folder + pages_menu[i] + '_off.gif";');
		eval (pages_menu[i] + '_On.src = "'+ image_folder + pages_menu[i] + '_on.gif";');

	}
for (i=0 ; i<vshots_menu.length ; i++) {
		eval (vshots_menu[i] + '_Off.src = "'+ image_folder + vshots_menu[i] + '.jpg";');
		eval (vshots_menu[i] + '_On.src = "'+ image_folder + vshots_menu[i] + '_on.jpg";');
	}
	bInit = 1;
eval ('img0.src = "'+ image_folder +'0.gif";'); 
}

function w(img_id){

document[img_id].src = img0.src;
}

/*
function _onBlink (img_id)
{
	var time = new Date();
	var tm = time.getTime();
	var delay = 1000;
	if ((bInit) )
	{
		//var imgON = 1
		var j=0
		w(img_id);
		while(j<2){
	//	if (imgON==1){
				//document[img_id].src =  eval (img_id + '_On.src;');
				var timer = new Date();
				var tmr = timer.getTime();
	//		}
			
		//	if (imgON==0){
		//		document[img_id].src = eval (img_id + '_On.src;');
		//		var timer = new Date();
		//		timer = timer.getTime();				
		//	}
			if((tmr - tm)>delay){
				var time = new Date();
				tm = time.getTime();
				j=j+1;
				//if(imgON==1){imgON=0}else{imgON=1}
			}
		}document[img_id].src = eval (img_id + '_On.src;');
	}

}
*/