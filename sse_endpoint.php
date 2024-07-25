<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');

while (true) {

    $messages = fetchMessagesFromDatabase(); 

    if (!empty($messages)) {
       
        foreach ($messages as $message) {
            echo "data: " . json_encode($message) . "\n\n";
            ob_flush();
            flush();
        }
    }

    // Wait before checking for new messages
    sleep(1);
}
?>
