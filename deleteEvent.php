<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/include/data.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/include/event.php");

//deletes event, redirects you to homepage for now

$EID = $_GET['e'];
eventDelete($EID);
sleep(2);
header('Location: index.php');

?>
