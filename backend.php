<?php
include('config.php');
session_start();

if(isset($_POST['register'])) saveInfo();
if(isset($_POST["login"])) dashbord();
if(isset($_POST["save"])) instrumentData();

    





function saveInfo(){
    global $conn;
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $Rpassword=$_POST['repeat-password'];

    $select = "SELECT * FROM `register-form` WHERE email= '$email'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['a']= 'admin already exist ! ';
    }else{
        if($password !== $Rpassword){

            $_SESSION['a']= 'password not matched!';
        }else{
            $query="INSERT INTO `register-form` (`name`, `email`, `password`, `Rpassword`) VALUES ('$name','$email','$password', '$Rpassword')";
            mysqli_query($conn,$query);
            header('location:login.php');

        }
    }




}

function  dashbord(){
    global $conn;
    
    $email =  $_POST["email"] ;
    $pwd = $_POST["pwd"] ;

    $select = "SELECT * FROM `register-form` WHERE email= '$email' AND password = '$pwd'";

    $result = mysqli_query($conn, $select);

    $data = mysqli_fetch_assoc($result) ;
    
    $_SESSION["user"] = $data["name"] ;
    

    header("location:/boutique-rockstar/dashbord.php") ;
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
   
header('location:dashbord.php');

}
function showinstrumentData(){
    global $conn;
    $req="SELECT* FROM products";
    $query=mysqli_query($conn,$req);
    $row=mysqli_fetch_assoc($query);
    while($row){

    }

}



?>