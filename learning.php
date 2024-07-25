<?php

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    

    $pdfFiles = [
        '1' => '1.pdf',  
        '2' => '2.pdf',  
        '3' => '3.pdf',  
        '4' => '4.pdf',  
        '5' => '5.pdf', 
        '6' => '6.pdf',  
        '7' => '7.pdf', 
        '8' => '8.pdf', 
        '9' => '9.pdf',  
        '10' => '10.pdf', 


    ];

    if (array_key_exists($id, $pdfFiles)) {
      
        $pdfFilename = $pdfFiles[$id];
        
       
        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=$pdfFilename");
        

        readfile("qaDocs/$pdfFilename");
    } else {
        echo "PDF not found for the provided ID.";
    }
} else {
    echo "Invalid ID.";
}
?>
