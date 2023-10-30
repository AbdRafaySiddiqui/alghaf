<?php
require('conn.php');

$id=$_GET['id'];  // getting id from url
$query2="select * from packages where id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data
$price=$row2[2];


require('config.php');
if(isset($_POST['stripeToken'])){
    \Stripe\Stripe::setVerifySslCerts(false);

    $token=$_POST['stripeToken'];
    $data=\Stripe\Charge::create(array(
        "amount"=>$price*100,
        "currency"=>"usd",
        "description"=>"Software Company",
        "source"=>$token,
    ));
     echo "<pre>";
    // print_r($data);
    if(isset($data)){
    $nquery="SELECT * FROM packages WHERE id=$id";
    $nresult=mysqli_query($conn,$nquery);
    $nrow=mysqli_fetch_assoc($nresult);
    $pname=$nrow['name'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $date=$_POST['date'];
    $person=$_POST['person'];
    $msg=$_POST['msg'];
    $query1="insert into booking(name, email, number, date, message, persons,packagename)values('$name','$email','$number','$date','$msg','$person','$pname')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
      echo "<script>alert('You booked this tour succesfully!'); window.location.href='success.php?id=$id';</script>";
    }else{
        //  echo mysqli_error($conn);

        echo "<script>alert('Some Error Occured')</script>";
    }
    }
}
?>