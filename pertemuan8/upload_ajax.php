<?php
<if (isset($_FILES['file']['name'])){
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    @$file_ext = array("pdf", "doc", "docx", "txt");


    if (in_array($file_ext, $extensions) === false){
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }
    
    if($file_size > 2097152){
        $error[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }

    if (empty($erorrs) == true) {
        move_uploaded_file($file_tmp, "documemnt/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode(" ", $erorrs);
    }
}