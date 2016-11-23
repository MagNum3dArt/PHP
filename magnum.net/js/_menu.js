var bInit = 0;

for (i=0 ; i<image_menu.length ; i++) {
	eval ('var ' + image_menu[i] + '_On = new Image ();');
	eval ('var ' + image_menu[i] + '_Off = new Image ();');
}

function onInit ()
{
	for (i=0 ; i<image_menu.length ; i++) {
		eval (image_menu[i] + '_Off.src = "'+ image_folder + image_menu[i] + '_Off.gif";');
		eval (image_menu[i] + '_On.src = "'+ image_folder + image_menu[i] + '_On.gif";');
	}

	bInit = 1;
}

function _on (img_id)
{
	if ((bInit) && (document.images))
	{
		document[img_id].src = eval (img_id + '_On.src;');
	}
}

function _off (img_id)
{
	if ((bInit) && (document.images))
	{
		document[img_id].src = eval (img_id + '_Off.src;');
	}
}

function MM_findObj(n, d) { //v3.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document); return x;
}

function MM_setTextOfLayer(objName,x,newText) { //v3.0
  if ((obj=MM_findObj(objName))!=null) with (obj)
    if (navigator.appName=='Netscape') {document.write(unescape(newText)); document.close();}
    else innerHTML = unescape(newText);
}
