	<?php include('includes/header.php'); ?>
    
    <script type="text/javascript" src="js/swfobject2.js"></script>
	<script type="text/javascript" src="js/turn.js"></script>
    <script type="text/javascript" src="js/flipbook.js"></script>
    <script type="text/javascript" src="js/jquery.doubletap.js"></script>
    <script type="text/javascript" src="js/jquery.color.js"></script>
    <script type="text/javascript" src="js/page-js.js"></script>
	
    <?php include_once('includes/settings.php'); ?>
    
    <div class="middle-bar">
    	<div class="middle-bar-content">
        
        	<div class="tag-line">
        		<img src="images/services-tag-line.png" alt="Swish Architecture can provide you with a variety of services to home owners wanting to extend their property or to property developers" />
            </div>
            
        </div>
    </div>     

    <div class="main">
    	<div class="main-content">
        	
            <div class="cleaner"></div>
            
       	  	<div id="flipbook-container-1" class="flipbook-container">
	
                <!-- Flip book -->
                <div id="flipbook-1" class="flipbook">
                    <!-- Start Flip Book Pages -->
                    
                    <!-- Cover -->
                    <div class="fb-page">
                        <div class="page-content">
                            <div class="container">
                            
                            	<?php
								
									$images = "SELECT * FROM sa_blog_posts WHERE post_title like 'brochure_cover%' ORDER BY post_title;";
                                                
									if(!$result = mysql_query($images)){
										echo mysql_error();
									}
									else{
										while($row = mysql_fetch_array($result)){
											echo '<img src="' . $row['guid'] . '" class="bg-img" />';
		                            		echo '<img src="' . $row['guid'] . '" class="bg-img zoom-large"/>';
										}
									}
									
								?>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- Double Pages -->
                                
					<?php
                    
                        $images = "SELECT * FROM sa_blog_posts WHERE post_title like 'brochure_%' AND post_title NOT LIKE 'brochure_cover%' AND post_title NOT LIKE 'brochure_back%' ORDER BY post_title;";
                                    
                        if(!$result = mysql_query($images)){
                            echo mysql_error();
                        }
                        else{
                            while($row = mysql_fetch_array($result)){
								echo '<div class="fb-page double">';
                        		echo '<div class="page-content">';
                            	echo '<div class="container">';
                                echo '<img src="' . $row['guid'] . '" class="bg-img" />';
								$row = mysql_fetch_array($result);
                                echo '<img src="' . $row['guid'] . '" class="bg-img zoom-large"/>';
								echo '</div>';
                        		echo '</div>';
                    			echo '</div>';
                            }
                        }
                        
                    ?>
                    
                    <!-- Back Cover -->
                    <div class="fb-page">
                        <div class="page-content">
                            <div class="container">
                                
                                <?php
								
									$images = "SELECT * FROM sa_blog_posts WHERE post_title like 'brochure_back%' ORDER BY post_title;";
                                                
									if(!$result = mysql_query($images)){
										echo mysql_error();
									}
									else{
										while($row = mysql_fetch_array($result)){
											echo '<img src="' . $row['guid'] . '" class="bg-img" />';
		                            		echo '<img src="' . $row['guid'] . '" class="bg-img zoom-large"/>';
										}
									}
									
								?>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- end Flip Book Pages -->
                    
                </div> <!-- end Flip Book -->
                
                <!-- Flip Book Navigation -->
                <div id="fb-nav-1" class="fb-nav mobile stacked">
                    <ul>
                        <li class="zoom left">Table Of Content</li>
                        <li class="show-all right">Show All Pages</li>
                    </ul>
                            
                </div> <!-- end FLip Book Nav -->
            </div> <!-- end Flip Book Container -->
        
        	<div class="cleaner"></div>
            
        </div>
    </div>
    
    <?php include('includes/footer.php'); ?>
    
</body>

</html>
