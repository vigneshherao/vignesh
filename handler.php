<?php
     $name $_POST['name'];  
     $visitor_email=$_POST['email'];
     $message =$_POST['message'];


     $email_from = 'vigneshfornavy@gmail.com';

     $email_subject ="new form submisssiom";

     $email_body ="user name: $name.\n". 
                  "user Email: $visitor_email.\n". 
                  "user message : $message.\n";
           
                  
           $to = "altimaxeditz@gmail.com";   
           
           $headers ="from: $email_from \r\n";

           $headers .= "Reply-To: $visitor_email \r\n";

           mail($to,$email_subject,$email_body,$headers);

           header("location:index.html");


?>          