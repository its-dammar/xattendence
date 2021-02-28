<?php
$servername="localhost";
$username="root";
$password="";
$dbname="xattendence";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
  echo "Error in connecting Database";
}


// else {
// 	echo "Database Connection Done.";
// }

 ?>