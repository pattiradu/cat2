

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

        <div class="row g-1 py-1">
            <div class="col">
              <div class="position-relative">
                <input type="text" class="form-control ps-4" placeholder="Firstname" name="fname"required>
            <i class="fa fa-user text-primary position-absolute" aria="true" style="top:10px;left:5px"></i>
            </div>
        </div>
        
        </div>
        
         <div class="row g-1 py-1">

          <div class="col">
              <div class="position-relative">
                <input type="text" class="form-control ps-4" placeholder="lastname" name="lname" required>
            <i class="fa fa-user text-primary position-absolute" aria="true" style="top:10px;left:5px"></i>
            </div>
           </div>
        </div>

        <div class="row g-1 py-1">

          <div class="col">
              <div class="position-relative">
                <input type="email" class="form-control ps-4" placeholder="Email" name="email" required>
            <i class="fa fa-envelope text-primary position-absolute" aria="true" style="top:10px;left:5px"></i>
            </div>
           </div>
        </div>
        <div class="row g-1 py-1">
          <div class="col">
              <div class="position-relative">
                <input type="password" class="form-control ps-4" placeholder="Password" name="p" id="view" required>
            <i class="fa fa-key text-primary position-absolute"  aria="true" style="top:10px;left:5px"></i>

   <i class="fa fa-eye pull-right text-primary position-absolute" onclick="show()"  aria="true" style="top:10px;right:5px"></i>

            
            </div>
           </div>
        </div>
        <div class="row g-1 py-1">
          <div class="col">
              <div class="position-relative">
                <input type="password" class="form-control ps-4" placeholder="Re-enter Password" name="p" id="view">
            <i class="fa fa-key text-primary position-absolute"  aria="true" style="top:10px;left:5px" required></i>

   <i class="fa fa-eye pull-right text-primary position-absolute" onclick="show()"  aria="true" style="top:10px;right:5px"></i>

            
            </div>
           </div>
        </div>
        <div class="row g-1 py-1">
            <div class="col">
              <div class="position-relative">
                <button class="btn btn-primary" type="submit" style="width:50vh">Login</button>
            <i class="fa fa-facebook text-white position-absolute" aria="true" style="top:10px;left:20vh;font-weight: 200;t"></i>
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