<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
   <title>Career plans</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
  body {
  font-size: 120%;
  background: #F8F8FF;
}
body{
    background: url(http://sinhvu.com/wp-content/uploads/2017/12/web-design-2906159.jpg);
    background-size: cover;
    font-family: lato;
}
html{
  height: 100%;
}
#content
{
  text-align: center;
  padding: 14%;
}

h1{
  color: white;
  font-weight: 700;
  font-size: 6em;
}
h5{
  color: white;
    font-size: 2em; 
}
hr{
  color:white;
  width: 400px;
}
form{
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0c4DE;
  background: white;
  border-radius: 10px 10px 10px 10px;
      }

.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
</style>
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container">
    
     <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="#">Career Plans</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="About.html">About <span class="sr-only">(current)</span></a></li>
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php">Register</a></li>
      </ul> 
    </div>
  </div>
</nav>
          
        
  <form method="post" action="login.php">
    <center><h2><b>Sign In</b></h2></center>
  	<?php include('errors.php'); ?>
       
  	 		<label><h3><b>Username</b></h3></label>
  		<input type="text" name="username" placeholder="Username" class="form-control">
  	 		<label><h3><b>Password</b></h3></label>
  		<input type="password" name="password" placeholder="Password" class="form-control">
      <br>
       <a href="#"><p><b>Forgot Password</b></p></a>
      <br>
  	 		<center><button type="submit" class="btn btn-success" name="login_user">Login</button><center>
  </form>
</body>
</html>