	<?php include('includes/header.php'); ?>
    
    <script type="text/javascript">
	
		jQuery_1_4_2(document).ready(function()
		{
			jQuery_1_4_2('.project-title').hover(function(e)
			{  
				var text = '#project' + e.currentTarget.id;
				
				jQuery_1_4_2(text).stop();
				jQuery_1_4_2(text).css("top","-170px"); 
				jQuery_1_4_2(text).animate({top: '40px'},300);
					 
			}, function(e)
			{
				var text = '#project' + e.currentTarget.id;
					
				jQuery_1_4_2(text).stop();
				jQuery_1_4_2(text).css("top","40px"); 
				jQuery_1_4_2(text).animate({top: '-170px'},300);
				
			});
			
			jQuery_1_4_2('.project-text').hover(function(e)
			{  
				var text = '#project' + e.currentTarget.id;
				
				jQuery_1_4_2(text).stop();
				jQuery_1_4_2(text).css("top","-170px"); 
				jQuery_1_4_2(text).animate({top: '40px'},300);
					 
			}, function(e)
			{
				var text = '#project' + e.currentTarget.id;
					
				jQuery_1_4_2(text).stop();
				jQuery_1_4_2(text).css("top","40px"); 
				jQuery_1_4_2(text).animate({top: '-170px'},300);
				
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
            
            <div class="projects">
					
				<?php
                    query_posts('cat=3');
                    while (have_posts()) : the_post();
                        $postID = $post->ID;
                        $title = strtolower(str_replace(" ", "_", $post->post_title));
						
						echo '<div class="project-container">';
						echo '<div class="project-title" id="' . $postID . '">';
                       	echo '<a href="project_detail.php?post=' . $postID . '&title=' . $title . '">';
						the_title();
					    echo '</a>';
						echo '</div>';
						echo '<div class="project-text" id="project' . $postID . '">';
                       	the_excerpt();
					    echo '</div>';
						the_post_thumbnail('full');
                        echo '<div class="projects-more">';
                        echo '<a href="project_detail.php?post=' . $postID . '&title=' . $title . '"><img src="images/more_btn.png" alt="Find out more" /></a>';
                        echo '</div>';
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
