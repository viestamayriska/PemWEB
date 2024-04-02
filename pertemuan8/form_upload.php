<!DOCTYPE html>
<html>
    <head>
        <title> File Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
</form>
</body>
</html>

<?php
if(isset($_POST["submit"])) {
    $targetDirectory = "documents/"; //direktori tujuan untuk menyimpan dokumen
    $targetFile = $targetDirectory . basename ($_FILES["documentToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 10 * 1024 * 1024;

    if(in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        if(move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "Document berhasil diunggah.";
        } else {
            echo "Gagal mengunngah file.";
        }

    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diiizinkan.";
    }
}


