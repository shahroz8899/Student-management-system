

<!Doctype HTML>
<html>
<head>

    <title>
Student Management System
    </title>
    <body style="background-color:dodgerblue " >
<h3 align="right" style="margin-right: 20px"><a href="login.php">Admin Login</a></h3>
<h1 align="center">Welcome to Student Management System</h1>

<form action="index.php" method="post" enctype="multipart/form-data">
<table align="center" border="1" width="50%" style="background-color: aliceblue">
    <tr>

        <td colspan="2" style="background-color: dodgerblue" align="center"><b>Student Information</b></td>
    </tr>

<tr>
        <td >Standart/Class </td>
    <td ><input type="number" name="standard" required> </td>
       <!-- <td>
            <select name="std" required>
                <option value="">Select</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>



            </select>

        </td>-->
    </tr>
    <tr>

        <td >Enter Rollno </td><td ><input type="text" name="rollno" placeholder="Plese enter your roll# here" required></td>
    </tr>
    <tr>

        <td colspan="2"><input type="submit" name="submit" > </td>
    </tr>
</table>

</form>





 <!--   -->

    <?php



    if (isset($_POST['submit'])){

        include ('dbcong.php');

        $standard=$_POST['standard'];
        $rollnumber=$_POST['rollno'];

        $query="SELECT * FROM `student` WHERE `standard`='$standard' AND `rollno`= '$rollnumber'";

        $run=mysqli_query($conn,$query)  ;

        if (mysqli_num_rows($run)<1){

            ?>

            <script>
                alert('No Recode Found');
            </script>
    <?php


        }
        else
        {


            while ($data=mysqli_fetch_assoc($run))
            {

                ?>
<table border="1" align="center" width="80%" style="margin-top: 20px; background-color: beige " >


   <tr>

       <th align="centre" colspan="3">
           Student Details
       </th>
   </tr>

<tr>
    
    <td rowspan="5">
        <img src="images/<?php echo $data['image'];?>" style="max-width: 150px; max-height:150px;  " >

    <th>Roll Number</th>
    <td><?php echo $data['rollno']; ?></td>
    </td>

</tr>



    <tr>
        <th>Name</th>
        <td><?php echo $data['name']; ?></td>
    </tr>
    <tr>
        <th>City</th>
        <td><?php echo $data['city']; ?></td>
    </tr>

    <tr>
        <th>Contact</th>
        <td><?php echo $data['pcont']; ?></td>
    </tr>
    <tr>
        <th>Standard</th>
        <td><?php echo $data['standard']; ?></td>
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
<?php










    ?>


