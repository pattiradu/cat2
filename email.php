<?php

include"connection.php";
session_start();


if (isset($_POST['submit'])) {

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];

var_dump($fname);

$insert=$conn->query("INSERT INTO user VALUES ('$fname','$lname','$email','$password')");
}



use Facebook\Facebook;


require "vendor/autoload.php";


$fb = new \Facebook\Facebook([
  'app_id' => '722656635739282',
  'app_secret' => '4f84e0e1e83ef8e4d123c9ca43cc1be4',
  'default_graph_version' => 'v2.10',
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/facebook/facebook_login/dash.php");

try {
    
    $accessToken = $helper->getAccessToken();

    if(isset($accessToken)) {
        $_SESSION['access_token'] = (string) $accessToken;
    }


} catch (Exception $e) {
    print $e->getTraceAsString();
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>first page of this cat</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<header>

   <div class="row m-0">
       <div class="col bg-primary" >
       <h2 class="text-center" style="color:white;">IREMBO | Practical CAT</h2>
       </div>
   </div> 
</header>

  <div class="d-flex justify-content-center align-center" style="height:65vh;margin-top:80px" >

      <div class="border px-4 pt-4 position-relative text-center " style="width:60vh">

<h6>Connect to IREMBO</h6>
<div class="text-center alert-danger"></div>
    <form action="email.php" method="POST">

        <div class="row g-1 py-1" >
            <div class="col">
              <div class="position-relative"style="top:30vh">
                <button class="btn btn-primary" type="submit" style="width:50vh;">continue with Facabook</button>
            <i class="fa fa-facebook text-white position-absolute" aria="true" style="top:10px;left:5vh;"></i>
            </div>
        </div>
        
        </div>
        
        

    </form>
 
      </div>

  </div>





<script>
//show password

function show() {
  var x = document.getElementById("view");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
        <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
        
</body>
</html>