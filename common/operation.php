<?php

require_once("database.php"); 
require_once("components.php"); 
$con = CreateDb();

if(isset($_POST['create'])){
    createdata();
}

function createdata(){
    $name =textvalue('name');
    $fathername =textvalue('fathername');
    $mothername =textvalue('mothername');
    $dob =textvalue('dob');
    $experience = textvalue('experience');
    $qualification = textvalue('qualification');
    $email = textvalue('email');
    $phone = textvalue('phone');
    

    if($name && $fathername && $mothername && $dob && $experience && $qualification && $email &&$phone){
            $sql="
            INSERT INTO info(name, fathername, mothername, experience, qualification,email,phone)
            VALUES('$name', '$fathername', '$mothername', '$experience', '$qualification','$email','$phone')
            ";

            if(mysqli_query($GLOBALS['con'],$sql)){
                echo  "Data inserted  successfully";
                die("Data inserted");
            }
            else {
                echo "Error occcured in insertion";
            }
    }else{
        echo "insert record pls";
    }
}

function textvalue($value){
$textbox=mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
if(empty($textbox)){
    return false;
}
else{
    return $textbox;
}
}


function getdata(){
    $sql="
    SELECT * FROM info;
    ";

    $result=mysqli_query($GLOBALS['con'],$sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}