<?php
if (isset($_POST['action']) && ($_POST['action'] == 'process')) {

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
    $recaptcha_secret = '6LesxdcZAAAAAL7xZoOM2vMTC9M7FFLowyW4i_8G'; 
    $recaptcha_response = $_POST['recaptcha_response']; 
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
    $recaptcha = json_decode($recaptcha); 
    
    if($recaptcha->score >= 0.7){
      echo "se proceso";
    } else {
        echo "no se proceso";
    }
    }
?>