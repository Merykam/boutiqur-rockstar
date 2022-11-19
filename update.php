<?php 
include('backend.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <!-- Modal -->
    
 <form method="post" class="container " name="first-form" enctype="multipart/form-data">
    <div class="modal-dialog ">
        <?php
        showProductupdate();
        ?>
    
    </div>
</form>
    
    
</body>
</html>