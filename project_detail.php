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
		
			jQuery_1_4_2('.thumb').click(function(e)
			{
				var cur = e.currentTarget.id.replace("thumb", "");
				
				$('#layerslider').layerSlider(parseInt(cur));
				$('#layerslider_prev').layerSlider(parseInt(cur));
				$('#layerslider_next').layerSlider(parseInt(cur)); 
			});
			
			jQuery_1_4_2('#layerslider_next_overlay').hover(function(e)
			{
				$('#layerslider').layerSlider('next');
				$('#layerslider_prev').layerSlider('next'); 
				$('#layerslider_next').layerSlider('next');
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
						$drawings = "SELECT * FROM sa_blog_posts WHERE post_type = 'attachment' AND post_parent = 0 AND post_title like '" . $_GET['title'] . "%' AND guid like '%.pdf' ORDER BY post_title;";
						
						$drawing = 'No drawings';
												
						if(!$result = mysql_query($drawings)){
							echo mysql_error();
						}
						else{
							while($row = mysql_fetch_array($result)){
								$drawing = '<a href="' . $row['guid'] . '" target="_blank">Download</a>';
							}
						}
						
						query_posts('p=' . $_GET['post'] . '&cat=3');
					 	while (have_posts()) : the_post();
							$postID = $post->ID;
							echo '<h2>';							
							the_title();
							echo '</h2>';
					 		the_content();
							echo "<b>Drawings: </b>" . $drawing;
						endwhile;
						
					?>
            	
                </div>
            </div>
            
            <div id="layerslider" class="slideshow">
    
    			<?php
				
					$images = "SELECT * FROM sa_blog_posts WHERE post_type = 'attachment' AND post_parent = 0 AND post_title like '" . $_GET['title'] . "%' AND guid not like '%.pdf' ORDER BY post_title;";
												
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
            
            <?php
			
				echo '<div style="position: relative; float: right; margin-top: 20px; margin-bottom: 0px; margin-right: 5px; width: 672px; text-align: right;">';
							
				$images = "SELECT * FROM sa_blog_posts WHERE post_type = 'attachment' AND post_parent = 0 AND post_title like '" . $_GET['title'] . "%'  AND guid not like '%.pdf' ORDER BY post_title;";
				$i = 1;
							
				if(!$result = mysql_query($images)){
					echo mysql_error();
				}
				else{
					while($row = mysql_fetch_array($result)){
						echo("<img src='" . str_replace('.jpg', '-150x150.jpg', $row['guid']) . "' alt='thumb' class='thumb' id='thumb" . $i . "' />");
						$i++;
					}
				}
				
				echo '</div>';
			?>
            
    	</div>
        
        <div class="cleaner"></div>
        
        <div class="slideshow-prev">
        	<div id="layerslider_prev">
            	
                <div class="slideshow-overlay"></div>
                
                <?php
					
					$count_sql = "SELECT COUNT(post_title) as total FROM sa_blog_posts WHERE post_type = 'attachment' AND post_parent = 0 AND post_title like '" . $_GET['title'] . "%' ORDER BY post_title;";
				
					$count_result = mysql_query($count_sql);
					$count_array = mysql_fetch_array($count_result);
					$count = $count_array['total']; 
				
					$images = "SELECT * FROM sa_blog_posts WHERE post_type = 'attachment' AND post_parent = 0 AND post_title like '" . $_GET['title'] . "%' ORDER BY post_title;";
												
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
    
                <div class="slideshow-overlay" id="layerslider_next_overlay"></div>
                
                <?php
                    
                    $count_sql = "SELECT COUNT(post_title) as total FROM sa_blog_posts WHERE post_type = 'attachment' AND post_parent = 0 AND post_title like '" . $_GET['title'] . "%' ORDER BY post_title;";
				
					$count_result = mysql_query($count_sql);
					$count_array = mysql_fetch_array($count_result);
					$count = 1; 
				
					$images = "SELECT * FROM sa_blog_posts WHERE post_type = 'attachment' AND post_parent = 0 AND post_title like '" . $_GET['title'] . "%' ORDER BY post_title;";
					                            
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
