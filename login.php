<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/include/data.php");

// get variables
$username = $_POST['username'];
$password = $_POST['password'];

$error = FALSE;
$userID = -1;


if(isset($_POST['submit']) ) {

	// checks for empty form fields
 if(empty($username) || empty($password)) {

 	echo "empty form field(s)</br>";
 	$error = TRUE;

 }


 // try to log in
 if(!$error) {

 	echo "try to log in<br>";
 	$userID = login($username, $password);

 	echo "user id: {$userID}<br>";

 	// correct log in, welcome user
 	if ($userID != -1) {
 		$user = getUsername($_SESSION["auth_userid"]);
		echo "Welcome {$user}!<br><br>";
		echo "<a href=\"index.php\">Click here to go back</a>";
	} 
	// incorrect log in, inform user
	// TODO: Add some user friendly stuff (e.g. incorrect username and/or password, forgot password, etc.)
	else {
		echo "Incorrect login!<br><br>";
	}

 }


}



?>
 
 <html>
	<body>

		
	</body>
</html>
