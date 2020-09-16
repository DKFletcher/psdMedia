<?php
session_start();
if( !isset($_SESSION['log']) || ($_SESSION['log'] != 'in') ){
	header('Location: http://www.whatmotivateslearning.com/errorPages/401.html');
	exit();
}
if(isset($_POST['go'])){
	session_destroy();
        header('Location: http://www.whatmotivateslearning.com/login');
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>whatMotivatesLearning+</title>
    <link rel="stylesheet" href="../../css/psdmediaMenu.css"/>
    <script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>
    <script src="../../js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="../../js/animated-menu.js" type="text/javascript"></script>
</head>
<body>
<div id="bodyUp">
<a id="topright" href="../"><img border="0" src="../../images/PSDBiger.jpg" /></a>
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
            <p class="subtext"><a href="../parentsStyleFile">Parents styleFile</a></p>
        </li>
        
        <li class="menu24">
            <p><a href="../resources">Resources</a></p>
            <p class="subtext"><a href="">logout</a></p>
            <p class="subtext"><a href="../community">community</a></p>
        </li>
        <li class="menu33">
            <p><a href="../">Plus</a></p>
            <p class="subtext"><a href="../except">except</a></p>
            <p class="subtext"><a href="../assembly">assembly</a></p>
        </li>
    </ul>
    
 <div id="copyHeader">
 <div id="copyImage3">   
 <img border="0" src="../../images/head3.png" />
 </div>
 </div>
<div id="copyHeader3">whatMotivatesLearning+
<form method="post" action="">
    <p><button type="submit" name="go">logout</button></p>
</form>   
</div>
</div>
</body>
</html>    