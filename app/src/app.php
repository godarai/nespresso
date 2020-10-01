<?php
    //debug f-ja
    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $country = trim($_POST['country']);
        $message = trim($_POST['message']);

        if(!empty($name) && !empty($email) && !empty($country) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) { 
             $from = "$email";
             $to = "goduter@gmail.com";
             $subject = "New message";
             $autorius = 'From: ' . $name . ', ' . $email;
            $zinute = htmlspecialchars($message);
//                mail($to, $subject, $autorius, $zinute, $from);
//                echo"<script>alert('Thank you for your message. We will be in contact soon.');</script>";
            }
        }
        include ('db.php');
    }