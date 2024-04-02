<!DOCTYPE html>
<html>
    <head>
        <title> Multiupload Dokumen </title>
</head>
<body>
    <h2>Unggah Foto</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".jpg, .jepg, .png"/>
        <input type="submit" value="Unggah"/>

</form>
</body>
</html>

<?php

$targetDirectory ="documents/";

if(!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if($_FILES['files']['name'][0]){
    $totalFiles = count($_FILES['file']['name']);

    for($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

    if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $targetFile)) {
        echo "File $fileName berhasil diunggah.<br>";
    } else {
        echo "Gagal mengunggah file $fileName.<br>";
    }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}