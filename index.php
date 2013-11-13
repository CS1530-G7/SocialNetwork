<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/include/data.php");

?>
 
 <html>

 	<header>

 	<script>
 		function RemoveText(obj) {   obj.value = ''; } 
 	</script>

 	</header>
	<body>

		<div id="login-form">

			<form name="login" id="login" action="login.php" method="POST">
				<label for="username"/>Username:</label>
				<input type="text" name="username">
				<label for="password"/>Password:</label>
				<input type="password" name="password">
				<input class= "btn" name="submit" type="submit" value="Submit">
			</form>

		</div>

		<div id="sign-up">
			<a href="signup.php">Sign up</a>
		</div>
	
		
		<h1>Welcome to EventHub!</h1>
		
		<!--<img src="./resources/img/Homepage.jpg" />-->
		<div id="search-area">
			<form name="login" id="login" action="login.php" method="POST">
				<label for="username"/></label>
				<input type="text" name="search_query" value="Type your location" onclick="RemoveText(this);">
				<input class= "btn" name="submit" type="submit" value="Search Events">
			</form>
		</div>
		
	</body>
</html>
