<?php
include 'components/connect.php';

$select_messages = $conn->prepare("SELECT * FROM `messages`");
$select_messages->execute();

$messages = [];

if ($select_messages->rowCount() > 0) {
    while ($row = $select_messages->fetch(PDO::FETCH_ASSOC)) {
        $messages[] = [
            'sender_name' => htmlspecialchars($row['sender_name']),
            'message' => htmlspecialchars($row['message'])
        ];
    }
}

echo json_encode($messages);
?>
