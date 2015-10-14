<?php 

session_start();
	$name = 'Shauna Keating';
		    $message = "Welcome $name";
	$person = array('Name' => $name, 'Age' => 21, 'Calorie Goal' => 2000);
	
	$food = $SESSION['food'];
		if(!$food) {
			$_SESSION['food'] = $food = array(
        array( 'Name' => 'Breakfast', 'Time' => strtotime("-1 hour"), Calories => 400 ),
        array( 'Name' => 'Lunch', 'Time' => strtotime("now"), Calories => 800 ),
        array( 'Name' => 'Snack', 'Time' => strtotime("now + 1 hour"), Calories => 400 ),
        array( 'Name' => 'Dinner', 'Time' => strtotime("6pm"), Calories => 400 ),
        );
        
		}
		
		
	    $food = $_SESSION['food'];
    if ($_POST){
        $food[] = $_POST;
        $_SESSION['food'] = $food;
        header('Location: ./');
    }
    	
    
    $total = 0;
    foreach ($food as $meal) {
        $total += $meal['Calories'];
    }
    
    
	$name = 'Shauna Keating';
	$person = array('Name' => $name, 'Age' => 21, 'Calorie Goal' => 2000);

	$food = array(
		array('Name' => 'Breakfast', 'Time' => strtotime("one hour ago"), 'Calories' => 400),
		array('Name' => 'Lunch', 'Time' => strtotime("now"), 'Calories' => 800),
		array('Name' => 'Snack', 'Time' => strtotime("now + 1 hour"), 'Calories' => 400),		
		array('Name' => 'Dinner', 'Time' => strtotime('6pm'), 'Calories' => 400),			
		);
		
	$total = 0;
	foreach ($food as $meal) {
		$total += $meal['Calories'];
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Track Your Fitness</title>

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
				  <a class="navbar-brand" href="#"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="91 -165.5 437 106.5" style="enable-background:new 91 -165.5 437 106.5;" xml:space="preserve">
						<style type="text/css">
							.st0{fill:#231F20;}
							.st1{fill:none;}
							.st2{font-family:'SourceSansPro-BlackIt';}
							.st3{font-size:108px;}
							.st4{font-family:'SourceSansPro-SemiboldIt';}
						</style>
						<g>
							<path id="path8248" class="st0" d="M172.2-141.8c4.7,0,8.5-3.9,8.5-8.6c0-4.8-3.8-8.6-8.5-8.6c-4.7,0-8.5,3.9-8.5,8.6
		C163.7-145.7,167.5-141.8,172.2-141.8"/>
							<path id="path8256" class="st0" d="M142.9-135.4l-13.2,15.5c-0.8,1-2,1.6-3.3,1.6c-2.4,0-4.3-1.9-4.3-4.3c0-1.3,0.6-2.5,1.4-3.3
		l14.3-16.7c0.8-1,2-1.6,3.3-1.6l20.7,0c1.5,0,2.9,0.6,3.9,1.6l13.2,13.3l10.9-11c0.8-0.7,1.8-1.1,2.8-1.1c2.4,0,4.4,2,4.4,4.5
		c0,1.1-0.4,2.1-1,2.8l-13.2,13.4c-4,4-7.2,0.6-7.2,0.6l-8.1-8.2l-12.6,14.8l11.6,11.7c0,0,2.4,2.3,1,6.9l-6.5,29.3
		c-0.5,2.5-2.7,4.5-5.4,4.5c-3,0-5.5-2.5-5.5-5.6c0-0.5,0.1-1,0.2-1.4l5.3-24L142.5-105l-11.3,12.8c0,0-1.8,2.3-6.7,2.1l-22.9,0
		c-2.6,0-4.9-1.7-5.5-4.4c-0.7-3,1.1-5.9,4.1-6.6c0.5-0.1,0.9-0.1,1.4-0.1l19.7,0.1l29.2-34.3L142.9-135.4L142.9-135.4z"/>
						</g>
						<rect x="197" y="-148.5" class="st1" width="478" height="179"/>
						<text transform="matrix(1 0 0 1 197 -72.2529)"><tspan x="0" y="0" class="st2 st3">Fit</tspan><tspan x="147.5" y="0" class="st4 st3">Log</tspan></text>
					</svg>
				</a>
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
		<div class="container">
			<div class="row">	
				<!-- Start: Left Only Desktop Panel -->			
				<div class="col-md-4 col-lg-4 no-phone text-center" style="">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h3>Percentage Daily Values</h3>
					</div>
					<!-- Start: Progress Bar -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">
							<div class="col-xs-1 col-sm-1 col-md-6 col-lg-6 text-left">Calories</div>
							<div class="col-xs-1 col-sm-1 col-md-6 col-lg-6 text-right">588/2000</div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
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
				<!-- Start: Right Panels -->
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<!-- Start: Panel Filter -->
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
						<div class="input-group">
							<input type="text" class="form-control input" placeholder="search your entries" id="panel-search-text">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button" id="panel-seach-btn">Search!</button>
							</span>
						</div>
								
					</div>
					<!-- End: Panel Filter -->
					
					
					
					<!-- Start:Panel-->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="panel panel-default opt-panel">
						  <div class="panel-heading">
							<h3 class="panel-title">Exercise Entries</h3>
						  </div>
						  <div class="panel-body text-center">
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<a href="exercise-edit.php">
									<div class="row custom-icon">
										<i class="glyphicon glyphicon-edit" title="edit"></i>
									</div> 
									<div class="row custom-icon-text">
										Edit
									</div>
								</a>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<a href="#">
									<div class="row custom-icon">
										<i class="glyphicon glyphicon-list" title="view all"></i>
									</div> 
									<div class="row custom-icon-text">
										All
									</div>
								</a>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<a href="#">
									<div class="row custom-icon">
										<i class="glyphicon glyphicon-trash" title="delete all"></i>
									</div> 
									<div class="row custom-icon-text">
										Delete All
									</div>
								</a>
							</div>
						  </div>
						</div>
					</div>
					<!--End:Panel-->
					
					
					<!-- Start:Panel-->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="panel panel-default opt-panel">
						  <div class="panel-heading">
							<h3 class="panel-title">Diet Entries</h3>
						  </div>
						  <div class="panel-body text-center">
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<a href="food-edit.php">
									<div class="row custom-icon">
										<i class="glyphicon glyphicon-edit" title="edit"></i>
									</div> 
									<div class="row custom-icon-text">
										Edit
									</div>
								</a>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<a href="#">
									<div class="row custom-icon">
										<i class="glyphicon glyphicon-list" title="view all"></i>
									</div> 
									<div class="row custom-icon-text">
										All
									</div>
								</a>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<a href="#">
									<div class="row custom-icon">
										<i class="glyphicon glyphicon-trash" title="delete all"></i>
									</div> 
									<div class="row custom-icon-text">
										Delete All
									</div>
								</a>
							</div>
							
							<table class="table table-condensed table-striped table-bordered table-hover">
              					<thead>
               					 <tr>
                 					 <th>#</th>
                 					 <th>Name</th>
                 					 <th>Time</th>
                 					 <th>Calories</th>
               					 </tr>
             					 </thead>
             					 <tbody>
      
               						 <?php foreach($food as $i => $meal): ?>
                						<tr>
                 						 <th scope="row"><?=$i?>
                 						 		<a href="food-delete.php" title="delete" class="btn btn-default" >
                 						 			<i class="glyphicon glyphicon-remove"></i> 
                 						 		</a>
                 						 	</th>
                 							 <td><?=$meal['Name']?></td>
                 							 <td><?=date("M d Y  h:i:sa", $meal['Time'])?></td>
                 							 <td><?=$meal['Calories']?></td>
               								 </tr>
                					<?php endforeach; ?>
            					  </tbody>
           						 </table>  
						  </div>
						</div>
					</div>
					<!--End:Panel-->
					
				</div>
				<!--End: Right Panels -->					
			</div>		
			
		</div>
    
      
      
      
  
  
  
  <!-- Bootstrap core JavaScript-->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.1.6/zepto.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <script>

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
            //jquery + javascript go here
    </script>
  </body>
</html>