<?php
session_start();
    $name = 'Shauna Keating';
      
    
  $food = $_SESSION['food'];
  if($_POST){
    unset($food[$_POST['id']]);
    $_SESSION['food'] = $food;
    header('Location: ./');
  }
  
  $meal = $food[$_REQUEST['id']];

 $total = 0;
    foreach ($food as $meal) {
        $total += $meal['Calories'];
    }
    
    $dietTotal = $total / 2000 * 100;
    

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food Log: Delete</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
        <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="../../css/stylesheet.css">
  </head>
  <body>
    			<!-- Start: TopBar -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="#">
				  	<img src="../images/logo-01.png" alt="FitLog Logo"/>
				</a>

				
				<div class="dropdown pull-right">
  				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <?= $name ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="../user-profile.php">Profile</a></li>
    <li><a href="#">Settings</a></li>
    <li><a href="../index.php">Log Out</a></li>
 		 </ul>
 		 
			</div> <!-- close dropdown -->
				</div> <!-- close navbar header -->
				</nav>
				
				
			<!-- End: TopBar -->
    
    
 		
			<div class="container">

			
			
							<!-- Start: Left Only Desktop Panel -->			
				<div class="col-md-4 col-lg-4 no-phone text-center" style="">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h3>Percentage Daily Values</h3>
					</div>
					<!-- Start: Progress Bar -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">
							<div class="col-xs-1 col-sm-1 col-md-6 col-lg-6 text-left">Calories</div>
							<div class="col-xs-1 col-sm-1 col-md-6 col-lg-6 text-right"><?= $total ?>/2000</div>
						</div>
												<div class="progress">
						  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?= $dietTotal ?>%"></div>
						  </div>
					</div>
					<!-- End: Progress Bar -->
					<!-- Start: Progress Bar -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">
							<div class="col-xs-1 col-sm-1 col-md-6 col-lg-6 text-left">Minutes Exercised Today</div>
							<div class="col-xs-1 col-sm-1 col-md-6 col-lg-6 text-right">5/30</div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
						</div>
					</div>
					<!-- End: Progress Bar -->
				</div>
				<!-- End: Left Only Desktop Panel -->	
				
			
    
      <div class="col-md-8 col-lg-8">

        <div class="page-header">
          <h1>Food Intake <small>Delete a meal</small></h1>
        </div>
        <form class="form-horizontal" action="" method="post" >
          <div class='alert alert-danger alert-block'  id="myAlert">
            <button type="button" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h3>You're sure that you'd like to delete <?=$meal[$i['Name']]?>?</h3>
                    <input type="submit" calue="delete" class="btn btn-danger" />
                    <input type="hidden" name="id" value="<?=$_REQUEST['id']?>">
          </div> 
        </form>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript">
      (function($){
        $(function(){
          
        });
      })(jQuery);
    </script>
  </body>
</html>