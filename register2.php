<?php

include('backend.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Register form</title>
    <!-- BEGIN parsley css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
    <!-- END parsley css-->

<!-- BEGIN jquery js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END jquery js-->

    <!-- BEGIN parsley js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END parsley js-->
</head>
<body>
    <section class="Form my-1 mx-4">
        <div class="container">
            <div class="row g-0 ">
      
                <!-- <div class="col-lg-5 vh-100 ">
                    <img src="images/color1.jpg" class="img-fluid vh-100" alt="">
                </div> -->
                <div class="col-lg-5">

                </div>
                <div class="col-lg-7 px-5 pt-5">
                <h1 class="fw-bold"> <span >R</span>ock<span class="">S</span>ta<span >r</span></h1>
                <h5 class="text-muted fw-bold">Sign up</h5>
                <?php
                  if(isset($_SESSION['a'])){
                      echo "<span class='error-msg'>{$_SESSION['a']}</span>";
                      unset($_SESSION['a']);
                    
                  }
                  ?>
                    <form  method="post" data-parsley-validate>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input name="Name" type="name" placeholder="Enter your name" class="form-control my-3 p-3" required data-parsley-trigger="keyup">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input name="Email" type="email" placeholder="Enter your email" class="form-control my-3 p-3" required data-parsley-trigger="keyup">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input name="Password" id="pass" type="password" placeholder="***********" class="form-control my-3 p-3" required data-parsley-trigger="keyup">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input name="repeat-password" type="password" placeholder="***********" class="form-control my-3 p-3" required  data-parsley-equalto="#pass" data-parsley-trigger="keyup" data-parsley-minlength="8">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input name="register" type="submit" class="btn1 mt-3 mb-5" value="Register">
                            </div>

                        </div>
                       
                        <p class="p-2">Have already an account ?<a href="Newlogin.php">Login here</a></p>
                    </form>


                </div>

                


            </div>

        </div>

    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>