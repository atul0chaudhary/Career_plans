<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style> 
   header
     { 
      background: url(http://sinhvu.com/wp-content/uploads/2017/12/web-design-2906159.jpg) no-repeat center; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      color: white;
      clear: left;
      padding: 5%;
    }
    footer {
    padding: 2%;
    color: white;
    clear: left;
    background-color: black;
    }

    h1{
      padding:20px;
      font-size: 4em; 
    } 
    h2{
        padding:10px;
      font-size: 3em; 
    }
hr{
  color:white;
  width: 130px;
}
.containet
{
  width: 90%;
}
.jumbotron
    	{
    		background-color: white;
    		padding: 10px;
    		height: 50px;
    	}
      img{
    border-radius: 10px 10px 10px 10px;
    border: 1px solid #B0c4DE;
  }

</style>
</head>
<body>

<header>
   <nav class="navbar navbar-default">
  <div class="container">

  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-user" aria-hidden="true"></i><strong>  <?php echo $_SESSION['username']; ?></strong><span class="sr-only">(current)</span></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="career.html">Message</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="#">Contact</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?logout='1' " >Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <center>
        <div id="content">
        <h2><b>Career Plans</b></h2>
        <h5><b>"Plan your future here"</b></h5> 
        </div>  
        </center>
      </div>
    </div>
  </div>
</header> 
<center>
  <h1><b> 
 	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>
</b></h1>
<div class="container">
	<p><b>For more query please select any of the faculty member from the list .The faculty members are specialised in there subjects so contact them as per there specialization</b></p> 
	</div>
	<br>
	<br>
	<br>
	<center>
    <h2><b>Faculty Members</b></h2>  
    <br>
    <br>	
 	<div class="container" >
		<div class="row">
	    	<a href=#><div class="col-lg-3 col-sm-6 "><img width="180" height="230" src="https://tse4.mm.bing.net/th?id=OIP.LWEo8G1gK1WUvfofQeQL8QHaIL&pid=Api&P=0&w=300&h=300"><br><h5><b>Civil  Department</b></h5></div></a>
	    	<a href=#><div class="col-lg-3 col-sm-6 "><img width="180" height="230" src="https://tse4.mm.bing.net/th?id=OIP.LWEo8G1gK1WUvfofQeQL8QHaIL&pid=Api&P=0&w=300&h=300"><br><h5><b>IT  Department</b></h5></div></a>
	    	<a href=#><div class="col-lg-3 col-sm-6 "><img width="180" height="230" src="https://tse4.mm.bing.net/th?id=OIP.LWEo8G1gK1WUvfofQeQL8QHaIL&pid=Api&P=0&w=300&h=300"><br><h5><b>CS  Department</b></h5></div></a>
	    	<a href=#><div class="col-lg-3 col-sm-6 "><img width="180" height="230" src="https://tse4.mm.bing.net/th?id=OIP.LWEo8G1gK1WUvfofQeQL8QHaIL&pid=Api&P=0&w=300&h=300"><br><h5><b>ME  Department</b></h5></div></a>
	    </div>
	</div>
	<br>
	    <br>
     	<div class="container" >
		<div class="row">
	    	<a href=#><div class="col-lg-3 col-sm-6 "><img width="180" height="230" src="https://tse4.mm.bing.net/th?id=OIP.LWEo8G1gK1WUvfofQeQL8QHaIL&pid=Api&P=0&w=300&h=300"><br><h5><b>EC  Department</b></h5></div></a>
	    	<a href=#><div class="col-lg-3 col-sm-6 "><img width="180" height="230" src="https://tse4.mm.bing.net/th?id=OIP.LWEo8G1gK1WUvfofQeQL8QHaIL&pid=Api&P=0&w=300&h=300"><br><h5><b>EN  Department</b></h5></div></a>
	    	<a href=#><div class="col-lg-3 col-sm-6 "><img width="180" height="230" src="https://tse4.mm.bing.net/th?id=OIP.LWEo8G1gK1WUvfofQeQL8QHaIL&pid=Api&P=0&w=300&h=300"><br><h5><b>12th Math</b></h5></div></a>
	    	<a href=#><div class="col-lg-3 col-sm-6 "><img width="180" height="230" src="https://tse4.mm.bing.net/th?id=OIP.LWEo8G1gK1WUvfofQeQL8QHaIL&pid=Api&P=0&w=300&h=300"><br><h5><b>12th Bio</b></h5></div></a>
	    </div>
	    <br>
	    <br>
	</div>
	<div class="container" >
		<div class="row">
	    	<a href=#><div class="col-lg-3 col-sm-6 "><img width="180" height="230" src="https://tse4.mm.bing.net/th?id=OIP.LWEo8G1gK1WUvfofQeQL8QHaIL&pid=Api&P=0&w=300&h=300"><br><h5><b>12th Commerce</b></h5></div></a>
	    	<a href=#><div class="col-lg-3 col-sm-6 "><img width="180" height="230" src="https://tse4.mm.bing.net/th?id=OIP.LWEo8G1gK1WUvfofQeQL8QHaIL&pid=Api&P=0&w=300&h=300"><br><h5><b>10th class</b></h5></div></a>
	    	<a href=#><div class="col-lg-3 col-sm-6 "><img width="180" height="230" src="https://tse4.mm.bing.net/th?id=OIP.LWEo8G1gK1WUvfofQeQL8QHaIL&pid=Api&P=0&w=300&h=300"><br><h5><b>Startup</b></h5></div></a>
	    	<a href=#><div class="col-lg-3 col-sm-6 "><img width="180" height="230" src="https://tse4.mm.bing.net/th?id=OIP.LWEo8G1gK1WUvfofQeQL8QHaIL&pid=Api&P=0&w=300&h=300"><br><h5><b>Mental Guidance</b></h5></div></a>
	    </div>
	</div>
   </center>
   <br>
   <br>
  <br>
   <br>
   <br>
   <br>
	<footer>
   	 <center><p>Copyright ©www.kiet.eduwww.careerplans.com</p></center>
   </footer>
		
</body>
</html>