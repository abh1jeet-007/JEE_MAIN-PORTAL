<?php
$name=$_POST['sm'];

$dob=$_POST['dob'];
$mob=$_POST['mob'];
$sex=$_POST['sex'];
$category=$_POST['category'];
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$fname=$_POST['fm'];
include('dbcon.php');
  $sql = "INSERT INTO result(Name,DOB,Category,mobile,email,gender,password,f_name) VALUES ('$name','$dob','$category',$mob,'$email','$sex','$pass1','$fname')";
  $res=mysqli_query($sql,$con);
   

?>