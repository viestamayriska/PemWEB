<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <br>

        <input type="submit" value="submit">
</form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();

    if (empty($nama)){
        $errors[] = "Nama harus disi.";

    }

    if (empty($email)){
        $errors[] = "Email harus disi.";
    } elseif filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors[] = "Format email tidak valid.";
    }

    if empty($errors)){
        (!foreach ($errors as $error){
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
}
?>