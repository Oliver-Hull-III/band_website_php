<?php
	require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: admin.php');
		exit();
	}

	$redirectURL = "http://localhost:8888/monkeybitemusic.com/fb-callback.php";
	$permissions = ['user_events','email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
?>

<!doctype html>

<head>
	<title> Monkeybite - Admin </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="css/main.css"> 

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>


<body>
	

	<!-- header -->
	<div class="header" width = "100%">
	
		<a href="#home" id="monkeybite" class="navbar" > MONKEYBITE </a>
		<a href="#gigs" class="navbar"> gigs </a>
		<a href="#store" class="navbar"> store </a>
		<a href="#music" class="navbar"> music </a>

		<a href="#contact" class="navbar"> contact </a>


		<a href="https://www.instagram.com/nickmarino18/" class="fa fa-instagram fa-3x icons"></a>
		<a href="https://www.facebook.com/monkeybitemusic/" class="fa fa-facebook fa-3x icons"></a>
		<a href="http://soundcloud.com/monkeybitemusic" class="fa fa-soundcloud fa-3x icons"></a>
		</div>



	</div>

	<div class="container" style="margin-top: 100px">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<img src="images/logo.png"><br><br>
				<form>
					<input name="email" placeholder="Email" class="form-control"><br>
					<input name="password" type="password" placeholder="Password" class="form-control"><br>
					<input type="submit" value="Log In" class="btn btn-primary">
					<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Facebook" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>






</body>