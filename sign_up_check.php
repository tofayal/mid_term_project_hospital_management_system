<?php 
  session_start();

  if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
    if($username != ""){
      if($password != ""){
        if ($email != "" && filter_var($email, FILTER_VALIDATE_EMAIL)){
          if($phone != "" && strlen($phone_to_check)==11){
          
          $user = ['username'=>$username, 'password'=>$password];
          
          $_SESSION['user'] = $user;

       header('location: sign_in.php');
        }else{
          echo "invalid Mobile Number...";
        }
        }else{
          echo "invalid email...";
        }
      }else{
        echo "invalid password...";
      }
    }else{
      echo "invalid username...";
    }
  }

  

?>