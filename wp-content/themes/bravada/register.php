 <!-- Template Name: Register Page; -->

<html>
    <head>
        <style>
            *{
                margin: 0px; 
                padding: 0px;
            }
            form p{
                color: black;
                font-size: 1.2em;
                font-family: serif;
            }
        </style>
    </head>
    <body>
        <form action="" method="POST">
            <p>Name:</p>
            <input type="text" placeholder="Enter Your Name" name="name" required>
            <br>
            <p>Email ID:</p>
            <input type="email" placeholder="Enter Your Email Id" name="email" required>
            <br>
            <p>Password:</p>
            <input type="password" placeholder="Enter Your Password" name="password" required>
            <br>
            <p>Confirm Password:</p>
            <input type="password" placeholder="Enter Your Confirm Password" name="cpassword" required>
            <br>
            <p>Mobile No:</p>
            <input type="number" placeholder="Enter Your Password" name="number" required>
            <br>
            <input type="submit" value="Register_Now" name="submit">
        </form>
    </body>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "wordpress";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed:" . mysqli_connect_error());
}
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $number = $_POST['number'];

    echo $name;

    $sql_query = "INSERT INTO `userdata` (`name`, `email`, `password`, `cpassword`, `number`) 
    VALUES ('$name', '$email', '$password', '$cpassword', '$number');";

    if (mysqli_query($conn, $sql_query)) {
        echo '<script>
        alert("You Successfully Sign_Up in our Website");
        </script>';
    } else {
        echo '<script>
        alert("Wrong!!! You Not Sign_Up in our Website");
        </script>';

        echo "Error:" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>