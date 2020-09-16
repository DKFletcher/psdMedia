<?php
$to = "donald.fletcher@btinternet.com";
$subject = "TELI";
$message = $_POST["eli"];
$from = "postmaster@psdmedia.co.uk";
$headers = "From:" . $from;


if ($_POST["chkSum"]=="0"){
   ini_set("sendmail_from", "postmaster@psdmedia.co.uk");
   mail($to,$subject,$message,$headers,"-fpostmaster@psdmedia.co.uk");
   echo "TELI completed, thank you.";
   echo "<meta http-equiv='Refresh' Content='0'; url='".$_SERVER['PHP_SELF']."'>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Sat, 03 Mar 2012 14:09:20 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
    
    <style type="text/css">
    <!--
    body {
      color:#000000;
      background-color:#F2F6B2;
    }
    a  { color:#0000FF; }
    a:visited { color:#800080; }
    a:hover { color:#008000; }
    a:active { color:#FF0000; }
    -->
    </style>
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
<a href="http://www.psdMedia.co.uk"><img src="Images/completed.jpg" width="352" height="67" alt="TELI completed, thank you" title="TC" border="0" align="middle" /></a>
  </body>
</html>