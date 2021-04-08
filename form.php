<?php

require 'config.php';

if (isset($_POST['submit'])) {
  
 
    $firstname = $_POST['first_name'];
    $lastname = $_POST ['last_name'];
    $fname = $firstname." ".$lastname;
    $email = $_POST ['email'];
    $number = $_POST ['phone'];
    $message = $_POST ['message'];

    $sql ="INSERT INTO users (name,phone,email,message) VALUE('$fname','$number','$email','$message')";

    $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if($res){
      echo "Budah bazenga dadi";

      header('location:index.html');
    }else{
      echo $res;
    }


}


  


    // $email_from ='willisopiyo95@gmail.com';

    // $email_subject ="new form";


    // $email_body ="firstname: $firstname.\n".
    //               "lastname: $lastname.\n".
    //               "email: $email. \n".
    //               "number:$number. \n".
    //               "message:$message.\n";

    //  $to = "willisopiyo18@gmail.com";
     

    //  $headers ="From: $email_from \r\n";

    //  $headers ="reply-to: $email \r\n";


    //  mail($to,$email_subject,$email_body,$headers);

    //  header("location:index.html");        







 ?>