<?php
$server="localhost";
$username="root";
$password="kwamboka";
$database="wemabookshop";
$config=mysqli_connect($server,$username,$password,$database) or die('Could not connect to database');
if($config){
    echo 'connection was successful';
}else{
    echo 'connection failed'; 
}

?>