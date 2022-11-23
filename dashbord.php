<?php 
include('backend.php'); 
if(!isset( $_SESSION["user"])) header('location:Newlogin.php') 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylenewDash.css" rel="stylesheet">

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

<div class="container-fluid">



<!-- start nav -->
<nav class="navbar bg-light fixed-top container-fluid">
  <div class="container-fluid">
    <h1 class="me-4"> <span class="firstH1">R</span>ock<span class="">S</span>ta<span class="">r</span></h1>
    <a class="navbar-brand" href="#"></a>
    
    <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" >
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- start sidebar -->
    

    
    <div class="offcanvas offcanvas-start  bg-light d-flex align-items-center"  tabindex="-1" id="offcanvasNavbar" 
    style="max-width: 50%;">

      <div class="imgP rounded-circle mt-5 ">
      </div>


      <span class="text-dark py-3 fw-bold">
      <?php if(isset($_SESSION["user"])){
        echo $_SESSION["user"];};
      ?>
      </span>

      <span class="text-muted">Admin boutique RockStar</span> 

      <form method="post">
        <button type="submit" class=" fw-bold border-0 mt-3 p-2 rounded text-white logout" name="logout">Log out</button>
      </form>
    

    </div>
    <!-- End sidebar -->
  </div>
</nav>

<!-- End nav -->

<div class="welcomMsg">
  <h1 class="text-dark">Welcome Admin</h1>
  <div class="">
    <h4 class="text-gray  text-center fw-bold"><?php if(isset($_SESSION["user"])){
            echo $_SESSION["user"];};?> </h4>

</div>
<div class="addinstrument d-f ">
    <button type="button" class="btn text-white rounded-pill fw-bold " data-bs-toggle="modal" data-bs-target="#form"><i class="fa fa-plus"></i> Add instrument</button>
  </div>


</div>

<!-- statistiques -->
<div class="row mt-3  mx-auto">
  <div class="col-md-4 col-sm-12 p-1">
<div class="card  card1 ">
  <div class="card-body ">
  <h1><span class="STATI text-white"><?php Countt();?></span></h1>
    <p>Total products</p>
  </div>
</div>
</div>
<div class="col-md-4 col-sm-12 p-1">
<div class="card card2 ">
  <div class="card-body">
    <h1><span class="STATI text-white"><?php Countt2();?></span></h1>
   
    <p>Total admins</p></span>
  </div>
</div>
</div>
<div class="col-md-4 col-sm-12 p-1">
<div class="card card3">
  <div class="card-body">
  <h1><span class="STATI text-white"><?php Countt3();?> DH</span></h1>
    <p>Capital</p>
  </div>
  </div>
</div>

</div>

<!-- endstatistique -->


<!-- card instrument -->
<div class="row mt-3">
  <?php
  showinstrumentData();
  
  ?>
 

  
  
</div>

<!-- end card instrument -->

 <!-- Modal -->
    
 <form method="post" class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" name="first-form" enctype="multipart/form-data" data-parsley-validate>
    <div class="modal-dialog">
      <div class="modal-content bg-light">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="exampleModalLabel">Add new instrument</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3 fw-bold ">
                <label for="title" class="form-label">instrument name</label>
                <input name="name" type="text" class="form-control" id="title" required data-parsley-trigger="keyup">
            </div>
            <div class="mb-3 fw-bold ">
                <label for="title" class="form-label">instrument picture</label>
                <input name="pic" accept="image/png, image/jpg, image/jpeg" type="file" class="form-control" id="title"  >
            </div>
            <div class="price-quantite row">
            <div class="mb-3 fw-bold col ">
                <label for="title" class="form-label">instrument price</label>
                <input name="price" type="number" class="form-control" id="title"  required data-parsley-trigger="keyup">
            </div>
            <div class="mb-3 fw-bold quantite col">
                <label for="title" class="form-label">Quantity</label>
                <input name="quantity" type="number" min='1'  class="form-control" id="title" required data-parsley-trigger="keyup">
            </div>

            </div>
            

              <div class="mb-3">
                <div class="fw-bold mb-2 mt-2 color">description</div>
                <input name="description" class="form-control" id="description"  required data-parsley-trigger="keyup">
              </div>
        </div>
        <div class="modal-footer" id="id-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-gray bg-light" name="save">Save</button>
          
        </div>
      </div>
    </div>
</form>

</div>
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>