<?php

  //define variables and set to empty values
  $nameError = $phoneError = $emailError = "";
  $name = $phone = $email = $description = $success = "";

  //form is submitted with POST method
  if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (empty ($_POST["description"])){
      $description = "";
    }
    else {
    	$description = testInput($_POST["description"]);
    }


    if (empty ($_POST["name"])){
      $nameError = "*Please enter your name";
    }
    else {
      $name = testInput($_POST["name"]);
      //check if name only contains letters and whitespace
      if (ctype_alpha(str_replace(' ', '', $name)) === false){
        $nameError = "*Please enter a valid name using only letters and whitespace";
      }
    }


    if (empty ($_POST["phone"])){
      $phoneError = "*Please enter your phone number";
    }
    else {
      $phone = testInput($_POST["phone"]);
      //check if phone number is well formed
      if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)){
        $phoneError = "*Please enter a valid phone number with dashes";
      }
    }


    if (empty ($_POST["email"])){
      $emailError = "*Please enter your email";
    }
    else {
      $email = testInput($_POST["email"]);
      //check if email address is well formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailError = "*Please enter a valid email";
      }
    }


    if ($nameError == "" and $phoneError == "" and $emailError == ""){
      $messageBody = "";
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
        $messageBody .= "$key: $value\n";
      }

      $to = "seasonalimprovement@gmail.com";
      $subject = "Contact form submit";

      if (mail($to, $subject, $messageBody)){
        $success = "Thank you for conatcting me!";
        $name = $phone = $email = $descrption = "";
      }
    }

  }

  function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
