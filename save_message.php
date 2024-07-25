<?php
include 'components/connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['user_id'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($message)) {

        $select_message = $conn->prepare("SELECT * FROM `messages` WHERE sender_name = ? AND message = ?");
        $select_message->execute([$name,$message]);

        if($select_message->rowCount() > 0){
            $message[] = 'already sent message!';
        }else{

            $insert_message = $conn->prepare("INSERT INTO `messages`(sender_name, message) VALUES(?,?,?,?,?)");
            $insert_message->execute([$name,  $message]);

            $message[] = 'sent message successfully!';

        }
    } else {
        echo "Message is empty";
    }
}
?>
