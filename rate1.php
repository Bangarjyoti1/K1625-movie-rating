<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>hello this is my index</title>
	<style type="text/css">
		.leftside, .rightside{
	height: 315px;
	width: 100%;
}
.leftside{
	background: white;
	background-size: cover;
}
.rightside{
	background-color: white;
}
.centered{
	position: absolute;
	bottom: 8px;
	left: 16px;
	text-align: center;
}
.leftside .text{
	position: absolute;
	z-index: 999;
	margin: 0 auto;
	text-align: center;
	top: 22%;
	left: 2%;
	background:light yellow;
	color: yellow;
	font-size: 30px

}
.one{
	float: left;
    background-color:white;
    color: black;
    width: 140px;
    height: 25px;
    list-style: none;
   line-height: 25px;
    font-size: 20px;
    text-align: center;
    list-style: none;
    opacity: 0.9;
}
.row1 ul li:hover>ul{
        display: block;
        position: relative;
    }
    .row1 ul li{
    	float: left;
        background-color: dark black;
        color:black;
        width: 330px;
        list-style: none;
       line-height: 25px;
        font-size: 25px;
        text-align: center;
        list-style: none;
        opacity: 0.9;
    }
   
.text
{
	height: 130px;
}
.one{
	width: 300px;
	background-color: black;
	margin: 0px;
}
.row1{
	margin-left:-39px;
	margin-top: 2px;
	height: 60px;

}
.a1{
	color: white;
}
.u1{
	height: 50px;
	margin-top: 1px;
}
#bottom{
	height: 280px;
	margin: 0px;
	margin-top: -20px;
	text-align: center;
}
.fa fa-star checked{
	color: red;
}


	</style>
	<script type="text/javascript">
		function myFun(){
			alert ("Comment added Succesfully.")
		}
	</script>

</head>
<body>
	<div class="row">
          <div class="col">
          	
	      	<div class="leftside">
	      		<img src="../movie/cinorg.jpg" alt="photo" height="240px" width="100%">
	      		<div class="text">
	      			<h1>Movie Rating</h1></div>
	      		
	      		<div class="row1">
	      			<ul class="u1">
	      			<li class="one"><a class="a1" href="#">My Detail</a></li>
	      			<li class="one"><a class="a1" href="../movie/rate.php">Rate Movie</a></li>
	      			<li class="one"><a class="a1" href="../movie/moviename.php">View Movie</a></li>
	      			<li class="one"><a class="a1" href="../movie/page1.php">Log Out</a></li>
	      		</ul>
	      	</div>
                   </div>
	      </div>
<div class="col">
	<div class="rightside"> 
		<div id="bottom">
			<div><u>Movie Rating</u></div><br>
			<div>
			<form>
				Movie Name:-    <select><option value="0">--Select--</option>
					<option value="1">--Select--</option>
					<option value="2">Talash</option>
					<option value="3">Dhoom 3</option>
					<option value="4">Paycheck</option>
					<option value="5">Sooryavansham</option>

				</select>
				<pre>
				</pre>
				<div class="imp">
					<div class="imp2">
						<img src="../movie/paycheck.jpg" width="150px">
					</div>
				</div>
				<p>Movie has not been rated.be the first one to rate this Movie</p>
				<h4>Rate Now</h4>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				
				<br>
				<button onclick="myFun()">Submit</button>

				
				
			</form>
		</div>
			
	 </div>
   
   	
   </div>
</body>
</html>