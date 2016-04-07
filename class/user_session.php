<?php
require_once __DIR__  . '/../Database/DB.php';
session_start();
$user = $_SESSION['profile'];
$db = new DB();
//$db->insert($user);

if($_SERVER['REQUEST_URI'] == '/FBapi/room1.php'){
    $db->user('room1',$user);
    echo $user."&nbsp&nbsp&nbsp&nbsp ". "<a href='logout.php'>[X]</a>";
    $_SESSION['room'] = 'room1';
}else if($_SERVER['REQUEST_URI'] == '/FBapi/room2.php'){
    $db->user('room2',$user);
    echo $user."&nbsp&nbsp&nbsp&nbsp ". "<a href='logout.php'>[X]</a>";
    $_SESSION['room'] = 'room2';
}else if($_SERVER['REQUEST_URI'] == '/FBapi/room3.php'){
    $db->user('room3',$user);
    echo $user."&nbsp&nbsp&nbsp&nbsp ". "<a href='logout.php'>[X]</a>";
    $_SESSION['room'] = 'room3';
}else if($_SERVER['REQUEST_URI'] == '/FBapi/room4.php'){
    $db->user('room4',$user);
    echo $user."&nbsp&nbsp&nbsp&nbsp ". "<a href='logout.php'>[X]</a>";
    $_SESSION['room'] = 'room4';
}else{
    echo "niet gesaved";
}

//echo $user."&nbsp&nbsp&nbsp&nbsp ". "<a href='logout.php'>[X]</a>";
//echo $_SERVER['REQUEST_URI'];