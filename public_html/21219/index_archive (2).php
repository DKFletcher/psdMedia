?<html>
<body>
<?php
$to = "donald.fletcher@btinternet.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "donald.fletcher@btinternet.com";
$headers = "From:" . $from;

ini_set("sendmail_from", "postmaster@psdmedia.co.uk");
mail($to,$subject,$message,$headers,"-fpostmaster@psdmedia.co.uk");
echo "Mail Sent.";
?>
</body>
</html>