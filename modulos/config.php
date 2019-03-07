<?php
ob_start();
session_start();
date_default_timezone_set('Europe/London');
define('DBHOST','localhost');
define('DBUSER','nekromweb');
define('DBPASS','nekromweb');
define('DBNAME','nekromweb');


define('DIR','85.155.159.36');
define('SITEEMAIL','trinckyt@gmail.com');
try {

	//create PDO connection LOGIN
	$db = new PDO("mysql:host=".DBHOST.";charset=utf8mb4;dbname=".DBNAME, DBUSER, DBPASS);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//Suggested to uncomment on production websites
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Suggested to comment on production websites
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $e) {
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

include('user.php');
include('phpmailer/mail.php');
$user = new User($db);
?>
