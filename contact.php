<?php

include 'header/db.php';

$user_id = isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : '';

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_EMAIL);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_contact = $conn->prepare("SELECT * FROM `contact` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_contact->execute([$name, $email, $number, $msg]);

   if ($select_contact->rowCount() > 0) {
      $message[] = 'Message has already been sent!';
   } else {
      $insert_message = $conn->prepare("INSERT INTO `contact`(name, email, number, message) VALUES(?,?,?,?)");
      $insert_message->execute([$name, $email, $number, $msg]);
      $message[] = 'Message sent successfully!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <?php include 'header/header_us.php'; ?>

   <!-- contact section starts -->
   <section class="contact">
      <div class="row">
         <div class="image">
            <img src="images/contact.jpg!d" alt="">
         </div>

         <form action="" method="post">
            <h3>Get in touch</h3>
            <input type="text" placeholder="Enter your name" required maxlength="100" name="name" class="box">
            <input type="email" placeholder="Enter your email" required maxlength="100" name="email" class="box">
            <input type="number" min="0" max="9999999999" placeholder="Enter your number" required maxlength="10" name="number" class="box">
            <textarea name="msg" class="box" placeholder="Enter your message" required cols="30" rows="10" maxlength="1000"></textarea>
            <input type="submit" value="Send message" class="inline-btn" name="submit">
         </form>
      </div>

      <div class="box-container">
         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Phone number</h3>
            <a href="tel:8317687363">8317687363</a>
         </div>

         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>Email address</h3>
            <a href="mailto:shaikhanas@gmail.com">ganisettianand1@gmail.com</a>
         </div>
      </div>
   </section>
   <!-- contact section ends -->

   <script src="js/script.js"></script>
</body>
</html>
