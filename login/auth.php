<?php 

$username = $_POST['username'];
$password = $_POST['password'];

//database connection
$conn = mysqli_connect('localhost','rimoxlpx_music','9wq-GhdhNi.)', 'rimoxlpx_music');
$sql = "SELECT * FROM users WHERE username = '$username'";

$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));

$row = mysqli_fetch_array($result, MYSQLI_ASSOC) or die( mysqli_error($conn));

if($row["username"] == $username && $row["password"] == $password){
    echo 'Login success!! Welcome '.$row["first_name"].' '.$row["last_name"];
    

} else{
    echo "You've entered wrong password";
}





?>