	<?php include('includes/header.php'); ?>
    
    <?php
		query_posts('cat=4');
		$i = 1;
		while (have_posts()) : the_post();
			$i++;
		endwhile;
		
		$last = $i % 4;
	?>
    
    <script type="text/javascript">
		var last = "<?php echo $last ?>";
		
		jQuery_1_4_2(document).ready(function()
		{
			$(this).find(".services-slideshow-next").css("left", $(this).find(".services-slideshow").offset().left + 1000);
			$(this).find(".services-slideshow-prev").css("left", $(this).find(".services-slideshow").offset().left - 1000);
			
			$(this).find(".services-slideshow-next").css("top", $(this).find(".services-slideshow").offset().top);
			$(this).find(".services-slideshow-prev").css("top", $(this).find(".services-slideshow").offset().top);
			
			$('#services-layerslider').layerSlider({
				skinsPath : 'skins/',
				skin : 'defaultskin',
				cbAnimStart : function(){ $('#services-layerslider_prev').layerSlider('next'); $('#services-layerslider_next').layerSlider('next'); },
				cbPrev : function(){ $('#services-layerslider_prev').layerSlider('prev'); $('#services-layerslider_next').layerSlider('prev'); },
				cbNext : function(){ $('#services-layerslider_prev').layerSlider('next'); $('#services-layerslider_next').layerSlider('next'); }
	
			});
			
			$('#services-layerslider_prev').layerSlider({
				autoStart: false,
				firstLayer: last,
				skinsPath : 'skins/',
				skin : 'defaultskin',
				navPrevNext : false
			});
			
			$('#services-layerslider_next').layerSlider({
				autoStart: false,
				firstLayer: 2,
				skinsPath : 'skins/',
				skin : 'defaultskin',
				navPrevNext : false
			});
		
			jQuery_1_4_2(window).resize(function() {
				$(this).find(".services-slideshow-next").css("left", $(this).find(".services").offset().left + 1000);
				$(this).find(".services-slideshow-prev").css("left", $(this).find(".services").offset().left - 1000);
				
				$(this).find(".services-slideshow-next").css("top", $(this).find(".services").offset().top);
				$(this).find(".services-slideshow-prev").css("top", $(this).find(".services").offset().top);
			});
		});
    </script>
    
    <div class="middle-bar">
    	<div class="middle-bar-content">
        
        	<div class="tag-line">
        		<img src="images/services-tag-line.png" alt="Swish Architecture can provide you with a variety of services to home owners wanting to extend their property or to property developers" />
            </div>
            
        </div>
    </div>     

    <div class="main">
    	<div class="main-content">
        	
            <div id="services-layerslider" class="services-slideshow">
				<?php
                    query_posts('cat=4&order=ASC');
                    $i = 1;
                    while (have_posts()) : the_post();
    
                        $postID = $post->ID;
                        $title = strtolower(str_replace(" ", "_", $post->post_title));
                        
                        if($i == 1) {
                            echo("<div class='ls-layer' rel='slidedelay: 3000;'>");
                            echo '<div class="services-container" style="margin-left: 0px;">';						
                        }
                        else {
                            $left = 250 * ($i -1);
                            echo '<div class="services-container" style="margin-left: ' . $left .'px;">';
                        }
                        echo '<div class="services-title" id="' . $postID . '">';
                        the_title();
                        echo '</div>';
                        the_post_thumbnail('full');
                        echo '</div>';
                        
                        if($i == 4) {
                            echo '</div>';
                            $i = 1;
                        }
                        else {
                            $i++;
                        }
                    endwhile;
                    
					if($i != 1) {
						echo '</div>';
					}
                ?>
            </div>
            
        	<div class="cleaner"></div>
            
        </div>
        
        <div class="services-slideshow-prev">
        	<div id="services-layerslider_prev">
            	
                <div class="services-slideshow-overlay"></div>
                
                 <?php
                    query_posts('cat=4&order=ASC');
					$i = 1;
                    while (have_posts()) : the_post();

                        $postID = $post->ID;
                        $title = strtolower(str_replace(" ", "_", $post->post_title));
						
						if($i == 1) {
							echo("<div class='ls-layer' rel='slidedelay: 3000;'>");
							echo '<div class="services-container" style="margin-left: 0px;">';						
						}
						else {
							$left = 250 * ($i -1);
							echo '<div class="services-container" style="margin-left: ' . $left .'px;">';
						}
						echo '<div class="services-title" id="' . $postID . '">';
                       	the_title();
					    echo '</div>';
						the_post_thumbnail('full');
                        echo '</div>';
						
						if($i == 4) {
							echo '</div>';
							$i = 1;
						}
						else {
							$i++;
						}
                    endwhile;
					
					if($i != 1) {
						echo '</div>';
					}
                    
                ?>
                
            </div>
        </div>
        
        <div class="services-slideshow-next">
        	<div id="services-layerslider_next">
            	
                <div class="services-slideshow-overlay"></div>
                
                 <?php
                    query_posts('cat=4&order=ASC');
					$i = 1;
                    while (have_posts()) : the_post();

                        $postID = $post->ID;
                        $title = strtolower(str_replace(" ", "_", $post->post_title));
						
						if($i == 1) {
							echo("<div class='ls-layer' rel='slidedelay: 3000;'>");
							echo '<div class="services-container" style="margin-left: 0px;">';						
						}
						else {
							$left = 250 * ($i -1);
							echo '<div class="services-container" style="margin-left: ' . $left .'px;">';
						}
						echo '<div class="services-title" id="' . $postID . '">';
                       	the_title();
					    echo '</div>';
						the_post_thumbnail('full');
                        echo '</div>';
						
						if($i == 4) {
							echo '</div>';
							$i = 1;
						}
						else {
							$i++;
						}
                    endwhile;
					
					if($i != 1) {
						echo '</div>';
					}
                    
                ?>
                
            </div>
        </div>
        
    </div>
    
    <div class="cleaner"></div>
    
    <?php include('includes/footer.php'); ?>
    
</body>

</html>
