<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/include/data.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/include/login.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/include/search.php");

$msg = doLogin();


$user = $_GET["u"];
$loggedin = getActiveUser();





?>
 
 <html>

 	<header>

 	<script>
 		function RemoveText(obj) {   obj.value = ''; } 
 	</script>

 	</header>
	<body>
	
		<?php
		login_div($msg);
		//echo '<h1>Welcome ' . $username .'!</h1>';
		$username = getUsername($user);
		$
		if($user === $loggedin)
			{
				//Display your profile
				
			}
			else
			{
				//Public Profile
			}

		?>

		
		<!--<img src="./resources/img/Homepage.jpg" />-->
		<div id="search-area">
			<form name="login" id="login" action="profile.php" method="POST">
				<label for="username"/></label>
				<input type="text" name="search_query" value="" onclick="RemoveText(this);">
				<input class= "btn" name="search_submit" type="submit" value="Search Events">
			</form>


			<div id="search_results">
				<?php doEventSearch(); ?>
			</div>

		</div>
		

		<div id="event-create">
			<p><a href="createEvent.php">Click here</a> to create an event</p>
		</div>


	</body>
</html>


<?php


?>