<?php
$con=mysqli_connect("localhost", "root","","danferd");
$error=array();

$catname="";

if(isset($_POST['submit'])){
    if(isset($_POST['catname']) && !empty($_POST['catname'])){
        $catname=$_POST['catname'];
    }else{
        $error['catname']="Please enter category name";
    
}
if(empty($error)){
    $sql="INSERT INTO category(category_name)
    VALUES('".$catname."')";

    $query=mysqli_query($con,$sql) or die(mysqli_error($con));

    echo "Successful";
}else{
    print_r($error);
}
}
?>