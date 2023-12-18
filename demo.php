<?php
echo "database connected successfully","<br>";
echo "welcome to in php";
$servername="localhost:";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if($conn){
    die("sorry we failed to connect:". mysqli_connect_errno());

}
else{
    echo "connection is not successfull";
}
?>