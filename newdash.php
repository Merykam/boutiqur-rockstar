<?php 
include('backend.php');  
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
</head>
<body>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <h1 class="me-4"> <span class="text-muted firstH1">R</span>ock<span class="text-muted">S</span>ta<span class="text-muted">r</span></h1>
    <a class="navbar-brand" href="#"></a>
    
    <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="offcanvas offcanvas-start row bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
			
      
        <div class="imgP rounded-circle m-3">
        

        </div>

        


      <span class="text-light ">Mariem Kamaych <?php if(isset($_SESSION["user"])){
            echo $_SESSION["user"];};?> </span>
      <span class="text-muted">Admin boutique RockStar</span> 
							
        
    
      
      <button type="button" class="btn-close btn btn-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      
      <div class="offcanvas-body">
      
        <form class="d-flex mt-3" role="search">
          
          <button class="btn btn-outline-light bg-light " type="submit">Log out</button>
        </form>
      </div>
    </div>
  </div>
</nav>

<div class="welcomMsg">
  <h1 class="text-dark">Welcome Admin</h1>
  <div class="">
    <h4 class="text-gray  text-center fw-bold">Mariem Kamaych <?php if(isset($_SESSION["user"])){
            echo $_SESSION["user"];};?> </h4>

  </div>
  <div class="addinstrument d-f ">
    <button type="button" class="btn text-white rounded-pill fw-bold " data-bs-toggle="modal" data-bs-target="#form" onclick="AddTask()"><i class="fa fa-plus"></i> Add instrument</button>
  </div>


</div>
<!-- statistiques -->
<div class="d-flex justify-content-between p-3">
<div class="card  card1 " style="width: 25rem;">
  <div class="card-body">
  <h1><span class="STATI text-white"><?php Countt();?></span></h1>
    <p>instruments</p>
  </div>
</div>
<div class="card card2" style="width: 25rem;">
  <div class="card-body">
    <h1><span class="STATI text-white"><?php Countt2();?></span></h1>
    <p>Admines</p>
  </div>
</div>
<div class="card card3 " style="width: 25rem;">
  <div class="card-body">
  <h1><span class="STATI text-white">0 DH</span></h1>
    <p>Revenu</p>
  </div>
</div>

</div>

<!-- endstatistique -->


<!-- card instrument -->
<div class="row m-auto">
  <?php
  showinstrumentData();
  
  ?>
 

  
  
</div>


<!-- end card instrument -->
 <!-- Modal -->
    
 <form method="post" class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" name="first-form" enctype="multipart/form-data">
    <div class="modal-dialog">
      <div class="modal-content bg-light">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="exampleModalLabel">Add new instrument</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3 fw-bold ">
                <label for="title" class="form-label">instrument name</label>
                <input name="name" type="text" class="form-control" id="title"  >
            </div>
            <div class="mb-3 fw-bold ">
                <label for="title" class="form-label">instrument picture</label>
                <input name="pic" accept="image/png, image/jpg, image/jpeg" type="file" class="form-control" id="title"  >
            </div>
            <div class="price-quantite row">
            <div class="mb-3 fw-bold col ">
                <label for="title" class="form-label">instrument price</label>
                <input name="price" type="number" class="form-control" id="title"  >
            </div>
            <div class="mb-3 fw-bold quantite col">
                <label for="title" class="form-label">Quantity</label>
                <input name="quantity" type="number" min='1'  class="form-control" id="title"  >
            </div>

            </div>
            

              <div class="mb-3">
                <div class="fw-bold mb-2 mt-2 color">description</div>
                <input name="description" class="form-control" id="description" rows="8">
              </div>
        </div>
        <div class="modal-footer" id="id-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-gray bg-light" data-bs-dismiss="modal" name="save">Save</button>
          
        </div>
      </div>
    </div>
</form>
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>