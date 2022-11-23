<?php
include('config.php');
session_start();

if(isset($_POST['register'])) Register();
if(isset($_POST["login"])) logIn();
if(isset($_POST["save"])) instrumentData();
if(isset($_GET["delet"])) deletData();
if(isset($_POST["update2"])) updateData();



if(isset($_POST['logout'])) logout();
    

function logout(){

    session_destroy();
   
    header('location:Newlogin.php');
}



function Register(){
    global $conn;
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $Rpassword=$_POST['repeat-password'];

    $select = "SELECT * FROM `Admins` WHERE email= '$email'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['a']= 'admin already exist ! ';
        header('location:register2.php');
        die;

    }else{
        if($password !== $Rpassword){

            $_SESSION['a']= 'password not matched!';
        }else{
            $query="INSERT INTO `Admins` (`name`, `email`, `password`, `Rpassword`) VALUES ('$name','$email','$password', '$Rpassword')";
            mysqli_query($conn,$query);
            $_SESSION['a']= 'good!';
            header('location:Newlogin.php');


        }
    }



}

function  logIn(){
    global $conn;
   

    $email =  $_POST["email"] ;
    $pwd = $_POST["pwd"] ;

    $select = "SELECT * FROM `Admins` WHERE email= '$email' AND password = '$pwd'";

    $result = mysqli_query($conn, $select);
    

    if(mysqli_num_rows($result) == 1){ 
        $data = mysqli_fetch_assoc($result) ;
        $_SESSION["user"] = $data["name"] ;
        header("location:Dashbord.php") ;
        die;
    }

    else{
        $_SESSION["err1"]='Incorrect email or password';
        header("location: Newlogin.php") ;
        die;

    }
   

    
    
    
    

  
 }


function instrumentData(){
    global $conn;
    $name=$_POST['name'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $description=$_POST['description'];

    $pic=$_FILES['pic']['name'];
    $pic_tmp_name=$_FILES['pic']['tmp_name'];
    $pic_img_folder='upload_img/'.$pic;

    if(empty($name)|| empty($price) || empty($quantity) || empty( $description)){
        $_SESSION['msg']='please fill out all';
    }else{
        
        $req= "INSERT INTO `products` (`name`, `price`, `quantity`, `description`, `pic`)
        values('$name',$price, $quantity,'$description','$pic')";
        $upload = mysqli_query($conn,$req);
        if($upload){
            move_uploaded_file($pic_tmp_name,$pic_img_folder);

        }
    }
   
header('location:Dashbord.php');

}


function showinstrumentData(){
    global $conn;
    $req="SELECT* FROM products";
    $query=mysqli_query($conn,$req);
    while($row=mysqli_fetch_assoc($query)){
        echo  '<div class="col col-12 col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card Larger shadow">
        <div class="imgcard" style="background-image: url(upload_img/'.$row['pic'].');">
    
       </div>
         
          <div class="card-body">
          
            <h4 class="card-title text-center">'.$row['name'].'</h4>
            <H5 class="text-center">'.$row['price'].' DH</H5>
            <H5 class="text-center">La quantité : '.$row['quantity'].'</H5>
            <p class="text-center">'.$row['description'].'</p>
            <div class="row gap-3">
            <a class="col ms-2 p-2 fw-bold text-decoration-none bg-danger text-light text-center rounded-pill" href="Dashbord.php?delet='.$row['id'].'">Delete</a>
            <a class="col me-2 p-2 fw-bold text-decoration-none bg-success text-light rounded-pill text-center " href="update.php?update='.$row['id'].'">Update</a>
            </div>
       
            
          </div>
         
          
        </div>
        </div>';

    }

}
function deletData(){
    global $conn;
    $id=$_GET["delet"];
    $dele="DELETE FROM `products` WHERE id=$id";
    mysqli_query($conn,$dele);
    header('location:Dashbord.php');
}

function updateData(){
    global $conn;
    $id=$_GET["update"];

    $name=$_POST['name'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $description=$_POST['description'];

    $pic=$_FILES['pic']['name'];
    $pic_tmp_name=$_FILES['pic']['tmp_name'];
    $pic_img_folder='upload_img/'.$pic;

    // if(empty($name)|| empty($price) || empty($quantity) || empty( $description)){
    //     $_SESSION['msg']='please fill out all';
   
        if(empty($pic)){
            
        $dele="UPDATE `products` SET `name`=' $name',`price`='$price',`quantity`='$quantity',`description`=' $description' WHERE id=$id";

        }else{
            $dele="UPDATE `products` SET `name`=' $name',`price`='$price',`pic`='$pic',`quantity`='$quantity',`description`=' $description' WHERE id=$id";

        }
       
        

        $upload = mysqli_query($conn,$dele);
        if($upload){
            move_uploaded_file($pic_tmp_name,$pic_img_folder);

        }
   

   
    
    mysqli_query($conn,$dele);
    header('location:Dashbord.php');
  

}


function showProductupdate(){

    global $conn;
    $id=$_GET["update"];
  
    $req="SELECT* FROM products WHERE id=$id" ;
    $query=mysqli_query($conn,$req);
    
    $row=mysqli_fetch_assoc($query);
        
        echo '<div class="modal-content bg-light p-4">
        <div class="modal-header d-flex justify-content-between ">
          <h5 class="modal-title fw-bold " >Add new instrument</h5>
          <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
          
        </div>

        
        
        <div class="modal-body pt-3">
            <div class="mb-3 fw-bold ">
                <label for="title" class="form-label">instrument name</label>
                <input value="'.$row['name'].'" name="name" type="text" class="form-control" id="title" >
            </div>
            <div class="mb-3 fw-bold ">
                <label for="title" class="form-label">instrument picture</label>
                <input value="upload_img/'.$row['pic'].'" name="pic" accept="image/png, image/jpg, image/jpeg" type="file" class="form-control" id="title"  >
            </div>
            <div class="price-quantite row">
            <div class="mb-3 fw-bold col ">
                <label for="title" class="form-label">instrument price</label>
                <input value="'.$row['price'].'" name="price" type="number" class="form-control" id="title"  >
            </div>
            <div class="mb-3 fw-bold quantite col">
                <label for="title" class="form-label">Quantity</label>
                <input value="'.$row['quantity'].'" name="quantity" type="number" min="1"  class="form-control" id="title"  >
            </div>

            </div>
            

              <div class="mb-3">
                <div class="fw-bold mb-2 mt-2 color">description</div>
                <input value="'.$row['description'].'" name="description" class="form-control" id="description" rows="8">
              </div>
        </div>
        <div class="modal-footer" id="id-footer d-flex justify-content-center ">
          
          <button type="submit" class="btn btn-success " data-bs-dismiss="modal" name="update2">Update</button>
         
        </div>
      </div>';
        
    }
    


function Countt(){
    global $conn;
    
    $sql = "SELECT *
            FROM products
           ";

    $req = mysqli_query($conn, $sql);

    $rowcount = mysqli_num_rows($req);

    echo $rowcount;
}
function Countt2(){
    global $conn;
    
    $sql = "SELECT * FROM `Admins`";
    $req = mysqli_query($conn, $sql);

    $rowcount = mysqli_num_rows($req);

    echo $rowcount;
}
function Countt3(){
    global $conn;

    $sql = "SELECT * FROM products";
    $req = mysqli_query($conn, $sql);
    


    $totalprix=0;
    while($row=mysqli_fetch_assoc($req)){
        
        $totalprix+=$row['price']*$row['quantity'] ;

    }
    echo $totalprix;
    


}


?>