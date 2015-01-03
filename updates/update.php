<?php

	include('../includes/db_connection.php');
	
	if(isset($_POST['name'])){
		$sql = "update sa_blog_options set option_value = 'http://swish.roybone.com/blog' where option_name = 'siteurl';";
		mysql_query($sql);

		$sql = "update sa_blog_options set option_value = 'http://swish.roybone.com/blog' where option_name = 'home';";
		mysql_query($sql);
		
		$sql = "update sa_blog_posts set post_content = replace(post_content, 'localhost/Swish', 'swish.roybone.com');";
		mysql_query($sql);
		
		$sql = "update sa_blog_posts set guid = replace(guid, 'localhost/Swish', 'swish.roybone.com');";
		mysql_query($sql);
	}
	mysql_close($conn);

?>