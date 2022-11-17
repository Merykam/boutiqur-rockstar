<?php
$conn = mysqli_connect('localhost','root','','boutique-rockstar');
if(!$conn){
    echo "connection is failed".mysqli_connect_errno();
}

?>