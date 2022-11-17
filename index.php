<?php

include('backend.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
</head>
<body>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="" style="border-radius: 15px;">
            <div class="">
              <h2 class="text-uppercase text-center mb-5 mt-2 fw-bold text-black">Create an account</h2>

              <form action="" method="post"> 

                <div class="form-outline mb-2">
                  <?php
                  if(isset($_SESSION['a'])){
                      echo "<span class='error-msg'>{$_SESSION['a']}</span>";
                      unset($_SESSION['a']);
                    
                  }
                  ?>
                  <label class="form-label" for="name">Your Name</label>
                  <input type="text" id="name" name="Name" class="form-control form-control-lg" require />
                  
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input name="Email" type="email" id="form3Example3cg" class="form-control form-control-lg" require />
                  
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input name="Password" type="password" id="form3Example4cg" class="form-control form-control-lg" require />
                  
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  <input name="repeat-password" type="password" id="form3Example4cdg" class="form-control form-control-lg" require/>
                  
                </div>

                <div class="d-flex justify-content-center">
              
                  <input name="register" type="submit"
                    class="btn btn-black bg-black btn-block btn-lg gradient-custom-4 text-white"/>
                </div>

                <p class="text-center text-light mt-2 mb-0 ">Have already an account? <a href="login.php"
                    class="fw-bold text-light"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html> 