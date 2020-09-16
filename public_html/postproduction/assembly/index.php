<?php 
session_start();
if( !isset($_SESSION['log']) || ($_SESSION['log'] != 'in') ){
	header('Location: http://www.whatmotivateslearning.com/errorPages/401.html');
	exit();
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>whatMotivatesLearning - ELI</title>
    <link rel="stylesheet" href="../../css/psdmediaMenu.css"/>
    <script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>
    <script src="../../js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="../../js/animated-menu.js" type="text/javascript"></script>
    <script language="JavaScript">
	function thisMovie(movieName) {
	    if (navigator.appName.indexOf("Microsoft") !== -1) {
	        return document[movieName];
	    } else {
	        return document[movieName];
	    }
	}
	function sendToJavaScript(value) {
	    var r=confirm(value);
	    if (r===true)
	    {
	        thisMovie("main").sendToActionScript("dummy");
	    }
	}
	function actInstruct(value1, value2){
	    var rx1=document.getElementById("instruct1");
	    var rx2=document.getElementById("instruct2");
	    rx1.innerHTML=value1;
	    rx2.innerHTML=value2;
	}
	function jAlert(value){
	    window.alert(value);
	}
	</script>
       <script type="text/javascript">
    //<![CDATA[

    var tabLinks = new Array();
    var contentDivs = new Array();

    function init() {

      // Grab the tab links and content divs from the page
      var tabListItems = document.getElementById('tabs2').childNodes;
      for ( var i = 0; i < tabListItems.length; i++ ) {
        if ( tabListItems[i].nodeName == "LI" ) {
          var tabLink = getFirstChildWithTagName( tabListItems[i], 'A' );
          var id = getHash( tabLink.getAttribute('href') );
          tabLinks[id] = tabLink;
          contentDivs[id] = document.getElementById( id );
        }
      }

      // Assign onclick events to the tab links, and
      // highlight the first tab
      var i = 0;

      for ( var id in tabLinks ) {
        tabLinks[id].onclick = showTab;
        tabLinks[id].onfocus = function() { this.blur() };
        if ( i == 0 ) tabLinks[id].className = 'selected';
        i++;
      }

      // Hide all content divs except the first
      var i = 0;

      for ( var id in contentDivs ) {
        if ( i != 0 ) contentDivs[id].className = 'tabContent hide';
        i++;
      }
    }

    function showTab() {
      var selectedId = getHash( this.getAttribute('href') );

      // Highlight the selected tab, and dim all others.
      // Also show the selected content div, and hide all others.
      for ( var id in contentDivs ) {
        if ( id == selectedId ) {
          tabLinks[id].className = 'selected';
          contentDivs[id].className = 'tabContent';
        } else {
          tabLinks[id].className = '';
          contentDivs[id].className = 'tabContent hide';
        }
      }

      // Stop the browser following the link
      return false;
    }

    function getFirstChildWithTagName( element, tagName ) {
      for ( var i = 0; i < element.childNodes.length; i++ ) {
        if ( element.childNodes[i].nodeName == tagName ) return element.childNodes[i];
      }
    }

    function getHash( url ) {
      var hashPos = url.lastIndexOf ( '#' );
      return url.substring( hashPos + 1 );
    }

    //]]>
    </script>
</head>
<style type="text/css">
      body { font-size: 80%; font-family: 'Lucida Grande', Verdana, Arial, Sans-Serif; }
      ul#tabs2 { list-style-type: none; margin: 0 0 0 0; padding: 0 0 0 0; }
      ul#tabs2 li { float: left; width:138px; height:50px;  }
      ul#tabs2 li a { color: #000000; background-color: #bbbbbb; border: 0; border-bottom: none; padding: 0.3em; text-decoration: none;}
      ul#tabs2 li a:hover { background-color: #f1f0ee; }
      ul#tabs2 li a.selected { color: #000; background-color: #f1f0ee; font-weight: bold; padding: 0.7em 0.3em 0.38em 0.3em; }
      div.tabContent { border: 1px solid #c9c3ba;}
      div.tabContent.hide { display: none; }
</style>
<body onload="init()">
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
            <p class="subtext"><a href="../parentsStyleFile">Parent styleFile</a></p>
        </li>
        <li class="menu24">
            <p><a href="../resources">Resources</a></p>
            <p class="subtext"><a href="../logout">logout</a></p>
            <p class="subtext"><a href="../community">community</a></p>
        </li>
        <li class="menu33">
            <p><a href="../">Plus</a></p>
            <p class="subtext"><a href="../except">except</a></p>
            <p class="subtext"><a href="">assembly</a></p>
        </li>
    </ul>
<div id="titleHeader">
    <img border="0" src="../../images/assembly.jpg" />
</div>
<div id="copyHeader">
    <ul id="tabs2">
      <li><a href="#eliTab">ELI</a></li>
      <li><a href="#stanceGlanceTab">stanceGlance</a></li>
      <li><a href="#tsiTab">TSI</a></li>
      <li><a href="#styleFileTab">styleFile</a></li>
    </ul>
    <div class="tabContent" id="eliTab">
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" id="eli" width="828" height="512" align="middle">
            <param name="allowScriptAccess" value="sameDomain" />
            <param name="movie" value="eli.swf" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#000000" />
            <embed src="eli.swf" quality="high" bgcolor="#000000" width="828" height="512" swLiveConnect=true id="main" name="eli" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        </object>
    </div>
    <div class="tabContent" id="stanceGlanceTab">
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" id="stanceGlance" width="828" height="512" align="middle">
            <param name="allowScriptAccess" value="sameDomain" />
            <param name="movie" value="stanceGlance.swf" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#000000" />
            <embed src="stanceGlance.swf" quality="high" bgcolor="#000000" width="828" height="512" swLiveConnect=true id="stanceGlance" name="stanceGlance" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        </object>
    </div>
    <div class="tabContent" id="tsiTab">
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" id="stanceGlance" width="828" height="512" align="middle">
            <param name="allowScriptAccess" value="sameDomain" />
            <param name="movie" value="tsi.swf" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#000000" />
            <embed src="tsi.swf" quality="high" bgcolor="#000000" width="828" height="512" swLiveConnect=true id="stanceGlance" name="tsi" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        </object>
    </div>
    <div class="tabContent" id="styleFileTab">
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" id="stanceGlance" width="828" height="512" align="middle">
            <param name="allowScriptAccess" value="sameDomain" />
            <param name="movie" value="styleFile.swf" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#000000" />
            <embed src="styleFile.swf" quality="high" bgcolor="#000000" width="828" height="512" swLiveConnect=true id="stanceGlance" name="styleFile" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        </object>
    </div>
<h3>©McLean Fletcher</h3>
</div>
</div>
</body>
</html>
