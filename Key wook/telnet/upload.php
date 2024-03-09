<?php
// Check if file has been uploaded
if (isset($_FILES['file'])) {
    $uploadDirectory = 'uploads/';
    $uploadedFile = $uploadDirectory . basename($_FILES['file']['name']);
    $uploaderName = isset($_POST['uploader_name']) ? $_POST['uploader_name'] : '';

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadedFile)) {
        // File uploaded successfully
        $filename = basename($_FILES['file']['name']);
        $dateUploaded = date("Y-m-d H:i:s");
        // Insert file info into database (you need to create your MySQL connection here)
        $conn = new mysqli("localhost", "username", "password", "database");
        $sql = "INSERT INTO files (filename, uploader_name, date_uploaded) VALUES ('$filename', '$uploaderName', '$dateUploaded')";
        $conn->query($sql);
        $conn->close();
        header("Location: index.php");
    } else {
        echo 'Failed to upload file.';
    }
}
?>