<?php
include ('SessionStart.php');
include('../dbcong.php');

$rollnum=$_POST['rollnum'];
$name=$_POST['name'];
$city=$_POST['city'];
$pnum=$_POST['number'];
$standard=$_POST['standard'];
$Id=$_POST['Id'];
$imagename=$_FILES['img'] ['name']  ;
$tempimagename=$_FILES['img'] ['tmp_name']  ;
move_uploaded_file($tempimagename,"../images/$imagename");
$query="UPDATE `student` SET `rollno` = '$rollnum', `name` = '$name', `city` = '$city', `pcont` = '$pnum', `standard` = '$standard', `image` = '$imagename' WHERE `id` = $Id;";



$run=mysqli_query($conn,$query)  ;
if ($run==true){


    ?>
    <script>
        alert("Data Update Successfully");

    </script>

    <?php
    header('location:Updatestudent.php');

}

else{

    ?>
    <script>
        alert("Sorry! Datadose not Update Successfully");


    </script>

    <?php

}







?>