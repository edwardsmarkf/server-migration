<?php
//  written from:   
//   https://wordpress.stackexchange.com/questions/422737/wp-mail-fails-with-could-not-instantiate-mail-function-but-mail-works-fine

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// include wordpress
require_once('wp-load.php');
$to = "mark@mark.com";
$msg = "test email via wordpress";

$headers = array(
  'From: server<info@myserver.com>'
);
$headers = implode( PHP_EOL, $headers );
// use wordpress email function
$check = wp_mail($to, $msg, $msg, $headers);

var_dump($check);

?>
