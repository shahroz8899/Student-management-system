<?php

session_start();

if (isset($_SESSION['uid'])){

    header('location:Admin/Admindash.php');

}

?>

<!Doctype HTML>
<html>
<head>

    <title>
       Admin Login
    </title>
<body>

<h1 align="center">Welcome to Login Page</h1>

<form action="login.php" method="post">
    <table align="center" border="1" width="50%">

        <tr>

            <td >Username</td><td><input type="text" placeholder="Enter your Username" name="uname" required ></td>
        </tr>
        <tr>

            <td  >Password</td><td><input type="password" placeholder="Enter your password" name="password" required></td>
        </tr>


        <tr>

            <td colspan="2"><input type="submit" name="submit" value="Login"> </td>
        </tr>
    </table>
</form>
</body>

</head>
</html>
<?php
include ('dbcong.php');
if (isset($_POST['submit'])) {

    $Username = $_POST['uname'];
    $Password = $_POST['password'];

    $query = "SELECT * FROM `admin` WHERE  `username`='$Username' AND `password`='$Password'";
    $run = mysqli_query($conn, $query);
    $row = mysqli_num_rows($run);


if ($row<1){

    ?>
    <script>
        alert("Details not Match");
        window.open('login.php','_self');
    </script>

<?php
}
else{

    $data=mysqli_fetch_assoc($run);
    $id=$data['id'];
    $username=$data['username'];

    $_SESSION['uid'] = $id;
    $_SESSION['uname'] = $username;

    header('location:Admin/Admindash.php');


}
}

?>