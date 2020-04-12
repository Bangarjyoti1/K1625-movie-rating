
<html lang="en">
<html>
<head>
	<title>hello this is my index</title>
	<link rel="stylesheet" type="text/css" href="../movie/css/login.css">
</head>
<body>
<?php
$username = $_POST['username'];
$pw = $_POST['password'];
$con = mysqli_connect("localhost","root","root" , "root");
$sql="SELECT * FROM `Users` WHERE username = '$username'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
// echo $username;
// echo mysqli_num_rows($result);
// echo password_verify($pw, $row['u_password']);
if(password_verify($pw, $row['u_password'])){
  // echo $row['u_password'];
  if(isset($_POST['keepLogin'])){
    setcookie("movierating", $username, time()+2592000);
  }else{
    setcookie("movierating", $username, time()+10800);
  }
  if($row[Admin_YesNo] === '1'){
    // echo "yes";
    session_start();
    $_SESSION['admin'] = 1;
    // echo $_SESSION['admin'];
  }
}
header('Location: index.php');
 ?>

?>
	<div class="row">
          <div class="col">
          	
	      	<div class="leftside">
	      		<img src="../movie/cinorg.jpg" alt="photo" height="350px" width="100%">
	      		<div class="text">
	      			<h1>Movie Rating</h1></div>
	      		
	      		
                   </div>
	      </div>
<div class="col1">
	<div class="container">
    <form method="post" action="">
        <div id="div_login">
            
            <div class="bb">
               <label id="lab">ID:- </label> <input type="text" class="textbox" id="txt_uname" required="">
            </div><br>
            <div class="bb">
               <label id="lab1">Password:-</label> <input type="password" class="textbox1" id="txt_uname" required="">
            </div><br>
            <div>
            	<button><a href="../movie/index.php">Login</a><utton>
            		<button><a href="#">Cancel</a><utton>
                
            </div>
            <div id="fot1">
           <center><h4>Not a member Yet?<span style="color: black; cursor: pointer;" onclick="newUser()"><a href="#">Register</a></span></h4></center>

       </div>
        </div>
    </form>
</div>
   </form>
	</div>     
     </div>
   
   	
   </div>
</body>
</html>
?>