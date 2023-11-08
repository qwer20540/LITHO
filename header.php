<?php
$servername = 'localhost';
$username   = 'moonjong2';
$password   = 'anstjswhd0105';
$dbname     = 'moonjong2';

$conn = mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($conn, 'utf8');

  if( !$conn ){
    die('DATABASE 접속 실패');
  }
?>

