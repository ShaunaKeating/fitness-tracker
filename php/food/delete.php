<?php 

session_start();

	    $food = $_SESSION['food'];
    if ($_POST){
        $food[] = $_POST;
        $_SESSION['food'] = $food;
        header('Location: ./');
    }
    
    
    $meal =$food[$_REQUEST['id']];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Track Your Fitness Foo Log Delete</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="../../css/stylesheet.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      

			<!-- Start: TopBar -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#">Track Your Fitness</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="#">User Settings</a></li>
					<li><a href="#">Log out</a></li>
					<li><a href="#">Goals</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $name ?><span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li><a href="#">Tasks</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Session Close</a></li>
					  </ul>
					</li>
				  </ul>
				</div>
			  </div>
			</nav>
			<!-- End: TopBar -->
	
		 			  <div class="container-fluid">
		 <form class="form-horizontal" action="./" method="post" >
          <div class='alert' style="display: none" id="myAlert">
            <button type="button" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h3>Are You sure you want to delete....?</h3>
            <input type="submit" 
            </div>

    
      
      
      
  
  
  
  <!-- Bootstrap core JavaScript-->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.1.6/zepto.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <script>
    $(documet).ready(function(){
    	
    	
    	
    	
    });
    </script>
  </body>
</html>