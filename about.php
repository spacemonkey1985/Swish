	<?php include('includes/header.php'); ?>
    <script type="text/javascript">
		jQuery_1_4_2(document).ready(function()
		{
			$(this).find(".slideshow-next").css("left", $(this).find(".slideshow").offset().left + 692);
			$(this).find(".slideshow-prev").css("left", $(this).find(".slideshow").offset().left - 692);
			
			$(this).find(".slideshow-next").css("top", $(this).find(".slideshow").offset().top);
			$(this).find(".slideshow-prev").css("top", $(this).find(".slideshow").offset().top);
			
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
				
				$(this).find(".slideshow-next").css("top", $(this).find(".slideshow").offset().top);
				$(this).find(".slideshow-prev").css("top", $(this).find(".slideshow").offset().top);
			});
		});
    </script>
    
    <div class="middle-bar">
    	<div class="middle-bar-content">
        
        	<div class="tag-line">
            	
                <img src="images/projects-tag-line.png" alt="Swish has a talented team of Architectural and Design staff from Architectural Technologists and Technicians to Interior and Graphic Designers" style="margin-top: -5px;" />
                
            </div>
        
        </div>
    </div>
    
    <div class="main">
    	<div class="main-content">
            
            <div class="left-column">
            	<div class="left-column-content">
            	
                	<?php 
						// 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
						$page_id = 36; 
					
						// You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
						$page_data = get_page( $page_id ); 
						
						// echo the title
						echo '<h2>'. $page_data->post_title .'</h2>';
						
						// echo the content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
						echo apply_filters('the_content', $page_data->post_content); 
						
					?>
            	
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
    
   	<?php include('includes/footer.php'); ?>
    
</body>

</html>
