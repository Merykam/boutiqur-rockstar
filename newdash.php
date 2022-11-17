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
        <!-- <ul class="navbar-nav justify-content-end flex-grow-1 pe-3"> -->
          <!-- <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
          </li> -->
          <!-- <li class="nav-item"> -->
            <!-- <a class="nav-link text-white" href="#">Link</a> -->
          <!-- </li>
          <li class="nav-item dropdown"> -->
            <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a> -->
            <!-- <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul> -->
          <!-- </li> -->
        <!-- </ul> -->
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
  <h1><span class="STATI text-white">0</span></h1>
    <p>instruments</p>
  </div>
</div>
<div class="card card2" style="width: 25rem;">
  <div class="card-body">
    <h1><span class="STATI text-white">0</span></h1>
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
<div class="row row-cols-1 row-cols-md-3  row-cols-lg-4 g-4 m-auto">
  <div class="col">
    <div class="card Larger shadow">
    <div class="imgcard">

   </div>
      <!-- <img src="images/drum.jpg" class="card-img-top" alt="..." style=""> -->
      <div class="card-body">
      
        <h4 class="card-title text-center">Guitar</h4>
        <H5 class="text-center">200 DH</H5>
        <H5 class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </H5>
        <button class="btn bg-danger text-white rounded-pill fw-bold">Delet</button>
        <button type="button" class="btn bg-primary text-white rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#form" onclick="AddTask()"><i class="fa fa-plus"></i> Update</button>
        
      </div>
    </div>
  
  
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
                <input name="pic" type="file" class="form-control" id="title"  >
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
                <textarea name="description" class="form-control" id="description" rows="8"></textarea>
              </div>
        </div>
        <div class="modal-footer" id="id-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button id="save" type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="save">Save</button>
          <!-- <button id="update"  type="button" class="btn btn-warning">Update</button>
          <button id="delete" type="button" class="btn btn-danger">Delete</button> -->
        </div>
      </div>
    </div>
</form>
    <!-- <nav class="navbar navbar-expand-lg bg-light ">
    <div class="container-fluid">
        <h1 class="me-4"> <span>R</span>ock<span>S</span>tar</h1>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bold" aria-current="page" href="#">Home</a>
        </li>
         -->
        
          <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a> -->
          <!-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
        <!-- </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      <!-- </ul>
      <form class="d-flex" role="search">
        <input class="me-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-bg-dark me-2" type="submit">Search</button>
        <button class="btn btn-bg-dark " type="submit">Log out</button>
      </form>
    </div>
  </div>
</nav>
    <section class="row vh-100">
        <aside class="col-2  text-white">
            <div class="container bg-muted">
               
                
                
                    
               
            </div>
        </aside>
        <div class="col-10">

        </div>
       
    </section> -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>