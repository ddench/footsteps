<!DOCTYPE html>
<html>
	<head>
<?php include"php/includes/templates/includeheadtags.php";?>
<?php include"php/includes/templates/includeheadscripts.php";?>
<!--
	<!--<?php
if (isset($_SESSION['user_id']))} 
?> -->
<!--<?php
if(login_check($dbconnect)==true) {

	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Footsteps Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory 
        
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="css/normalize.css"/>
<link rel="stylesheet" href="footsteps/js/jquery-ui/css/cupertino/jquery-ui-1.10.2.custom.min.css" />



<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	<link rel="stylesheet" href="js/jBreadCrumb/Styles/Base.css" type="text/css"/>
	

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/jBreadCrumb/js/jquery.jBreadCrumb.1.1.js"></script>
<!--<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script>window.jQuery || document.write('<script src="footsteps/js/jquery-ui/js/jquery-1.10.2.min.js"><\/script>')</script>

<link rel="stylesheet" href="css/main.css"/>

      <link rel="stylesheet" href="js/jBreadCrumb/Styles/BreadCrumb.css" type="text/css"/>


        <script>
  $(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
  });
  </script>

 <script>
  $(function() {
    $( "#menu" ).menu();
  });
  </script>
  <style>
  .ui-menu { width: 50px; }
  </style>



  <!--
<script>
	jQuery(document).ready(function()
{
	jQuery("#breadCrumb").jBreadCrumb();
})	
</script> -->

  
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
<nav id="layoutmenu" style="width:1270px" class="header">
<!--<header style="display:inline-block; width:1270px;" class="header">-->
<img class="footstepslogo" src="img/footstepslogo.png"/>
  <div class="breadCrumbHolder module">
                 <div  id="breadCrumb" class="breadCrumb module">
                    <ul class="breadCrumb module">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Biocompare Home</a>
                        </li>
                        <li>
                            <a href="#">Product Discovery</a>
                        </li>
                        <li>
                            <a href="#">Life Science Products / Laboratory Supplies</a>
                        </li>
                        <li>
                            <a href="#">Kits and Assays</a>
                        </li>
                    </ul>
             </div>
          </div>	

<a href="index.html"><img class="logoutlogo" src="img/symbollogout.png"/></a>
<img class="helplogo" id="opener" src="img/symbolhelp.png"/>
<img class="settingslogo" src="img/settings.png" />

<!--<ul id="menu">
	
  <li>
    <a href="#">Playback</a>
    <ul>
      <li><a href="#"><span class="ui-icon ui-icon-seek-start"></span>Prev</a></li>
      <li><a href="#"><span class="ui-icon ui-icon-stop"></span>Stop</a></li>
      <li><a href="#"><span class="ui-icon ui-icon-play"></span>Play</a></li>
      <li><a href="#"><span class="ui-icon ui-icon-seek-end"></span>Next</a></li>
    </ul>
  </li>
</ul>-->

<ul >
   <li class='has-sub'><a href="#"><img class="layoutmenuimg" src="img/gridview.png"/></a>
      <ul>
         <li><a href="#"><img class="layoutmenuimg" src="img/listview.png"/></a></li>
         <li><a href="#"><img class="layoutmenuimg" src="img/coverflow.png"/></a></li>
      </ul>
   </li>
</ul>
</nav>

<nav class="nav">



</nav>
<section class="mainbody">
	<div class="wrapper">
		
	</div>			
	</section>    
<footer class="footer">
	<div>
		<a href="http://www.openict.co"><img class="oictlogo" src="img/oictlogo.png"/></a>
		<div class="copyright">(c)OpenICT Ltd. 2011 - 2013 <br></br>Footsteps Pupil Assessment and tracking software<br></br><br></br><br></br></div>
		<div class="codetails">OpenICT Ltd <br></br>Company No: 9999999 <br></br>VAT Reg No 12345678<br></br><br></br></div>
		<div class="links">Contact Us <br></br>Privacy <br></br>Legal <br></br>About<br></br></div>
	</div>
</footer>    

        <div id="dialog" title="Basic dialog">
  <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div> 	

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
 
    </body>
    <!--}
	else {
		echo'You are not authorised to access this page, please login.<br/>';
}-->
</html>
