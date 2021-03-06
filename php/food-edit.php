<?php
    session_start();
    
  $food = $_SESSION['food'];
  if($_POST){
    if(isset($_GET['id'])){
      $food[$_GET['id']] = $_POST;
    }else{
      $food[] = $_POST;
    }
    
    $_SESSION['food'] = $food;
    header('Location: ./');
  }
    
  if(isset($_GET['id'])){
    $meal = $food[$_GET['id']];
  }else{
    $meal = array();
  }
  
    $name = 'Shauna Keating';
    
    $exer = $_SESSION['exercise'];
    if(!$exer){
      $_SESSION['exercise'] = $exer = array(
          array( 'Type' => 'Running', 'Date' => strtotime("-1 hour"), 'Time' => 4 ),
          array( 'Type' => 'Situps', 'Date' => strtotime("now"), 'Time' => 10 ),
          );
    }
    
       $total = 0;
    foreach ($food as $meal) {
        $total += $meal['Calories'];
    }
    
    $totalex = 0;
    foreach ($exer as $run) {
        $totalex += $run['Time'];
    }
    
    $dietTotal = $total / 2000 * 100;
    $exTotal = $totalex / 30 * 100;
    


    //var_dump( $_GET );
   // var_dump( $_POST );
   // var_dump( $_REQUEST );
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food Log: Edit</title>

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
          <h1>Add or Edit a Meal<br> <small>Enter a meal here!</small></h1> 
        <form class="form-horizontal" action="./" method="post" >
          <div class='alert' style="display: none" id="myAlert">
            <button type="button" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h3></h3>
          </div> 
          <div class="form-group">
            <label for="txtName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtName" name="Name" placeholder="Meal's Name" value="<?=$meal['Name']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="txtCalories">Calories</label>
            <div class="col-sm-10">
                  <input type="number" class="form-control" id="txtCalories" name="Calories" placeholder="Calories in this meal" value="<?=$meal['Calories']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="txtDate">When did you eat</label>
            <div class="col-sm-10">
                  <input type="date" class="form-control" id="txtDate" name="Time" placeholder="Date" alue="<?=$meal['Time']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success" id="submit">Record</button>
            </div>
          </div>
        </form>
        <div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 0%">
                <span >0</span>% Complete
              </div>
        </div>
    </div>
    </div>
    

    			</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.2/toastr.min.js"></script>
    <script type="text/javascript">
      (function($){
        $(function(){
          
          $("#submit").on('click', function(e){
            var self = this;
            //$(self).css({display: "none"});
            $(self).hide().after("Working...");
            
            var per = 0;
            var interval = setInterval(function(){
              per += 25;
              $(".progress-bar").css("width", per + "%");
              $(".progress-bar span").text(per);
              if(per >= 100){
                clearInterval(interval);
                
                if( !$("#txtDate").val() ){
                  $("input").css({ backgroundColor: "#FFAAAA"});
                  $(self).prop("disabled", false).html("Try Again");
                  $("#myAlert").removeClass("alert-success").addClass("alert-danger").show()
                    .find("h3").html("You must enter a date");
                  toastr.error("You must enter a date");
                  
                }else{
                  // Display success
                  $("#myAlert").removeClass("alert-danger").addClass("alert-success").show()
                    .find("h3").html("Yay! You did it.");
                  toastr.success("Yay! You did it.")
                  
                }
                
                
              }
            }, 200);
            //return false;
          });
          $(".close").on('click', function(e) {
              $(this).closest(".alert").slideUp()
          });
          $("input[type='number']").spinner();
          $("input[type='date']").datepicker();
        });
      })(jQuery);
    </script>
  </body>
</html>