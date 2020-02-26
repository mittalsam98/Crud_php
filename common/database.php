<?php
function CreateDb(){
$server='localhost';
$username='root';
$password='';
$dbname='info';

$conn=mysqli_connect($server,$username,$password);

if(!$conn){
    die('Could not connect: ' . mysqli_connect_error());
}


$sql="CREATE DATABASE IF NOT EXISTS $dbname";
if(mysqli_query($conn,$sql)){
    $conn=mysqli_connect($server,$username,$password,$dbname);
    $sql ="
    CREATE TABLE IF NOT EXISTS info(
        name VARCHAR(20) NOT NULL,
        fathername VARCHAR(20) NOT NULL,
        mothername VARCHAR(20) NOT NULL,
        dob DATE NOT NULL,
        experience VARCHAR(80) NOT NULL,
        qualification VARCHAR(80) NOT NULL,
        email VARCHAR(50) NOT NULL,
        phone VARCHAR(50) NOT NULL
     );
    ";

    if(mysqli_query($conn,$sql )){
       return $conn;
    }
    else{
        // 
        echo "Error".mysqli_error($conn);
    }
   
}
else{
    echo " Error :".mysqli_error($conn);
}
}