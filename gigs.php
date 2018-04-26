<!doctype html>

<head>
	<title> Monkeybite </title>

	<link rel="stylesheet" href="css/main.css"> 
	<link rel="stylesheet" href="css/gigs.css"> 

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="javascript/gigs.js"></script>



</script>

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



	    <div class="container1">
	    	<h class = "shows"> Upcoming Shows </h>
			<div class="row">
				<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
					<ul class="event-list">

					<?

						echo <<<END
						<li>
							<time datetime="2016-02-14">
								<span class="day">14</span>
								<span class="month">Feb</span>
								<span class="year">2016</span>
								<span class="time">ALL DAY</span>
							</time>
						
							<div class="info">
								<h2 class="title">Monkeybite</h2>
								<p class="desc">Book of Revelation Conference begins with Dr. Charles Massegee.<br>5:00 p.m. Sunday and 7:00 p.m. Monday - Wednesday</p>
							</div>

						</li>
	                    <li class="event-details">
	                        <div class="info" style="height:auto">
	                            <p class="desc">This internationally-known author and conference speaker will keep you on the edge of your seat as he brings Book of REVELATION alive! </p>    
	                        </div>
	                    </li>
END;
?>
					</ul>
				</div>
			</div>
		</div>

</body>