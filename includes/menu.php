<?php
	$page = "";
	$page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
				
	if(strtolower($page) == "index.php" || $page == ""){
		echo "<div class=\"menu-btn-container-current\" onclick=\"window.location='index.php'\"><div class=\"menu-btn-current\">Home</div></div>";
	}
	else{
		echo "<div class=\"menu-btn-container\" onclick=\"window.location='index.php'\"><div class=\"menu-btn\">Home</div><div class=\"menu-btn-hover\">Home</div></div>";
	}
	
	if(strtolower($page) == "services.php"){
		echo "<div class=\"menu-btn-container-current\" onclick=\"window.location='services.php'\"><div class=\"menu-btn-current\">Services</div></div>";
	}
	else{
		echo "<div class=\"menu-btn-container\" onclick=\"window.location='services.php'\"><div class=\"menu-btn\">Services</div><div class=\"menu-btn-hover\">Services</div></div>";
	}
	
	if(stristr(strtolower($page), 'project') != ''){
		echo "<div class=\"menu-btn-container-current\" onclick=\"window.location='projects.php'\"><div class=\"menu-btn-current\">Projects</div></div>";
	}
	else{
		echo "<div class=\"menu-btn-container\" onclick=\"window.location='projects.php'\"><div class=\"menu-btn\">Projects</div><div class=\"menu-btn-hover\">Projects</div></div>";
	}
	
	if(strtolower($page) == "testimonials.php"){
		echo "<div class=\"menu-btn-container-current\" onclick=\"window.location='testimonials.php'\"><div class=\"menu-btn-current\">Testimonials</div></div>";
	}
	else{
		echo "<div class=\"menu-btn-container\" onclick=\"window.location='testimonials.php'\"><div class=\"menu-btn\">Testimonials</div><div class=\"menu-btn-hover\">Testimonials</div></div>";
	}
	
	if(strtolower($page) == "brochure.php"){
		echo "<div class=\"menu-btn-container-current\" onclick=\"window.location='brochure.php'\"><div class=\"menu-btn-current\">Brochure</div></div>";
	}
	else{
		echo "<div class=\"menu-btn-container\" onclick=\"window.location='brochure.php'\"><div class=\"menu-btn\">Brochure</div><div class=\"menu-btn-hover\">Brochure</div></div>";
	}
	
	if(strtolower($page) == "about.php"){
		echo "<div class=\"menu-btn-container-current\" onclick=\"window.location='about.php'\"><div class=\"menu-btn-current\">About Us</div></div>";
	}
	else{
		echo "<div class=\"menu-btn-container\" onclick=\"window.location='about.php'\"><div class=\"menu-btn\">About Us</div><div class=\"menu-btn-hover\">About Us</div></div>";
	}
	
	if(strtolower($page) == "contact.php"){
		echo "<div class=\"menu-btn-container-current\" onclick=\"window.location='contact.php'\"><div class=\"menu-btn-current\">Contact Us</div></div>";
	}
	else{
		echo "<div class=\"menu-btn-container-end\" onclick=\"window.location='contact.php'\"><div class=\"menu-btn\">Contact Us</div><div class=\"menu-btn-hover\">Contact Us</div></div>";
	}

?>