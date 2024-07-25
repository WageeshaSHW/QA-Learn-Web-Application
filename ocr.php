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
   <title>ocr</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


   <link rel="stylesheet" href="css/style.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style=" background-color: rgba(0, 0, 0, 0.05);
">
<?php include 'components/user_header.php'; ?>
<section>
    <div class="container mt-5" style="margin-bottom:10%">
            <div class="row mt-5">
                <div class="col-sm-8 mx-auto">
                    <div class="jumbotron">
                        <h1 class="display-4">Read Text from Images</h1>
                        <hr class="my-4">
                    </div>
                </div>
            </div>
            <div class="row col-sm-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-body" style="font-size:18px">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="filechoose">Choose File</label>
                                <input type="file" name="image" class="form-control-file" id="filechoose">
                                <button class="btn btn-success mt-3" type="submit" style="font-size:18px"  name="submit">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <?php
if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $target_folder = "OCR/images/";
    $ocr_output_file_base = "OCR/out"; 
    
    move_uploaded_file($file_tmp, $target_folder . $file_name);
    
    echo '<div class="row col-sm-8 mx-auto mt-5">';
    echo '<img src="'.$target_folder.$file_name.'" style="width:100%" alt="Uploaded Image">';
    echo '</div>';

    echo '<div class="row col-sm-8 mx-auto mt-5">';
    echo '<div class="card">';
    echo '<div class="card-header">';
    echo 'OCR Results';
    echo '</div>';
    echo '<div class="card-body">';
    
 
    shell_exec('"D:\\Softwares\\Tesseract-OCR\\tesseract" "'.$target_folder.$file_name.'" "'.$ocr_output_file_base.'"');
    
  
    $ocr_output_file = $ocr_output_file_base . ".txt";

    echo '<h3>OCR after reading</h3><br><pre style="font-size: 18px;">'; 

    $myfile = fopen($ocr_output_file, "r") or die("Unable to open file!");
    echo fread($myfile, filesize($ocr_output_file));
    fclose($myfile);

    echo '</pre>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    $encodedOCRResult = urlencode(file_get_contents($ocr_output_file));

    echo '<div class="row col-sm-8 mx-auto mt-5" style="font-size:22px;  margin: 1% 0 3% 0;" >';
    echo '<a class="btn btn-primary" style="font-size:18px; "  href="qaBot.php?message='.$encodedOCRResult.'">Go to QA-Bot</a>';
    echo '</div>';
}
?>


        </div>
</section>
<div class="swiper-pagination"></div>
<?php include 'components/footer.php'; ?>
  <script src="js/script.js"></script>
</body>
</html>