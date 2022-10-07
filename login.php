
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
    $password=$_POST['password'];
    $sql='select * from loginform where user='."\"{$uname}\"".' AND pass='."\"{$password}\"";
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
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
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="css\signup.css">
</head>

<body>

<form method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Log In</h1>
    <p>Enter your credentials to login</p>
    <hr>

    <label for="email"><b>User Name</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <div class="clearfix">
      <button type="submit" class="cancelbtn" onClick="document.location.href='signup.php'"">sigup</button>
      <button type="submit" class="signupbtn">Login</button>
    </div>
  </div>
</form>

</body>
</html>








