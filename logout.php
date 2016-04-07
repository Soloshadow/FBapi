<?php
session_start();
require_once 'Database/DB.php';
$db = new DB();

$user = $_SESSION['profile'];
echo $user;
$room = $_SESSION['room'];

$db->remove($room,$user);

session_destroy();

echo 'you are logged out <br>';
echo '<a href="index.php">home</a>';