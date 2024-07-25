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
    <title>Exams</title>
    <link rel="stylesheet" type="text/css" href="./css/chatbot.css" />

      <link rel="stylesheet" href="css/style.css">
 
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

 
    <link rel="stylesheet" href="./css/exams.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .correct {
            color: green;
        }
        .incorrect {
            color: red;
        }
        .table-container {
            max-width: 70%;
            margin: 0 auto;
            padding: 20px;
        }
       .answer-label {
            display: flex;
            align-items: center;
            gap: 10px; /* Adjust the spacing as needed */
        }
        .mcq-container {
            max-height: 70vh;
            overflow: auto;
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
                font-size: 13px;
        }
        .button {
        background-color: #4CAF50; /* Green */
        border: none;
        border-radius: 6px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        }
        .button2:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
    </style>

</head>
<body style="background-color: rgba(0, 1, 0, 0.1);">
    <?php include 'components/user_header.php'; ?>
    <div class="table-container">
        <h3 class="table-title">QA MCQ EXAMS</h3>
        
        <div class="mcq-container">
       <?php
        $questions = array(
                        array(
                            'question'=> 'What is the primary goal of Software Quality Assurance (SQA)?',
                            'answers'=>array('Developing software quickly', 'Ensuring the software meets quality standards', 'Maximizing software features', 'Reducing development costs'),
                            'correctAnswer'=> 'Ensuring the software meets quality standards'
                            ),

                            array(
                            'question'=> 'What is the main objective of software testing?',
                            'answers'=>array('Developing new software features', 'Ensuring 100% bug-free software', 'Finding defects and ensuring quality', 'Speeding up the development process'),
                            'correctAnswer'=> 'Finding defects and ensuring quality'
                            ),

                            array(
                            'question'=> 'Which of the following is NOT a role of a QA tester?',
                            'answers'=>array('Writing code', 'Creating test cases', 'Executing test cases', 'Reviewing requirements'),
                            'correctAnswer'=> 'Writing code'
                            ),

                            array(
                            'question'=> 'What phase of the software development life cycle comes after testing?',
                            'answers'=>array('Design', 'Deployment', 'Analysis', 'Coding'),
                            'correctAnswer'=> 'Deployment'
                            ),

                            array(
                            'question'=> 'Which SDLC model is known for its sequential and linear approach?',
                            'answers'=>array('Agile', 'Waterfall', 'V-model', 'DevOps'),
                            'correctAnswer'=> 'Waterfall'
                            ),

                            array(
                            'question'=> 'Which type of testing verifies whether the software meets the user"s needs?',
                            'answers'=>array('Unit testing', 'Integration testing', 'System testing', 'Acceptance testing'),
                            'correctAnswer'=> 'Acceptance testing'
                            ),

                            array(
                            'question'=> 'Which type of testing focuses on the performance, load, and scalability of the software?',
                            'answers'=>array('Functional testing', 'Regression testing', 'Performance testing', 'Usability testing'),
                            'correctAnswer'=> 'Performance testing'
                            ),

                            array(
                            'question'=> 'What is the primary goal of test automation?',
                            'answers'=>array('Eliminating the need for manual testing', 'Decreasing the need for test planning', 'Reducing the need for test case design', 'Increasing the number of defects found'),
                            'correctAnswer'=> 'Eliminating the need for manual testing'
                            ),

                            array(
                            'question'=> 'Which of the following is an example of a non-functional testing type?',
                            'answers'=>array('Unit testing', 'Compatibility testing', 'Functional testing', 'Acceptance testing'),
                            'correctAnswer'=> 'Compatibility testing'
                            ),

                            array(
                            'question'=> 'What is the main purpose of regression testing?',
                            'answers'=>array('Testing new features', 'Ensuring compatibility', 'Validating performance', 'Preventing software regression'),
                            'correctAnswer'=> 'Preventing software regression'
                            ),

                            array(
                            'question'=> 'Which testing level typically involves testing the entire system as a whole?',
                            'answers'=>array('Unit testing', 'Integration testing', 'System testing', 'Acceptance testing'),
                            'correctAnswer'=> 'System testing'
                            ),

                            array(
                            'question'=> 'Which SDLC model emphasizes adaptability, collaboration, and frequent iterations?',
                            'answers'=>array('Waterfall', 'Agile', 'V-model', 'DevOps'),
                            'correctAnswer'=> 'Agile'
                            ),

                            array(
                            'question'=> 'Which SDLC phase involves gathering and understanding user requirements?',
                            'answers'=>array('Design', 'Coding', 'Analysis', 'Deployment'),
                            'correctAnswer'=> 'Analysis'
                            ),

                            array(
                            'question'=> 'Which SDLC model is characterized by a series of V-shaped phases corresponding to testing and development activities?',
                            'answers'=>array('Agile', 'Waterfall', 'V-model', 'DevOps'),
                            'correctAnswer'=> 'V-model'
                            ),

                            array(
                            'question'=> 'What is the primary focus of the DevOps SDLC model?',
                            'answers'=>array('Sequential development', 'Continuous integration and delivery', 'Detailed documentation', 'Rigorous testing'),
                            'correctAnswer'=> 'Continuous integration and delivery'
                            ),
                    );


                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $user_answers = array();
                    $score = 0;

                    foreach ($questions as $index => $question) {
                        $user_answer = isset($_POST['answer'][$index]) ? $_POST['answer'][$index] : null;
                        $user_answers[] = $user_answer;

                        if ($user_answer === $question['correctAnswer']) {
                            $score++;
                        }
                    }

                    foreach ($questions as $index => $question) {
                        echo '<p>';
                        echo '<b>' . $question['question'] . '</b><br>';

                        foreach ($question['answers'] as $answer) {
                            echo '<label class="answer-label"><input type="radio" name="answer[' . $index . ']" value="' . $answer . '"';
                            if ($user_answers[$index] === $answer) echo ' checked';
                            echo ' class="answer-radio" disabled>' . $answer . '</label><br>';
                        }

                        if ($user_answers[$index] === $question['correctAnswer']) {
                            echo '<span class="correct">Your Answer is Correct!</span>';
                        } else {
                            echo '<span class="incorrect">Incorrect! The correct answer is ' . $question['correctAnswer'] . '</span>';
                        }

                        echo '</p>';
                    }

                    echo '<p>Total Score: ' . $score . ' out of ' . count($questions) . '</p>';
                    } else {
                        echo '<form id="countdown-form" action="" method="post">';
                        echo '<div >';
                        echo '<p>Time left: <span id="timer">30 seconds</span> </p>';

                        foreach ($questions as $index => $question) {
                            echo '<p>';
                            echo '<b>' . $question['question'] . '</b><br>';

                            foreach ($question['answers'] as $answer) {
                                echo '<label class="answer-label"><input type="radio" name="answer[' . $index . ']" value="' . $answer . '" class="answer-radio">' . $answer . '</label><br>';
                            }

                            echo '</p>';
                        }

                        echo '<input type="submit" class="button button2"  id="submit-button" value="Submit">';
                        echo '</div>';
                        echo '</form>';
                   
                    }
        ?>
<script>
function startTimer(duration, display) {
    var timer = duration;
    var countdownInterval = setInterval(function () {
        display.textContent = timer + ' seconds';
        timer--;

        if (timer < 0) {
            clearInterval(countdownInterval);
            document.getElementById('submit-button').click(); 
        }
    }, 1000);
}

document.addEventListener('DOMContentLoaded', function () {
    var countdown = 30; 
    var display = document.querySelector('#timer');
    startTimer(countdown, display);
});
</script>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <!-- <?php include 'components/footer.php'; ?> -->
    <script src="js/script.js"></script>
</body>
</html>
