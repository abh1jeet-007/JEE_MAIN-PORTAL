<!DOCTYPE html>
<html>
  <head>
 <link rel="stylesheet" href="login1part.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<body>


<body id="LoginForm" >
<div class="container">

<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h1 style="color:dodgerBlue">Registration</h1>

   </div>
    <form id="Login" action="" method="post">

        <div class="form-group">

             <h3> Candidate's Name:
          <input type="username" class="form-control " name="sm" >
			</h3>

        </div>

        <div class="form-group">
             <h3>  Father's Name:
            <input type="text" class="form-control" id="inputPassword" name="fm"></h3>

        </div>
		<div class="form-group">
             <h3>DOB:
            <input type="date" class="form-control" id="dob" placeholder="dd-mm-yyyy" name="dob"></h3>

        </div>
		<div class="form-group">
             <h3>Phone number:
            <input type="text" class="form-control" id="phone" name="mob" ></h3>

        </div>

        <h3 style = "display: inline-block">Gender:</h3>
		  <input type="radio" value="gender" name="sex" > Male</input>
		  <input type="radio" value="gender" name="sex"> Female</input>
		  <input type="radio" value="gender" name="sex" > Others </input>


		 <h3 style = "display: inline-block; font-size:20px"  >Category:</h3>
		<select name="category">
        <option value="General">General</option>
          <option value="OBC">OBC</option>
          <option value="SC">SC</option>
           <option value="ST">ST</option>
		    <option value="PWD">PWD</option>
</select>
		<div class="form-group">
             <h3>Email:</h3>
            <input type="email" class="form-control" id="email" name="email">

        </div>
		<div class="form-group">
             <h3>Enter Password:</h3>
            <input type="password" class="form-control" name="pass1" >

        </div>
		<div class="form-group">
             <h3>Repeat Password:</h3>
            <input type="password" class="form-control" name="pass2" >

        </div>
        <h4>*Every field is mandatory.</h4>
        <button type="submit"  name="create" class="btn btn-primary "  value="w" >Signup</button>

    </form>
    </div>
</div></div></div>

<?php
if(isset($_POST['create'])){
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
  $res=mysqli_query($con,$sql);

  if($res){
	  echo '<script> alert("Data Inserted Succesfully!"); </script>';
  }}
?>


</body>
</html>
