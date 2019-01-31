<?php
include ('SessionStart.php');





include ('../dbcong.php');



$sid=$_GET['sid'];

$query="DELETE FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($conn,$query)  ;

header('location:Deletestudent.php')

?>