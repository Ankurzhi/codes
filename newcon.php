<?php
$sererName ="localhost";
$userName ="root";
$password ="";
$dbName ="ankur";


$con =mysqli_connect($sererName,$userName,$password,$dbName);
if(mysqli_connect_errno()){
    echo "failed to connect";
    exit();
}
echo "Connection success <br>";

// $sql="CREATE DATABASE ankurkr";
// $result=mysqli_query($con,$sql);
// if($result){
//     echo "The database is created";
// }

// else{
//     echo "the db is not created because".mysqli_error($con);
// }
// $sql="CREATE TABLE `ankur`.`depatment` (`sno.` INT NOT NULL , `Name` INT NOT NULL , `batch_no` INT NOT NULL , `faculty_name` INT NOT NULL )";
$Name="Vishal";
$Roll="25";
$course="BCA";
$sno='10';
$sql="INSERT INTO `student` (`sno.`, `Name`, `Roll`, `Course`) VALUES ('$sno.', '$Name', '$Roll', '$course')";
$result=mysqli_query($con,$sql);
if($result){
        echo "The data is insert into table";
    }
    
     else{
        echo "the data is not insert because ".mysqli_error($con);
     }


?>


