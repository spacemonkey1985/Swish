	<?php include('includes/header.php'); ?>
    
    <div class="middle-bar">
    	<div class="middle-bar-content">
        
        	<div class="tag-line">
            	<img src="images/tag-line.png" alt="We aim to tailor our services to suit every clients requirements" style="margin-bottom: 5px;" />
                
                <a href="contact.php"><img src="images/contact_btn.png" alt="Contact us" style="margin-left: 20px; float: right;" /></a>
                <a href="about.php"><img src="images/more_btn.png" alt="Find out more" style="float: right;" /></a>
                
            </div>
            
            <div class="cleaner"></div>
        
        </div>
    </div>
    
    <div class="home-slideshow">
    	<div class="home-slideshow-content">
        
            <div id="layerslider_prev">
            	
                <div class="home-slideshow-overlay"></div>
                
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
            <div id="layerslider" style="margin-left: 20px; margin-right: 20px;">
    
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
            <div id="layerslider_next">
    
    			<div class="home-slideshow-overlay"></div>
                
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
            
    <div class="main">
    	<div class="main-content" style="min-height: 465px;">
            
            
            <div class="home-column">
            	<div class="home-column-content">
            	
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
            
            <div class="cleaner"></div>
            
    	</div>
    </div>
    
    <div class="offer">
    	<div class="offer-content">
        
        	Start you project with the right footings, enquire at <b>Swish</b> today for a <b>FREE</b> consultation
            
            <a href="contact.php"><img src="images/contact_2_btn.png" alt="Contact us" style="float: right; margin-right: 20px; margin-top: 15px;" /></a>
        
        </div>
    </div>
    
    <div class="cleaner" style="margin-top: -40px;"></div>
    
    <?php include('includes/footer.php'); ?>
    
</body>

</html>
