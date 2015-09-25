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
    <link rel="stylesheet" href="css/stylesheet.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    
    	<body>
		<div class="container">
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
				  <a class="navbar-brand" href="#">
				  	<object type="image/svg+xml" data="logo.svg" class="svg-logo"><img src="images/logo-01.png"><img alt="FitLog Logo" src="images/logo.png"></object></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="#">User Settings</a></li>
					<li><a href="#">Log out</a></li>
					<li><a href="#">Goals</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Name<span class="caret"></span></a>
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
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<a href="#" class="custom-icon-link">
									<div class="row custom-icon e-new-entry">
										<i class="glyphicon glyphicon-plus" title="new"></i>
									</div> 
									<div class="row custom-icon-text">
										New
									</div>
								</a>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<a href="#">
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
										<i class="glyphicon glyphicon-search" title="search"></i>
									</div> 
									<div class="row custom-icon-text">
										Search
									</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
								<form class="new-exercise-entry" style="display:none">
										Date of Exercise:   <input type="date" name="exercise-date"> <br>
									  Type of Exercise: <select>
  											<option value="endurance">Endurance/Cardio</option>
  											<option value="strength">Strength</option>
  											<option value="balance">Balance</option>
  											<option value="flexibility">Flexibility</option>
									</select> <br>
									Time Exercised <input type="number" name="exercise-time"><br>
								<textarea> Log anything else about your exercise here</textarea> <br>
								  <input type="submit" value="Submit">
								</form>
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
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<a href="#">
									<div class="row custom-icon">
										<i class="glyphicon glyphicon-plus" title="new"></i>
									</div> 
									<div class="row custom-icon-text">
										New
									</div>
								</a>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<a href="#">
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
										<i class="glyphicon glyphicon-search" title="search"></i>
									</div> 
									<div class="row custom-icon-text">
										Search
									</div>
								</a>
							</div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <script>
        $(document).ready(function(){
        	
        	function showExerciseForm() {
				 $( ".new-exercise.entry" ).show("slow");
			}
        	
        	$(".e-new-entry").click(showExerciseForm);	
        	
        	$( "form" ).submit(function( event ) {
  				if ( $( "input" ).val() === "yes" ) {
					 $( "p" ).show( 4000, function() {
      					$( this ).text( "Ok, DONE! (now showing)" );
					 });
  				}
  			$( ".new-exercise.entry" ).hide( "fast" );
 
  // Prevent form submission
  event.preventDefault();
});
        }); 
    
    </script>
  </body>
</html>