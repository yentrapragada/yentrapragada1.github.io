<?php
if($_POST["submit"]) {
    $recipient="tywx2@mail.umkc.edu"; //Enter your mail address
   //Subject 
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
	 $subject=$_POST["subject"]; 
    $message=$_POST["comments"];
    $mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
    mail($recipient, $subject, $mailBody);
	sleep(1);
	header("Location:http://blog.antonyraphel.in/sample/"); // Set here redirect page or destination page
}
?>