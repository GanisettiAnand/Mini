<?php

include 'header/db.php';

$user_id = isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header/header_us.php'; ?>

<!-- About section starts  -->

<section class="about">

   <div class="row">
      <div class="content">
         <h3>Why We Are Here?</h3>
         <p>We are here to assist you. Many students who are unable to afford high college fees and aspire to crack IIT or JEE examinations can benefit from our website. We provide essential resources such as books, video lectures, and documentaries on various topics.</p>  
      </div>
   </div>

   <div class="box-container">
      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1k</h3>
            <span>Brilliant students</span>
         </div>
      </div>
      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+20</h3>
            <span>Expert tutors</span>
         </div>
      </div>
      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>Seat placement</span>
         </div>
      </div>
   </div>

</section>

<!-- About section ends -->

<!-- Reviews section starts  -->

<section class="reviews">

   <h1 class="heading">Student Reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>Choosing Learn was one of the best decisions I made in college. My mentor was not only knowledgeable and experienced but also kind and supportive.</p>
         <div class="user">
            <div>
               <h3>Naveen</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>It has been an incredible experience for me. I was matched with a mentor who guided me through my academic journey and provided invaluable advice and support.</p>
         <div class="user">
            <div>
               <h3>Vishnu</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>My mentor helped me navigate the challenges of college life and provided me with the tools and resources needed to succeed.</p>
         <div class="user">
            <div>
               <h3>Samson</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>
   </div>

</section>

<!-- Reviews section ends -->

<script src="js/script.js"></script>
   
</body>
</html>
