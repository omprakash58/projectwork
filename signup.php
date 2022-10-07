<?php 
$host="localhost";
$user="root";
$password="Zackcodi@123";
$db="demo";

$conn=mysqli_connect($host,$user,$password);
 mysqli_select_db($conn,$db);
 if($conn){
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
    $upassword=$_POST['upassword'];
	$sql="insert into signup (uname,moblie,email,upassword) values(\"$uname\",\"$mobile\",\"$email\",\"$upassword\")";
	$result=mysqli_query($conn,$sql);
    
    if($result){
        echo " You details have been added in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }    
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" a href="css\signup.css">
</head>
<body>

<form method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	
	<label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Email" name="username" required>

    <label for="email"><b>Mobile NO.</b></label>
    <input type="text" placeholder="Enter Email" name="mobile" required>
	
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="upassword" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
