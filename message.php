<?php
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    if(!empty($email)&& !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $receiver="rajibsadhak8@gmail.com";
            $subject="From:$name<$email>";
            $body="Name: $name \nEmail: $email\nPhone Number: $phone\n\nMessage: $email\n\nRegards,\n $name";
            $sender="From: $email";
            if(mail($receiver,$subject,$body,$sender)){
                echo "Your message has been send ";
            }
            else{
                echo "Sorry, failed to send your message!";
            }
        }
        else{
            echo "Invalid Email Address!";
        }
    }
    else{
        echo "Email and Messsage Feild is Required !";
    }
?>