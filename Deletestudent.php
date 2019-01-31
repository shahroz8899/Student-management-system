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

<h1 align="center">Delete student Details</h1>


<form action="Deletestudent.php" method="post" >
    <table align="center" border="1" width="50%">

        <tr>

            <td colspan="2" style="background-color: dodgerblue" align="center"><b>Select Student </b></td>
        </tr>


        <tr>

            <td >Enter Name </td><td ><input type="text" name="Name" placeholder="Please enter your name here" required></td>
        </tr>


        <tr>

            <td >Enter Standard </td><td ><input type="number" name="Standard" placeholder="Please enter your standard here" required></td>
        </tr>

        <tr>

            <td ><input type="submit" name="submit" > </td>
        </tr>
        <tr>

            <td><a href="Admindash.php">Admin Dashboard</a></td>
        </tr>
        <tr>

            <td><a href="Logout.php">Logout</a></td>
        </tr>

    </table>
</form>

<div>
    <h1  style="background-color: dodgerblue" align="center" >All Recode</h1>
    <?php

    function Show(){
        include ('../dbcong.php');


        $query="SELECT * FROM `student`";

        $run=mysqli_query($conn,$query);
        if ($run==TRUE){

            ?>


            <table border="1" align="center" width="80%">

                <tr style="background-color: dodgerblue ">
                    <td>Id</td>
                    <td>Roll Number</td>
                    <td>Name</td>
                    <td>City</td>
                    <td>Contact Number</td>
                    <td>Standart</td>
                    <td>Image</td>
                    <td>Delete</td>
                </tr>



                <?php

                while ($data=mysqli_fetch_assoc($run)){

                    ?>


                    <tr>



                        <td><?php echo $data['id'];?></td>
                        <td><?php echo $data['rollno'];?></td>
                        <td><?php echo $data['name'];?></td>
                        <td><?php echo $data['city'];?></td>
                        <td><?php echo $data['pcont'];?></td>
                        <td><?php echo $data['standard'];?></td>
                        <td><img src="images/<php echo $data['image'];?>"  style="max-width: 100px"></td>
                        <td><a href="Deleteform.php?sid=<?php echo $data['id'];?>">Delete</a></td>
                    </tr>
                    <?php
                }

                ?>


            </table>
            <?php

        }
        else
        {


            echo"connection faild";
        }



    }



    ?>

    <table>
        <?php
        show();
        ?>

    </table>

</div>








<?php



if (isset($_POST['submit'])){

include ('../dbcong.php');

$standard=$_POST['Standard'];
$name=$_POST['Name'];

$query="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";

$run=mysqli_query($conn,$query)  ;

if (mysqli_num_rows($run)<1){

    echo "<tr><td colspan='5'>No recode found</td></tr>";
}
else
{

$count=0;
while ($data=mysqli_fetch_assoc($run))
{
$count++;
?>
<table border="1" align="center" width="80%" style="margin-top: 20px">
    <tr    style="margin-top: 20px" >
        <h1 align="center" style="background-color: dodgerblue">Selective Data</h1>
    </tr>

    <tr style="background-color: dodgerblue ">

        <td>No#</td>
        <td>Roll Number</td>
        <td>Name</td>
        <td>City</td>
        <td>Contact Number</td>
        <td>Standard</td>
        <td>Image</td>
        <td>Delete</td>
    </tr>


    <tr>


        <td><?php echo "$count"; ?></td>
        <td><?php echo $data['rollno']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['city']; ?></td>
        <td><?php echo $data['pcont']; ?></td>
        <td><?php echo $data['standard']; ?></td>
        <td><img src="../images/<php echo $data['image'];?>" style="max-width: 100px"></td>
        <td><a href="Deleteform.php?sid=<?php echo $data['id'];?>">Delete</a></td>
    </tr>
    <?php
    }



    }

    }
    ?>

</table>





</body>

</head>
</html>
