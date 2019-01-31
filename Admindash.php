<?php
include ('SessionStart.php');
include_once ('header.php');
?>

<div class="Admintitle" style="text-align: center">
    <h1>Welcome <?php echo $_SESSION['uname'];?> to  Admin Dashboard</h1>

</div>

<div class="dashboard">

    <table border="1" width="50%" align="center">

        <tr>

            <td>1.</td><td><a href="Addstudent.php">Insert Student Details</a></td>
        </tr>
        <tr>

            <td>2.</td><td><a href="Updatestudent.php">Update Student Details</a></td>
        </tr>
        <tr>

            <td>3.</td><td><a href="Deletestudent.php">Delete Student Details</a></td>
        </tr>

        <tr>

            <td><a href="Logout.php">Logout</a></td>
        </tr>
    </table>

</div>


</body>

</head>
</html>
