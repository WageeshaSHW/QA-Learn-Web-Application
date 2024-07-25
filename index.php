<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
  
};

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


   <link rel="stylesheet" href="css/style.css">

</head>
<body >
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider" style="height: 80vh;">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-1.png" alt="">
         </div>
         <div class="content">
            <span>Try now</span>
            <h3>AI Chat Bot For QA </h3>
            <a href="qaBot.php" class="btn">Chat now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-2.png" alt="">
         </div>
         <div class="content">
            <span>Try now</span>
            <h3>OCR Feature</h3>
            <a href="ocr.php" class="btn">Go now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-3.png" alt="">
         </div>
         <div class="content">
            <span>Try now</span>
            <h3>Live Chat Feature</h3>
            <a href="liveChat.php" class="btn">Live Chat now</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">QA Learn - Learning Materials</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="learning.php?id=1 " class="swiper-slide slide">
      <img src="images/icon-1.png" alt="">
      <h3>Introduction to Selenium </h3>
   </a>

   <a href="learning.php?id=2" class="swiper-slide slide">
      <img src="images/icon-2.png" alt="">
      <h3>ISTQB-CTFL</h3>
   </a>

   <a href="learning.php?id=3" class="swiper-slide slide">
      <img src="images/icon-3.png" alt="">
      <h3>Question Papers</h3>
   </a>

   <a href="learning.php?id=4" class="swiper-slide slide">
      <img src="images/icon-4.png" alt="">
      <h3>Selenium Testing</h3>
   </a>

   <a href="learning.php?id=5" class="swiper-slide slide">
      <img src="images/icon-5.png" alt="">
      <h3>Test Case</h3>
   </a>


   <a href="learning.php?id=6" class="swiper-slide slide">
      <img src="images/icon-6.png" alt="">
      <h3>Required Automation Softwares</h3>
   </a>


   <a href="learning.php?id=7" class="swiper-slide slide">
      <img src="images/icon-7.png" alt="">
      <h3>Software Quality Assurance - Questions with answers</h3>
   </a>


   <a href="learning.php?id=8" class="swiper-slide slide">
      <img src="images/icon-8.png" alt="">
      <h3>Test Automation Assignment</h3>
   </a>


   <a href="learning.php?id=9" class="swiper-slide slide">
      <img src="images/icon-9.png" alt="">
      <h3>Test Framework</h3>
   </a>


   <a href="learning.php?id=10" class="swiper-slide slide">
      <img src="images/icon-10.png" alt="">
      <h3>Tools and Resources</h3>
   </a>


   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>



<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>