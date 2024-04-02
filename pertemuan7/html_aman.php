<?php


$email = $_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)){

  echo "<p>Email Anda valid: $email</p>";
  
} else {
 
  echo "<p>Email Anda tidak valid!</p>";
  
}

?>