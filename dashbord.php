
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashStyl.css" rel="stylesheet">
    

    <title>dashbord</title>
</head>
<body>
    <nav>
        <label class="logo">RockStar</label>
        <span>Hello <?php if(isset($_SESSION["user"])){
         echo $_SESSION["user"];};?> </span>
        <!-- <button>Add instrument</button> -->
        <button type="button" class="btn bg-white text-black rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#form" onclick="AddTask()"><i class="fa fa-plus"></i> Add instrument</a>
    
    </nav>
    <!-- Modal -->
    
  <form method="post" class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" name="first-form" enctype="multipart/form-data">
    <div class="modal-dialog">
      
    </div>
</form>

<!-- table of product -->
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Instrument picture</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><button class="btn bg-danger text-white rounded-pill fw-bold">Delet</button>
      <button type="button" class="btn bg-primary text-white rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#form" onclick="AddTask()"><i class="fa fa-plus"></i> Update</a>
    </td>
      
    </tr>
   
  </tbody>
</table>
<!-- end table of product -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>