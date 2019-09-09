<?php
$con=mysqli_connect("localhost", "root","","danferd");
$error=array();
$option=$option2=$nitem=$qah=$cprice=$sprice=$ned=$bnumber=$roq="";

if(isset($_POST['submit'])){
    if(isset($_POST['option']) && !empty($_POST['option'])){
        $option=$_POST['option'];
    }else{
        $error['option']="Please select type of item";
    }
    
    if(isset($_POST['option2']) && !empty($_POST['option2'])){
        $option2=$_POST['option2'];
    }else{
        $error['option2']="Please select category";
    }

    if(isset($_POST['nitem']) && !empty($_POST['nitem'])){
        $nitem=$_POST['nitem'];
    }else{
        $error['nitem']="Please enter item name";
    }

    if(isset($_POST['qah']) && !empty($_POST['qah'])){
        $qah=$_POST['qah'];
    }else{
        $error['qah']="Please enter quantity at hand";
    }

    if(isset($_POST['cprice']) && !empty($_POST['cprice'])){
        $cprice=$_POST['cprice'];
    }else{
        $error['cprice']="Please enter cost price";
    }

    if(isset($_POST['sprice']) && !empty($_POST['sprice'])){
        $sprice=$_POST['sprice'];
    }else{
        $error['sprice']="Please enter sales price";
    }

    if(isset($_POST['ned']) && !empty($_POST['ned'])){
        $ned=$_POST['ned'];
    }else{
        $error['ned']="Please enter nearest expiry date";
    }

    if(isset($_POST['bnumber']) && !empty($_POST['bnumber'])){
        $bnumber=$_POST['bnumber'];
    }else{
        $error['bnumber']="Please enter batch number";
    }

    if(isset($_POST['roq']) && !empty($_POST['roq'])){
        $roq=$_POST['roq'];
    }else{
        $error['roq']="Please enter re-order quantity";
    }

if(empty($error)){
    $sql="INSERT INTO product(type_of_item,category,name_of_item,quantity_at_hand,cost_price,sales_price,expiry_date,batch_number,order_quantity)
    VALUES('".$option."','".$option2."','".$nitem."','".$qah."','".$cprice."','".$sprice."','".$ned."','".$bnumber."','".$roq."')";

    $query=mysqli_query($con,$sql) or die(mysqli_error($con));

    echo "Successful";
    header("Location: ../bill.php");
}else{
    print_r($error);
}
}
?>