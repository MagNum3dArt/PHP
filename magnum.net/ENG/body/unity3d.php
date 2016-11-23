		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
		<script type="text/javascript">
		<!--
		var unityObjectUrl = "http://webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/UnityObject2.js";
		if (document.location.protocol == 'https:')
			unityObjectUrl = unityObjectUrl.replace("http://", "https://ssl-");
		document.write('<script type="text\/javascript" src="' + unityObjectUrl + '"><\/script>');
		-->
		</script>
		<script type="text/javascript">
		<!--
			var config = {
				width: 640, 
				height: 480,
				params: { enableDebugging:"0" }
				
			};
			var u = new UnityObject2(config);
			
			jQuery(function() {

				var $missingScreen = jQuery("#unityPlayer").find(".missing");
				var $brokenScreen = jQuery("#unityPlayer").find(".broken");
				$missingScreen.hide();
				$brokenScreen.hide();

				u.observeProgress(function (progress) {
					switch(progress.pluginStatus) {
						case "broken":
							$brokenScreen.find("a").click(function (e) {
								e.stopPropagation();
								e.preventDefault();
								u.installPlugin();
								return false;
							});
							$brokenScreen.show();
						break;
						case "missing":
							$missingScreen.find("a").click(function (e) {
								e.stopPropagation();
								e.preventDefault();
								u.installPlugin();
								return false;
							});
							$missingScreen.show();
						break;
						case "installed":
							$missingScreen.remove();
						break;
						case "first":
						break;
					}
				});
				u.initPlugin(jQuery("#unityPlayer")[0], "test.unity3d");
			});
		-->
		</script>
		<style type="text/css">
		<!--
		body {
			font-family: Helvetica, Verdana, Arial, sans-serif;
			background-color: black;
			color: white;
			text-align: center;
		}
		a:link, a:visited {
			color: #bfbfbf;
		}
		a:active, a:hover {
			color: #bfbfbf;
		}
		p.header {
			font-size: small;
		}
		p.header span {
			font-weight: bold;
		}
		p.footer {
			font-size: x-small;
		}
		div.content {
			margin: auto;
			width: 640px;
		}
		div.broken,
		div.missing {
			margin: auto;
			position: relative;
			top: 50%;
			width: 193px;
		}
		div.broken a,
		div.missing a {
			height: 63px;
			position: relative;
			top: -31px;
		}
		div.broken img,
		div.missing img {
			border-width: 0px;
		}
		div.broken {
			display: none;
		}
		div#unityPlayer {
			cursor: default;
			height: 480px;
			width: 640px;
		}
		-->
		</style>
<table cellspacing="0" cellpadding="0" width="100%" height="100%">
<tr><td width="<?=$body_left_indent?>"><img src="../img/0.gif" alt="" width="<?=$body_left_indent?>" height="20" border="0"></td><td align="left" valign="top"><div id = "h1" class=h1><?=$titles[$tmp]?>: <?=$subTitle[$tmp][$s_tmp]?>
<br>
<img src="../img/0.gif" alt="" width="30" height="20" border="0"></div><div id = "body" class=style1> Multiplayer example <br><br>
<strong>Single player:</strong><br>
Just press <strong><em>"Start Server"</em></strong><br><br>

<strong>Multiplayer:</strong><br>
In the first browser window press <strong><em>"Start Server"</em></strong>. In the right corner you will see <strong>IP</strong> of your server.
To unlock mouse, press <em>"P"</em>. Then open this page in another browser window. In the field near the button <strong><em>"Connect"</em></strong> insert the <strong>IP</strong> of your server, then press <strong><em>"Connect"</em></strong>
<br><img src="../img/0.gif" alt="" width="10" height="20" border="0"><br>
</div>
		<div class="content">
			<div id="unityPlayer">
				<div class="missing">
					<a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
						<img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
					</a>
				</div>
			</div>
		</div>
		<p class="footer" align="center">&laquo; created with <a href="http://unity3d.com/unity/" title="Go to unity3d.com">Unity</a> &raquo;</p>
        <div id = "body" class=style1><strong>Controls:</strong></div>
<table width="100" border="0" cellspacing="0" cellpadding="0" align="left">

<tr>
<td><img src="../img/0.gif" alt="" width="200" height="1" border="0"><br>
<p class="footer"><strong>W,A,S,D</strong> - movement</p>
</td>

<td><img src="../img/0.gif" alt="" width="200" height="1" border="0"><br>
<p class="footer"><strong>(A or D)+Shift</strong>  - dodge</p> 
</td>
<td><img src="../img/0.gif" alt="" width="200" height="1" border="0"><br>
<p class="footer"><strong>LMB</strong> - left weapon</p></td></tr>

<tr>
<td><img src="../img/0.gif" alt="" width="200" height="5" border="0"></td>
<td></td>
<td></td></tr>

<tr>
<td>
<p class="footer"><strong>W+Shift</strong> - acceleration</p>
</td>
<td>
<p class="footer"><strong>W+Space (hold)</strong> - jump</p> 
</td>
<td>
<p class="footer"><strong>RMB</strong> - right weapon</p></td></tr>
</table><br><br>
<br>
<iframe width="640" height="480" src="//www.youtube.com/embed/rjngse-crlk" frameborder="0" allowfullscreen></iframe>
</td><td><img src="../img/0.gif" alt="" width="<?=$body_right_indent?>" height="20" border="0"></td></tr></table>
