<?php
$name=$email=$message="";

$nameErr=$emailErr=$messageErr="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    //VALIDATE NAMES
    if(empty($_POST["name"])){
        $nameErr="name is required";
    }
    else{
        $name=test_input($_POST["name"]);
        // check

        if(!preg_match("/^[a-zA-Z]*$/",$name)){
            $nameErr=only letters and
        }
    }
}








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <style>
    /* Style the form */
    form {
      margin: 20px auto; /* Add some margin and center the form */
      width: 300px; /* Set a width for the form */
      padding: 20px; /* Add some padding for better spacing */
      border: 1px solid #ccc; /* Add a thin border */
      border-radius: 5px; /* Add rounded corners */
    }

    /* Style the labels */
    label {
      display: block; /* Make labels appear on separate lines */
      margin-bottom: 5px; /* Add some space below labels */
    }

    /* Style the input fields */
    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%; /* Make input fields full width */
      padding: 10px; /* Add padding for better user experience */
      border: 1px solid #ccc; /* Add a thin border */
      border-radius: 3px; /* Add rounded corners */
    }

    /* Style the submit button */
    input[type="submit"] {
      background-color: #4CAF50; /* Green color for the button */
      color: white; /* White text for the button */
      padding: 10px 20px; /* Add some padding for the button */
      border: none; /* Remove border from the button */
      border-radius: 5px; /* Add rounded corners */
      cursor: pointer; /* Change cursor to indicate clickability */
    }
  </style>
</head>
<body>
    <h2>Form validation </h2>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="name">Name:</label><br><br>
    <input type="text" id="name" name="name">
    <span>*<?php $nameErr;?></span>
    <br><br>
    <label for="email">Email:</label><br><br>
    <input type="email" id="email" name="email">
    <span>*<?php $emailErr;?></span>
    <br><br>
    <label for="comments">Message:</label><br><br>
    <textarea type="text" id="comments" name="message"></textarea>
    <span>*<?php $commentErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

</body>
</html>
