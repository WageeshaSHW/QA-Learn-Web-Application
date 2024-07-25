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
    <link rel="stylesheet" href="css/livechat.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php include 'components/user_header.php'; ?>
<body style=" background-image: url('images/home.jpg');
  background-repeat: no-repeat;
  background-size: cover;  background-color: rgba(0, 0, 0, 0.4);
  background-blend-mode: overlay;">
    <section >    
        <div class="chat-container">
        
        <div class="chat-header">
            <h2>Live-chat Pool</h2>
        </div>
      <div class="chat-messages" id="chat-messages">
        <div id="chat-pool">
            <?php
            require_once 'fetch_messages.php';
            ?>
        </div>
        <script>
        function fetchAndDisplayMessages() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "fetch_messages.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var messages = JSON.parse(xhr.responseText);
                    var chatPool = document.getElementById('chat-pool');
                    chatPool.innerHTML = ''; 

                    for (var i = 0; i < messages.length; i++) {
                        var message = messages[i];
                        var messageDiv = document.createElement('div');
                        messageDiv.className = 'message';
                        messageDiv.innerHTML = '<div class="name">' + message.sender_name + ':</div>' +
                                            '<div class="content">' + message.message + '</div>';
                        chatPool.appendChild(messageDiv);
                    }
                }
            };
            xhr.send();
        }

        setInterval(fetchAndDisplayMessages, 0.1);needed
    </script>

    </div>
        
        <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);}
         ?>


        <form method="post" action="">
                    <input type="hidden" id="userName" name="userName" value="<?= $fetch_profile["name"] ?? ''; ?>">

            <div class="chat-input">
                <input type="text" id="message" name="message" placeholder="Type your message..." />
                <button type="submit" name="send">Send</button>
            </div>
        </form>

       <?php
        if (isset($_POST['send'])) {
            $name = $_POST['userName'] ?? '';
            $message = $_POST['message'] ?? '';
         
            if (!empty($message)) {

                $select_message = $conn->prepare("SELECT * FROM `messages` WHERE sender_name = ? AND message = ?");
                $select_message->execute([$name, $message]);

                if ($select_message->rowCount() > 0) {
                    echo 'already sent message!';
                } else {

                    $insert_message = $conn->prepare("INSERT INTO `messages`
                    (`sender_name`, `message`) VALUES(?,?)");
                    $insert_message->execute([$name, $message]);

                }
            } else {
                echo "Message is empty";
            }
        }
        ?>
        <?php
            require_once 'fetch_messages.php';
        ?>

    </section>
    <div class="swiper-pagination"></div>
    <!-- <?php include 'components/footer.php'; ?> -->
  <script src="js/script.js"></script>
</body>
</html>
