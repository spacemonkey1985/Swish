	<?php include('includes/header.php'); ?>
    
    <div class="middle-bar">
    	<div class="middle-bar-content">
        
        	<div class="tag-line">
        		<img src="images/testimonials-tag-line.png" alt="See what our customers have to say about us" />
            </div>
            
        </div>
    </div>           

    <div class="main">
    	<div class="main-content">
            
       	  	<div class="testimonials">
            	<?php
                    query_posts('cat=5');
                    while (have_posts()) : the_post();
                        $postID = $post->ID;
                        $title = strtolower(str_replace(" ", "_", $post->post_title));
						
						echo '<div class="testimonials-container">';
						the_post_thumbnail('full');
                        the_content();
					    echo '</div>';
                    endwhile;
                    
                ?>
            </div>
            
            <div class="cleaner"></div>
            
        </div>
    </div>
    
    <?php include('includes/footer.php'); ?>
    
</body>

</html>
