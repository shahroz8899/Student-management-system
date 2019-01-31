<?php
include ('SessionStart.php');

?>



    <!Doctype HTML>
<html>
<head>

    <title>
        Student Management System
    </title>
<body>

<h1 align="center">Insert student Details</h1>

<form action="Addstudent.php" method="post" enctype="multipart/form-data">
    <table align="center" border="1" width="50%">

        <tr>

            <td colspan="2" style="background-color: dodgerblue" align="center"><b>Student Information</b></td>
        </tr>

        <tr>

            <td >Enter Roll# </td><td ><input type="text" name="rollnum" placeholder="Plese enter your roll# here" required></td>
        </tr>
        <tr>

            <td >Enter Name </td><td ><input type="text" name="name" placeholder="Plese enter your name here" required></td>




        </tr>
        <tr>

            <td >Enter City </td><td ><input type="text" name="city" placeholder="Plese enter your city here" required></td>
        </tr>
        <tr>

            <td >Enter Parent Contact number </td><td ><input type="text" name="number" placeholder="Plese enter your contact here" required></td>
        </tr>
        <tr>

            <td >Enter Standard </td><td ><input type="number" name="standard" placeholder="Plese enter your standard here" required></td>
        </tr>
        <tr>

            <td >Upload Image </td><td ><input type="file" name="img"  required></td>
        </tr>
        <tr>

            <td colspan="2"><input type="submit" name="submit" > </td>
        </tr>
        <tr>

            <td><a href="Admindash.php">Admin Dashboard</a></td>
        </tr>
        <tr>

            <td><a href="Logout.php">Logout</a></td>
        </tr>
    </table>
</form>
</body>

</head>
</html>
<?php



if (isset($_POST['submit'])){


    $rollnum=$_POST['rollnum'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pnum=$_POST['number'];
    $standard=$_POST['standard'];
    $imagename=$_FILES['img'] ['name']  ;
    $tempimagename=$_FILES['img'] ['tmp_name']  ;
    include ('../dbcong.php');
    move_uploaded_file($tempimagename,"../images/$imagename");

    $query="INSERT INTO `student`(`id`, `rollno`, `name`, `city`, `pcont`, `standard`, `image`) VALUES (NULL ,'$rollnum','$name','$city','$pnum','$standard','$imagename')";



    $run=mysqli_query($conn,$query)  ;
if ($run==true){


    ?>
    <script>
        alert("Data Insert Successfully");
    </script>

<?php
}

}








?>