<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <title>BotDetect CAPTCHA PHP Form Sample</title>
  <link type="text/css" rel="stylesheet" href="../css/psdmediaMenu.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<div id="bodyUp">
<a id="topright" href="../"><img border="0" src="../images/PSDBig.jpg" /></a>
<ul id="tabs1">
    <li class="menu21">
        <p><a href="../learners">Learners</a></p>
        <p class="subtext"><a href="../ELI">ELI</a></p>
        <p class="subtext"><a href="../stanceGlance">stanceGlance</a></p>
    </li>
    <li class="menu22">
        <p><a href="../teachers">Teachers</a></p>
        <p class="subtext"><a href="../TSI">TSI</a></p>
        <p class="subtext"><a href="../styleFile">styleFile</a></p>
    </li>
    <li class="menu23">
        <p><a href="../parents">Parents</a></p>
        <p class="subtext"><a href="../PSI">PSI</a></p>
        <p class="subtext"><a href="../parentsStyleFile">Parent styleFile</a></p>
    </li>
    <li class="menu24">
        <p><a href="">Resources</a></p>
        <p class="subtext"><a href="../login">login</a></p>
        <p class="subtext"><a href="../community">community</a></p>
    </li>
</ul>
<div id="instruct">
    <div id="instruct1">
        <div id="instruct3">whatMotivatesLearning have got your message and will get back to as quickly as possible.</div></div>
    <div id="instruct2">
        <?php
    $count = 0;
    foreach($_SESSION as $key => $val) {
      if (false !== strpos($key, "Message_") && isset($val)) {
        echo "<p class='message'>${val}</p>";
        $count++;
      }
    }
    
    if ($count == 0) {
      echo '<p class="message">No messages yet.</p>';
    }
    session_stop();
  ?>
</div>
</div>
</div>
</body>
</html>

