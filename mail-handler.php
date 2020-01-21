<?php 
   if(issset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $msg=$_POST['msg'];
    
     $to='anelisiwe063@gmail.com';
     $subject='Form Submission';
     $message="Company Name: ".$name. "\n". "Wrote the ff: "."\n\n".$msg;
     $hearders="From: ".$email;
if(mail($to, $subject, $message, $headers)){
   echo "<h3>Sent Successsfully! Thank you</h3>
}
else{
echo "Something went wrong";
}
}
?>