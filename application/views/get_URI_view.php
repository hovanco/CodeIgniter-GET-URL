<div class="container">
 <!--   URL:   http://localhost:8080/blog/index.php/post_controller/page/3    -->

 <!--  DOMAN:  http://localhost:8080/blog/index.php/   -->

 <!--  URI:    post_controller/page/3   -->

		
	<?php
		$getUri = $_SERVER['REQUEST_URI'];   // get uri
		echo $getUri;

		$uri = explode('/', $getUri); // Split string uri ->get array

		echo "<pre/>";
		var_dump($uri);  // check uri after geted

		$last_element = end($uri); // get the last element
	?>
	
</div>
