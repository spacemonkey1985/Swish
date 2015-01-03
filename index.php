	<?php include('includes/header.php'); ?>
    <script type="text/javascript">
		jQuery_1_4_2(document).ready(function()
		{
			$(this).find(".slideshow-next").css("left", $(this).find(".slideshow").offset().left + 692);
			$(this).find(".slideshow-prev").css("left", $(this).find(".slideshow").offset().left - 692);
			
			$('#layerslider').layerSlider({
				skinsPath : 'skins/',
				skin : 'defaultskin',
				cbAnimStart : function(){ $('#layerslider_prev').layerSlider('next'); $('#layerslider_next').layerSlider('next'); },
				cbPrev : function(){ $('#layerslider_prev').layerSlider('prev'); $('#layerslider_next').layerSlider('prev'); },
				cbNext : function(){ $('#layerslider_prev').layerSlider('next'); $('#layerslider_next').layerSlider('next'); }
	
			});
			
			$('#layerslider_prev').layerSlider({
				autoStart: false,
				skinsPath : 'skins/',
				skin : 'defaultskin',
				navPrevNext : false
			});
			
			$('#layerslider_next').layerSlider({
				autoStart: false,
				skinsPath : 'skins/',
				skin : 'defaultskin',
				navPrevNext : false
			});
		
			jQuery_1_4_2(window).resize(function() {
				$(this).find(".slideshow-next").css("left", $(this).find(".slideshow").offset().left + 692);
				$(this).find(".slideshow-prev").css("left", $(this).find(".slideshow").offset().left - 692);
			});
		});
    </script>
    
    <div class="middle-bar">
    	<div class="middle-bar-content">
        
        	<div class="tag-line">
            	<img src="images/tag-line.png" alt="We aim to tailor our services to suit every clients requirements" style="margin-bottom: 5px;" />
                
                <a href="contact.php"><img src="images/contact_btn.png" alt="Contact us" style="margin-left: 20px; float: right;" /></a>
                <a href="about.php"><img src="images/more_btn.png" alt="Find out more" style="float: right;" /></a>
                
            </div>
        
        </div>
    </div>
    
    <div class="main">
    	<div class="main-content">
            
            <div class="left-column" style="margin-top: -135px;">
            	<div class="left-column-content">
            	
                	<b>Here is a sample of the services we provide at Swish Architecture</b>
                    <br /><br />
                    
                    <ul>
                    	<li>Inception and Feasibility Studies</li>
                        <li>Advice on Development Sites</li>
                        <li>Initial Design and Consultation</li>
                        <li>Town Planning Advice and Planning Applications</li>
                        <li>New Builds / Barn Conversions</li>
                        <li>Extensions / Loft Conversions</li>
                        <li>Alterations and Refurbishments</li>
                        <li>3D Visualisations and Artist Impressions</li>
                    </ul>
                	
                    <a href="services.php"><img src="images/more_2_btn.png" alt="Find out more" style="float: right;" /></a>
            	
                </div>
            </div>
            
            <div id="layerslider" class="slideshow">
    
    			<?php
				
					$images = "SELECT * FROM sa_blog_posts WHERE post_title like 'slideshow%' ORDER BY post_title;";
												
					if(!$result = mysql_query($images)){
						echo mysql_error();
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo("<div class='ls-layer' rel='slidedelay: 3000;'>");
							echo("<img src='" . $row['guid'] . "' alt='layer' />");
							echo("</div>");
						}
					}
						
				?>
                
            </div>
            
            <div class="cleaner"></div>
            
    	</div>
        
        <div class="slideshow-prev">
        	<div id="layerslider_prev">
            	
                <div class="slideshow-overlay"></div>
                
                <?php
					
					$count_sql = "SELECT COUNT(post_title) as total FROM sa_blog_posts WHERE post_title like 'slideshow%' ORDER BY post_title;";
				
					$count_result = mysql_query($count_sql);
					$count_array = mysql_fetch_array($count_result);
					$count = $count_array['total']; 
				
					$images = "SELECT * FROM sa_blog_posts WHERE post_title like 'slideshow%' ORDER BY post_title;";
												
					if(!$result = mysql_query($images)){
						echo mysql_error();
					}
					else{
						$row_count = 1;
						
						while($row = mysql_fetch_array($result)){
							if($row_count == $count){
								echo("<div class='ls-layer' rel='slidedelay: 3000;'>");
								echo("<img src='" . $row['guid'] . "' alt='layer' />");
								echo("</div>");
							}
													
							$row_count++;
						}
					}
					
					if(!$result = mysql_query($images)){
						echo mysql_error();
					}
					else{
						$row_count = 1;
						
						while($row = mysql_fetch_array($result)){
							if($row_count != $count){
								echo("<div class='ls-layer' rel='slidedelay: 3000;'>");
								echo("<img src='" . $row['guid'] . "' alt='layer' />");
								echo("</div>");
							}
						
							$row_count++;
						}
					}
						
				?>
                
            </div>
        </div>
        
        <div class="slideshow-next">
            <div id="layerslider_next">
    
                <div class="slideshow-overlay"></div>
                
                <?php
                    
                    $count_sql = "SELECT COUNT(post_title) as total FROM sa_blog_posts WHERE post_title like 'slideshow%' ORDER BY post_title;";
                
                    $count_result = mysql_query($count_sql);
                    $count_array = mysql_fetch_array($count_result);
                    $count = 1; 
                
                    $images = "SELECT * FROM sa_blog_posts WHERE post_title like 'slideshow%' ORDER BY post_title;";
                                                
                    if(!$result = mysql_query($images)){
                        echo mysql_error();
                    }
                    else{
                        $row_count = 1;
                        
                        while($row = mysql_fetch_array($result)){
                            if($row_count != $count){
                                echo("<div class='ls-layer' rel='slidedelay: 3000;'>");
                                echo("<img src='" . $row['guid'] . "' alt='layer' />");
                                echo("</div>");
                            }
                                                    
                            $row_count++;
                        }
                    }
                    
                    if(!$result = mysql_query($images)){
                        echo mysql_error();
                    }
                    else{
                        $row_count = 1;
                        
                        while($row = mysql_fetch_array($result)){
                            if($row_count == $count){
                                echo("<div class='ls-layer' rel='slidedelay: 3000;'>");
                                echo("<img src='" . $row['guid'] . "' alt='layer' />");
                                echo("</div>");
                            }
                        
                            $row_count++;
                        }
                    }
                        
                ?>
                
            </div>
        </div>
    </div>
    
    <div class="cleaner"></div>
    
    <div class="offer">
    	<div class="offer-content">
        
        	Start you project with the right footings, enquire at <b>Swish</b> today for a <b>FREE</b> consultation
            
            <a href="contact.php"><img src="images/contact_2_btn.png" alt="Contact us" style="margin-left: 10px; vertical-align: middle;" /></a>
        
        </div>
    </div>
    
   	<?php include('includes/footer.php'); ?>
    
</body>

</html>
