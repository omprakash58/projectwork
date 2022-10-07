
<?php 
$host="localhost";
$user="root";
$password="Zackcodi@123";
$db="demo";

$sql='insert into response (ques1,ques2) values ('."\"{$ques1}\"".','."\"{$ques2}\"".')';
echo $sql;
$conn=mysqli_connect($host,$user,$password);
 mysqli_select_db($conn,$db);
if($conn){
if(isset($_POST['action'])){
    
    $ques1=$_POST['fav_language'];
    $ques2=$_POST['age'];
    $sql='insert into response (ques1,ques2) values ('."\"{$ques1}\"".','."\"{$ques2}\"".')';
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
	<link rel="stylesheet" a href="css\signup.css">
</head>
<body>

<h1>Display Radio Buttons</h1>

<form method="GET" style="border:1px solid #ccc">
<div class="container">
  <p>Please select your favorite Web language:</p>
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">HTML</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">CSS</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">JavaScript</label>

  <br>  

  <p>Please select your age:</p>
  <input type="radio" id="age1" name="age" value="30">
  <label for="age1">0 - 30</label><br>
  <input type="radio" id="age2" name="age" value="60">
  <label for="age2">31 - 60</label><br>  
  <input type="radio" id="age3" name="age" value="100">
  <label for="age3">61 - 100</label><br><br>
  <input type="submit" value="Submit">
  <input type="hidden" name="action" value="submit" />
</div>
</form>

</body>
</html>
