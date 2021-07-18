<?php 

    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    //database connection

    $conn = mysqli_connect('localhost','rimoxlpx_music','9wq-GhdhNi.)', 'rimoxlpx_music');
    $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `username`, `password`) VALUES ('$fname', '$lname', '$email', '$username', '$password')";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);



    echo "Your name: ". $_POST['first_name']. $_POST['last_name'];
    echo "</br>Your Email: ". $_POST['email']; 
    echo "</br>Your username: ". $_POST['username'];
    echo "</br>Your password: ". $_POST['password'];
    echo "</br>Your birthdate: ". $_POST['birth-date'];
    echo "<br><a href='../../../login'>Login</a>";



?>