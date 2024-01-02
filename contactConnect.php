<?php
  include("dbconnect.php");

  if (isset($_POST['submit'])) {

    $name    = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO `contact`(`name`, `email`, `phone`,`subject`, `message` )
    VALUES('$name', '$email', '$phone', '$subject', '$message')";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "<script>
        alert('Message send successful');
        window.location.replace('contact.php');
    </script>";
    exit();
} else {
    echo "<script>
        alert('Message sending fail');
        window.location.replace('contact.php');
    </script>";
    exit();
}

    
  }
?>