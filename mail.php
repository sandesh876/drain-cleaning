<?php 
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $msg=$_POST['message'];

    $to='sandeshgautam876@gmail.com';
    $subject='Contact us Response';
    $message_body='You have received an email from  '.$email."\n \n".'Name :'.$name."\n"."Address :".$address."\n"."Message Written :"."\n".$msg;
    $headers="From:" .$email;

    if(mail($to,$subject,$message_body,$headers ))
    {
    
        header("Location: contact.php?success");
    }
    else{
       
        header("Location: contact.php?failed");
    }

}


?>