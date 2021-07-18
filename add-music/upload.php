<?php 

if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $artistName = $_POST['artist'];


    $conn = mysqli_connect('localhost','admin','admin', 'music');
    $sql = "INSERT INTO `songs` (`songsid`, `artistName`, `fileName`) VALUES (NULL, '$artistName', '$fileName')";

    $allowed = array('mp3');

    if( in_array( $fileActualExt, $allowed)) {
        if($fileError === 0){
            if( $fileSize > 10000) {
    
                $fileNameNew = uniqid('', true).".".$fileActualExt;

                $fileDestination = "../lib/songs/".$fileNameNew;
                $sql = "INSERT INTO `songs` (`songsid`, `artistName`, `fileName`) VALUES (NULL, '$artistName', '$fileNameNew')";
                move_uploaded_file( $fileTmpName, $fileDestination);
                $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
                header("location: ../?uploadsuccess");
            } 
            else{
                echo "Your file is too big! please upload a file is less than 10mb!";
            }
        } 
        else{
            echo "There was an error uploading your file!";
        }
    
    }
    
}
?>