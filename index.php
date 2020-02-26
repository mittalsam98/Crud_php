<?php
require_once('./common/components.php') ;
require_once('./common/database.php') ;
CreateDb();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
</head>
<body>
    <div class="container ">
        <div class="d-flex justify-content-center mt-5">
        <form class="w-50">
            <div class="mt-4">
            <?php input("Name","name","");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("DOB","dob","","dob");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("Qualification","qualification","");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("Experience","experience","");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("Phone-No","Phone-No","");
            ?>
            </div>  
            <div class="mt-4">
            <?php input("Email-d","Email-d","");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("Father Name","Father Name","");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("Mother Name","Mother Name","");
            ?>
            </div> 
            <div class="mt-4">
            <?php input("Address","Address","");
            ?>
            </div> 
            <div class="mt-4">
            <?php button("Create","create","btn btn-success","name");
            ?>
            <?php button("Edit  ","create","btn btn-info","name");
            ?>
            <?php button("Delete","create","btn btn-danger","name");
            ?>
            </div> 

        </form>
    </div>
    <div class="mt-5">
    <table class="table table-striped table-dark">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Father Name</th>
        <th scope="col">Mother Name</th>
        <th scope="col">Email-Id</th>
        <th scope="col">Experience</th>
        <th scope="col">Qualification</th>
        <th scope="col">Phone No</th>
        <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Father Name</th>
        <th scope="col">Mother Name</th>
        <th scope="col">Email-Id</th>
        <th scope="col">Experience</th>
        <th scope="col">Qualification</th>
        <th scope="col">Phone No</th>
        </tr>
    </tbody>
</table>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>