<html>
<head>
	<title>hello this is my index</title>
	<link rel="stylesheet" type="text/css" href="../movie/css/admin.css">


	</style>

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

	<div class="row">
          <div class="col">
          	
	      	<div class="leftside">
	      		<img src="../movie/cinorg.jpg" alt="photo" height="283px" width="100%">
	      		<div class="text">
	      			<h1>Movie Rating</h1></div>
	      		
	      		<div class="row1">
	      			<ul class="u1">
	      			<li class="one"><a class="a1" href="../movie/addmovie.php">Add Moive</a></li>
	      			<li class="one"><a class="a1" href="../movie/viewcust.php">View Customers</a></li>
	      			<li class="one"><a class="a1" href="#">View Comments</a></li>
	      			<li class="one"><a class="a1" href="../movie/page1.php">LogOut</a></li>
	      		</ul>
	      	</div>
                   </div>
	      </div>
<div class="col">
	<div class="rightside"> 
	    
     </div>
   
   	
   </div>
</body>
</html>