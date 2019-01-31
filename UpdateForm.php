<?php
include ('SessionStart.php');





    include ('../dbcong.php');



$sid=$_GET['sid'];

    $query="SELECT * FROM `student` WHERE `id`='$sid'";
    $run=mysqli_query($conn,$query)  ;

$data=mysqli_fetch_assoc($run);

?>


    <!Doctype HTML>
    <html>
    <head>

        <title>
            Student Management System
        </title>
    <body>

    <h1 align="center">Update student Details</h1>

    <form action="updatedata.php" method="post" enctype="multipart/form-data">
        <table align="center" border="1" width="50%">

            <tr>

                <td colspan="2" style="background-color: dodgerblue" align="center"><b>Student Information</b></td>
            </tr>

            <tr>

                <td >Enter Roll# </td><td ><input type="text" name="rollnum" value="<?php echo $data['rollno']; ?>"  ></td>
            </tr>
            <tr>

                <td >Enter Name </td><td ><input type="text" name="name" value="<?php echo $data['name'];?>" ></td>




            </tr>
            <tr>

                <td >Enter City </td><td ><input type="text" name="city" value="<?php echo $data['city'];?>" ></td>
            </tr>
            <tr>

                <td >Enter Parent Contact number </td><td ><input type="text" name="number" value="<?php echo $data['pcont'];?>" ></td>
            </tr>
            <tr>

                <td >Enter Standard </td><td ><input type="number" name="standard" value="<?php echo $data['standard'];?>" ></td>
            </tr>
            <tr>

                <td >Upload Image </td><td ><input type="file" name="img"  ></td> <td><img src="images/<php echo $data['image'];?>"  style="max-width: 100px"></td>
            </tr>




            <tr>
                <input type="hidden" name="Id" value="<?php echo $data['id'];?>">
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
