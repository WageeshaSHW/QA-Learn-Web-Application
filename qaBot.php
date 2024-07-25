<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
    header('location:user_login.php');
};

?>


<!DOCTYPE html>
<html lang="en">
    <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>QA-Bot</title>
    <link rel="stylesheet" type="text/css" href="./css/chatbot.css" />
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


   <link rel="stylesheet" href="css/style.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<?php include 'components/user_header.php'; ?>
<body style=" background-image: url('images/home.jpg');
  background-repeat: no-repeat;
  background-size: cover;  background-color: rgba(0, 0, 0, 0.4);
  background-blend-mode: overlay;">
    <section>    
        <div class="chat-container">
        
        <div class="chat-header">
            <h2>QA-Bot</h2>
        </div>
        <div class="chat-messages" id="chat-messages"></div>
        <div class="chat-input">
            <?php
        
            $message = urldecode($_GET['message'] ?? '');
            ?>
            <input type="text" id="user-input" placeholder="Type your message..." value="<?php echo htmlspecialchars($message); ?>" />
            <button onclick="sendMessage()">Send</button>
        </div>
        </div>

        <script src="js/chatbot.js"></script>
    </section>
    <div class="swiper-pagination"></div>
    <!-- <?php include 'components/footer.php'; ?> -->
  <script src="js/script.js"></script>
</body>
</html>
