<?php
$file = "buttonStatus.txt";
$handle = fopen($file,'w+');
if (isset($_POST['on']))
{
$onstring = "Light ON";
fwrite($handle,$onstring);
fclose($handle);
// print "
// <html>
// <body>
// <title>DIY Hacking</title>
// <style type=text/css>
// h1{
	// padding-left: 300px;
// }
// h2{
	// position: absolute;
	// top: 100px;
	// left: 450px;
// }
// </style>
// <h1>DIY Hacking - Internet of Things Implementation</h2>
// <h2>The Device has been Turned ON </h2>
// </body>
// </html>
// ";
}
if(isset($_POST['off']))
{
$offstring = "Light OFF";
fwrite($handle, $offstring);
fclose($handle);
// print "
// <html>
// <body>
// <title>DIY Hacking</title>
// <style type=text/css>
// h1{
	// padding-left: 300px;
// }
// h2{
	// position: absolute;
	// top: 100px;
	// left: 450px;
// }
// </style>
// <h1>DIY Hacking - Internet of Things Implementation</h2>
// <h2>The Device has been Turned OFF </h2>
// </body>
// </html>
// ";
}
if(isset($_POST['on1']))
{
$onfanstring = "Fan ON";
fwrite($handle, $onfanstring);
fclose($handle);
}
if(isset($_POST['off1']))
{
$offfanstring = "Fan OFF";
fwrite($handle, $offfanstring);
fclose($handle);
}
if(isset($_POST['off12']))
{
$resetstring = "Reset";
fwrite($handle, $resetstring);
fclose($handle);
}
?>