<?php

function  getDetails():array{
    if(isset($_POST['send'])){
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $details = array(
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        );
        return $details;
    }
    else{
        return [];
    }
}


getDetails();