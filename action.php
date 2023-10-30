<?php
include 'conn.php';
$id=$_GET['id'];

extract($_POST);
if(isset($_POST['btn']))
{
  
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
      echo "<script>alert('You booked this tour succesfully!'); window.location.href='details.php?id=$id';</script>";
    }else{
        //  echo mysqli_error($conn);

        echo "<script>alert('Some Error Occured')</script>";
    }
  }
?>