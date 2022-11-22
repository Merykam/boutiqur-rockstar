
<?php

include('backend.php');
// use LDAP\Result;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>login form</title>
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
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row g-0 ">
            <div class="col-lg-5">

            </div>
                <div class="col-lg-7 px-5 pt-5">
                <h1 class="fw-bold"> <span >R</span>ock<span class="">S</span>ta<span >r</span></h1>
                <h5 class="text-muted fw-bold">Sign in</h5>
                <?php
                  if(isset($_SESSION['err1'])){
                      echo '<span class="error-msg">'.$_SESSION['err1'].'</span>';
                      unset($_SESSION['err1']);
                    
                  }
                  ?> 
                    <form action="" method="post" data-parsley-validate>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input  name="email"  type="email" placeholder="Email-Address" class="form-control my-3 p-3" required data-parsley-trigger="keyup"> 
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input name="pwd" type="password" placeholder="***********" class="form-control my-3 p-3" required data-parsley-trigger="keyup">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input name="login" type="submit" class="btn1 mt-3 mb-5" value="log in">
                            </div>

                        </div>
                        <a href="#">Forgot password</a>
                        <p class="py-2">Don't have an accout ?<a href="register2.php">Register here</a></p>
                    </form>


                </div>

                


            </div>

        </div>

    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>