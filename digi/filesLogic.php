<?php
$conn = mysqli_connect('localhost', 'root', '', 'filemanagement');
$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
if (isset($_POST['save'])) {

    $filename = $_FILES['myfile']['name'];
    $destination = 'admin/uploads/' . $filename;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $name=$_POST['s1'];
    $mail=$_POST['m1'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } 
    else {
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (fname, size, downloads,name, email) VALUES ('$filename', $size, 0,'$name','$mail')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}