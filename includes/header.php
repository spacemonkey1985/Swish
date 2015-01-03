<?php

	include('includes/db_connection.php');
	require('blog/wp-blog-header.php');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta name="keywords" content="architecture" />
<meta name="description" content="Bespoke architecture" />
<title>Swish Architecture - Home</title>
<link type="text/css" href="stylesheets/common.css" rel="stylesheet" />
<link rel="stylesheet" href="stylesheets/layerslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="stylesheets/page-styles.css">
<!--[if lt IE 9]>
    <script src="js/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
	var jQuery_1_4_2 = $.noConflict(true);
</script>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    
<!--[if lt IE 7]>
<script defer type="text/javascript" src="js/pngfix.js"></script>
<![endif]-->

<script type="text/javascript">
	
 	jQuery_1_4_2(document).ready(function()
  	{
   	 	/* Shine on load */
	 	jQuery_1_4_2(function()
	 	{  
         	jQuery_1_4_2(this).find(".logo-shine").stop();
         	jQuery_1_4_2(this).find(".logo-shine").css("background-position","-142px 0px"); 
         	jQuery_1_4_2(this).find(".logo-shine").animate({backgroundPosition: '142px 0px'},700);
			
			jQuery_1_4_2("#menu-buttons").stop();
         	jQuery_1_4_2("#menu-buttons").css("margin-top","45px"); 
         	jQuery_1_4_2("#menu-buttons").animate({marginTop: '0px'},1000);
			 
	 	}, function()
	 	{
	 		jQuery_1_4_2(this).find(".logo").stop().animate({marginLeft:0, marginTop:0},200);
			jQuery_1_4_2("#menu-buttons").stop().animate({marginTop:0},200);
	 	})
	 
	 	/* Shine every 5 seconds */
	 	setInterval(function(){
	 	jQuery_1_4_2(function()
	 	{  
         	//$(this).find(".logo").stop().animate({marginLeft:0, marginTop:0},200);
		 	jQuery_1_4_2(this).find(".logo-shine").stop();
         	jQuery_1_4_2(this).find(".logo-shine").css("background-position","-142px 0px"); 
         	jQuery_1_4_2(this).find(".logo-shine").animate({backgroundPosition: '142px 0px'},700);
			 
	 	}, function()
	 	{
	 		jQuery_1_4_2(this).find(".logo").stop().animate({marginLeft:0, marginTop:0},200);
	 	})}, 5000);
   
   		jQuery_1_4_2('.menu-btn-container').hover(function(e)
		{  
			//$(this).find("#menu-btn2").stop().animate({backgroundPosition: '0px 40px'},200);
			jQuery_1_4_2(e.currentTarget).find(".menu-btn").stop();
			jQuery_1_4_2(e.currentTarget).find(".menu-btn").css("margin-top","0px"); 
			jQuery_1_4_2(e.currentTarget).find(".menu-btn").animate({marginTop: '-40px'},300);
				 
		}, function(e)
		{
			jQuery_1_4_2(e.currentTarget).find(".menu-btn").stop();
			jQuery_1_4_2(e.currentTarget).find(".menu-btn").css("margin-top","-40px"); 
			jQuery_1_4_2(e.currentTarget).find(".menu-btn").animate({marginTop: '0px'},300);
		});
		
		jQuery_1_4_2('.menu-btn-container-end').hover(function(e)
		{  
			//$(this).find("#menu-btn2").stop().animate({backgroundPosition: '0px 40px'},200);
			jQuery_1_4_2(e.currentTarget).find(".menu-btn").stop();
			jQuery_1_4_2(e.currentTarget).find(".menu-btn").css("margin-top","0px"); 
			jQuery_1_4_2(e.currentTarget).find(".menu-btn").animate({marginTop: '-40px'},300);
				 
		}, function(e)
		{
			jQuery_1_4_2(e.currentTarget).find(".menu-btn").stop();
			jQuery_1_4_2(e.currentTarget).find(".menu-btn").css("margin-top","-40px"); 
			jQuery_1_4_2(e.currentTarget).find(".menu-btn").animate({marginTop: '0px'},300);
		});
		
  	});
</script>

</head>

<body>
	
    <div class="header">
    	<div class="header-content">
        
        	<div class="quick-contact">
            	<img src="images/email_icon.png" alt="email" class="email-icon" />
            
            	|&nbsp;&nbsp;<a href="mailto: design.me@swish-architecture.co.uk">design.me@swish-architecture.co.uk</a>
            </div>
            
        	<div class="logo-container">
                <img src="images/logo.png" alt="Swish Architecture" class="logo" />
                <div class="logo-shine"></div>
                <div class="logo-mask"></div>
                
               	<img src="images/bespoke_logo.png" alt="bespoke architecture" class="sub-logo" />
            </div>
            
            <div class="menu">
            	
                <div id="menu-buttons" class="menu-buttons">
                	<?php include('includes/menu.php'); ?>
            	</div>
                
            </div>
            
        </div>
    </div>
    
    <div class="header-underline"></div>
    
    <div class="cleaner"></div>