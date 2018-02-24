<?php 
	session_start();
	
	if (isset($_SESSION['success'])) {
		$successMessage = "Message send, you'll here from us verry soon";
		$successSessionIsSet = true;
		session_unset();
	} else{
		$successMessage = '';
	}
	
	if (isset($_SESSION['error'])) {
		$errorMessage = 'Oops, something went wrong';
		$errorSessionIsSet = true;
		session_unset();
	} else{
		$errorMessage = '';
	}
	// session_unset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta property="og:url" content="" />
	<meta property="og:image" content=""/>
	<meta property="og:title" content="advocatenkantoor" />
	<meta property="og:description" content="advocatenkantoor"/>
    
	<title>advocatenkantoor</title>  

	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png">
	<link href='https://fonts.googleapis.com/css?family=Oswald|Poiret+One|Yanone+Kaffeesatz|Roboto+Condensed:300|Italianno' rel='stylesheet' type='text/css'>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?> 
</head>
<body>
	<div class="noColPadding col-md-12 col-md-offset-0 col-xl-12 col-xl-offset-0">
		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0 navbarContent">
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" 
				            data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <a class="navbar-brand">
				    	<span><img class="navbarImage" src="<?php bloginfo('template_url'); ?>/img/logoGriffinVereptTransparant2.png" alt="brandLogo"></span>
				   	</a>
				</div>

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right pull-right">
						<li class="navitem"><a class="home" href="#header">HOME</a></li>
						<li class="navitem griffin"><a href="#section1">GRIFFIN VEREPT</a></li>
						<li class="navitem"><a href="#section2">MATERIES</a></li>
						<li class="navitem"><a href="#section3">ERELOON</a></li>
						<li class="navitem"><a href="#section4">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>