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
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.png" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>"QA Learn" stands as the solution to your SQA screening test preparation challenges. Our platform is uniquely designed to provide a holistic approach to learning, leveraging advanced technologies like optical character recognition (OCR) and AI-powered chatbots. These innovations bring an interactive dimension by allowing candidates to upload questions from images directly, making learning more engaging and accessible. Our AI chatbot acts as a virtual guide, curating a diverse array of study materials such as videos, articles, and website links, ensuring a personalized learning journey. With a user-friendly interface, hassle-free registration and profile management, we streamline the preparation process, enabling you to focus on learning and growth.
         </p>

         <h3>Our mission</h3>
         <p>At "QA Learn," our mission revolves around redefining how candidates prepare for SQA screening tests. We are committed to offering a free and user-friendly platform that empowers candidates to excel in their preparation journey. By seamlessly integrating cutting-edge technologies and personalized support, we aim to enhance learning experiences. Our mission includes bridging knowledge gaps, providing personalized mentorship, boosting candidates' confidence, and promoting equal access to high-quality preparation resources. We aspire to equip candidates from all walks of life with the tools they need to succeed, fostering a community of skilled and confident professionals prepared to thrive in the software quality assurance field.</p>
         <a href="liveChat.php" style="margin-bottom:10%" class="btn">Live Chat With Us</a>
      </div>

   </div>

</section>











<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>