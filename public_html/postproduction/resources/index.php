<?php session_start(); ?>
<?php require("botdetect.php"); ?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <TITLE>What Motivates Learning - Resources</TITLE>
    <META NAME="KEYWORDS" CONTENT="what, motivates, learning, motivate, learn, stances, parent, teacher, learner, school, energy, assembly, except, ELI, stanceGlance, styleFile, PSI, TSI, zero, matrix, needs, styles, teaching, learning, parenting">
    <META NAME="DESCRIPTION" CONTENT="Your answer to one of the most fundamental questions concerning you,  education and society, what motivates learning?">
    <META NAME="ROBOTS" CONTENT="INDEX,FOLLOW">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="../css/psdmediaMenu.css"/>
    <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
    <script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>
    <script src="../js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="../js/animated-menu.js" type="text/javascript"></script>
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


<div id="copyHeader4">
<h1>Resources</h1>
<div id="copyimage8">
    <div id="copyText7">

    <img border="0" src="../images/head3.jpg" />
    <p>whatMotivatesLearning+</p>
    </div>
</div>
<div id="cat">
    The commercial side of whatMotivatesLearning. This area
    of our service at the moment contains assembly and except applications not available
    in the public access area. If you are interested in learning more about what
    whatMotivatesLearning+ can offer your school, college or service then please 
    contact us via the form below:
</div>

<form method="post" action="process_form.php" id="form1">
    <fieldset>

      <div class="input">
        <label for="Name">Name:</label>
        <input type="text" name="Name" id="Name" class="textbox" value="<?php echo getValue('Name');?>" />
        <?php echo getValidationStatus('Name'); ?>
      </div>

      <div class="input">
        <label for="Email">Email:</label>
        <input type="text" name="Email" id="Email" class="textbox" value="<?php echo getValue('Email');?>" />
        <?php echo getValidationStatus('Email'); ?>
      </div>

      <div class="input">
        <label for="Message">Short message:</label>
        <textarea class="inputbox" id="Message" name="Message" rows="5" cols="40"><?php echo getValue('Message');?></textarea>
        <?php echo getValidationStatus('Message'); ?>
      </div>


      <div class="input">
        <?php // Adding BotDetect Captcha to the page
          $FormCaptcha = new Captcha("FormCaptcha");
          $FormCaptcha->UserInputID = "CaptchaCode";
          $FormCaptcha->CodeLength = 3;
          $FormCaptcha->ImageWidth = 150;
          $FormCaptcha->ImageStyle = ImageStyle::Graffiti2;

          // only show the Captcha if it hasn't been already solved for the current message
          if(!$FormCaptcha->IsSolved) { ?>
            <label for="CaptchaCode">Retype the characters from the picture:</label>
            <?php echo $FormCaptcha->Html(); ?>
            <input type="text" name="CaptchaCode" id="CaptchaCode" class="textbox" />
            <?php echo getValidationStatus('CaptchaCode');
          } ?>
      </div>

      <input type="submit" name="SubmitButton" id="SubmitButton" value="Submit"  />

    </fieldset>

    <?php 
      // remember user input if validation fails
      function getValue($fieldName) {
        $value = '';
        if (isset($_REQUEST[$fieldName])) { 
          $value = $_REQUEST[$fieldName];
        }
        return $value;
      }
      
      // server-side validation status helper function
      function getValidationStatus($fieldName) {
        // validation status param, e.g. "NameValid" from "Name"
        $requestParam = $fieldName . 'Valid';
        if ((isset($_REQUEST[$requestParam]) && $_REQUEST[$requestParam] == 0)) {
          // server-side field validation failed, show error indicator
          $messageHtml = "<label class='incorrect' for='{$fieldName}'>*</label>";
        } else {
          // server-side field validation passed, no message shown
          $messageHtml = '';
        }
        return $messageHtml;
      }
    ?>
    
  </form>

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
  ?>  
    
    <div id="copyimage8">
        <img border="0" src="../images/divider.jpg" />
    </div>
    
<div id="copyImage8">
<img border="0" src="../images/except.jpg" />     
</div>
<div id="copyText8">
<h2>Except</h2>
<p>The <i>except</i> application produces a report that is intended to help find and explore exceptions.</p>
<p>Exceptions are times when we briefly perceive change toward or away from a desired outcome. Exploring the circumstances around exceptions can help you toward achieving your goals, and is a common learning task in solution oriented practice.</p>
<p>To do this <i>except</i> (given the symbol x.) compares two profiles of the same subject but from two different perspectives. We can then use <i>except</i> to find the constant items and any differences between the two. An example PSIx. would be...</p>
<div id="copyText7">
<p>
PSI of “my parenting when I’m happy”<br>
x.<br>
PSI of “my parenting when I’m sad”
</p>
</div>
<p>The PSIx. is available for free in whatMotivatesLearning through the link below. There are also ELIx. and TSIx. versions available through <b>whatMotivatesLearning+</b></p>
</div>

<div id="copyImage8">
<a href="http://www.whatMotivatesLearning.com/except"><img border="0" src="../images/PSIx.jpg" /></a>
</div>
<div id="copyimage8">
        <img border="0" src="../images/divider.jpg" />
    </div>



<div id="copyImage8">
<img border="0" src="../images/assembly.jpg" />     
</div>
<div id="copyText8">
<h2>Assembly</h2>
<p>The <i>assembly</i> application produces a composite profile. The composite is formed by combining many individual views on one subject.</p>
<p>This powerful application provides the ability to form and share a groups perception of an individual. It can deliver clarity in a variety of professional development roles and can be useful in the personal development of learners and parents.</p>

<div id="copyimage8">
        <img border="0" src="../images/divider.jpg" />
    </div>





<div id="copyText">
<h2>The Motivated School</h2>
 The Motivated School is an important book. It addresses a number of key issues which are central to Scottish educational policy, including Better Behaviour: Better Learning, Inclusion and Raising Attainment. It is also a controversial book, challenging as it does "woolly thinking" on issues such as self-esteem, rewards and motivation to learn' - Scottish Education Review
</div>
<div id="copyImage">
<a href="http://www.amazon.co.uk/Motivated-School-Alan-McLean/dp/0761943846"><img border="0" src="../images/theMotivatedSchool.jpg" /></a>
</div>
<div id="copyimage8">
        <img border="0" src="../images/divider.jpg" />
    </div>
<div id="copyText3">
<h2>Motivating Every Learner</h2>
This fascinating book explores the interactions between teachers and pupils, presenting new ways of engaging young people in learning. Alan McLean's very practical approach shows teachers how to understand children's learning stances - the modes of behaviour that children bring with them to the classroom. Linking this to specific teaching methods, he shows how teachers can shape their teaching to help children learn more effectively.  
</div>
<div id="copyImage4">
<a href="http://www.amazon.co.uk/Motivating-Every-Learner-Alan-McLean/dp/1848601824"><img border="0" src="../images/motivatingEveryLearner.jpg" /></a>
</div>
</div>
</div>
</body>
</html>    
