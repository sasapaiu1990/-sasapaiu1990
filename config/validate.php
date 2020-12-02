<?php

if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty( $_POST['company_name'])
   && !empty($_POST['email']) && !empty($_POST['message'])){
        
        $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
        $surname = filter_var($_POST['surname'],FILTER_SANITIZE_STRING);
        $company = filter_var($_POST['company_name'],FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST['phone'],FILTER_VALIDATE_INT);   
        $message =  filter_var($_POST['message'],FILTER_SANITIZE_STRING);
    
            $to = "sasapaiu1990@gmail.com";
            $subject = "Resume answer";
            $body = "";

            $body .= " From: " .$name." \r\n";
            $body .= " Family Name: " .$surname. " \r\n";
            $body .= " Phone nr: " .$phone. " \r\n";
            $body .= " Company Name: " .$company. "\r\n";
            $body .= " Email: " .$email. "\r\n";
            $body .= " Message: " .$message. "\r\n";

        if(mail($to, $subject, $body)){
             
            header("location: ../page/contact.php?info=true");
        }else{
           
            header("location: ../page/contact.php?info=error");
        } 
    
    
    }else{
     header("location: ../page/contact.php?info=false");
     exit();
    }
?>