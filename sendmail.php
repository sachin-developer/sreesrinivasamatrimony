<?php
         $first_name = $_POST["fistname"]; //sender name
         $last_name = $_POST["lastname"]; //sender name
         $reply_to_email = $_POST["email"]; //sender email, it will be used in "reply-to" header
         $phone     = $_POST["phone"]; //subject for the email
         $dob     = $_POST["dob"]; //dob
         $message = $_POST["message"];
    
         $to = "sreesrinivasamatrimony@gmail.com";
         $subject = "You got an email from ".$first_name;
         
         $message = "<b>$message<br><br>Name: $first_name<br>Mobile: $phone</b>";

         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         $header .= "From: $reply_to_email" . "\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "<h3 style='text-align:center;color:green'>Message sent successfully...<a href='https://www.codeandclap.com'>Back to website</a><h3>";
         }else {
           echo "<h3 style='text-align:center;color:red'>Message could not be sent...<a href='https://www.codeandclap.com'>Back to website</a><h3>";
         }
      ?>