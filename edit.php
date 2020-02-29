<?php
require_once('./common/components.php') ;
require_once('./common/database.php') ;
require_once('./common/operation.php') ;

$con = CreateDb();

$id=$_GET['id'];
// echo $id;
$res=mysqli_query($con,"select * from info WHERE id='$id'");
while($row=mysqli_fetch_assoc($res)){
            
    $name=$row['name'];
    $fathername=$row['fathername'];
    $mothername=$row['mothername'];
    $dob=$row['dob'];
    $experience=$row['experience'];
    $qualification=$row['qualification'];
    $email=$row['email'];
    $phone=$row['phone'];
}          

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <script src="https://kit.fontawesome.com/yourcode.js"></script> -->
</head>
<body>
    <div class="container ">
        <div class="d-flex justify-content-center mt-5">
        <form action="" method="post" class="w-50" >
            <div class="mt-4">
            <?php input("Name","name","$name");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("DOB","dob","$dob","date");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("Qualification","qualification","$qualification");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("Experience","experience","$experience");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("Phone-No","phone","$phone");
            ?>
            </div>  
            <div class="mt-4">
            <?php input("Email-d","email","$email");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("Father Name","fathername","$fathername");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("Mother Name","mothername","$mothername");
            ?>
            </div> 
            <!-- <div class="mt-4">
            <?php input("Address","address","$address");
            ?>
            </div>  -->
            <div class="mt-4">
            <?php button("Update","","btn btn-success","update");
            ?>
            </div> 

        </form>
</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<?php
if(isset($_POST['update'])){
    mysqli_query($con, "update info set name='$_POST[name]', fathername='$_POST[fathername]', mothername='$_POST[mothername]', experience='$_POST[experience]', qualification='$_POST[qualification]',email='$_POST[email]',phone='$_POST[phone]' WHERE id='$id' ");
    
}
?>
</html>