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
   <title>Results</title>
    <link rel="stylesheet" type="text/css" href="./css/chatbot.css" />
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
    .correct { color: green; }
    .incorrect { color: red; }
</style>
<body>
<?php include 'components/user_header.php'; ?>
<h1>Quiz Results</h1>
    <?php

    $correctAnswers = array(
        "q1" => "Paris",
        // Add more correct answers here
    );
  
    $userAnswers = $_POST;
    $totalCorrect = 0;
    
    foreach ($userAnswers as $question => $answer) {
        echo "<p>";
        echo "Question: " . htmlspecialchars($question) . "<br>";
        echo "Your Answer: " . htmlspecialchars($answer) . "<br>";
        echo "Correct Answer: " . htmlspecialchars($correctAnswers[$question]) . "<br>";
        
        if ($answer === $correctAnswers[$question]) {
            echo '<span class="correct">Correct</span>';
            $totalCorrect++;
        } else {
            echo '<span class="incorrect">Incorrect</span>';
        }
        echo "</p>";
    }
    
    echo "<p>Total Correct Answers: $totalCorrect</p>";
    ?>


<div class="swiper-pagination"></div>
<?php include 'components/footer.php'; ?>
</body>

   
</html>
