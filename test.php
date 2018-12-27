<?php
 $host="localhost";
$user="root";
$password="";
$con=mysqli_connect($host,$user,$password);
if($con) {
    echo 'Connected to MySQL';
} 
else {
    echo 'MySQL Server is not connected';
}
?>