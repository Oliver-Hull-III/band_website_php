<!doctype html>
<?
	

?>
<head>
	<title> Monkeybite </title>

	<link rel="stylesheet" href="../../css/main.css"> 
	<link rel="stylesheet" href="../../css/addevent.css"> 

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="flip.js"></script>
<script src="homepage.js"></script>



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


	<div class = "addevent">
		<form action = "addevent.php" method="get">
			<label>Title </label> <input type ="text" name="title" placeholder="Monkeybite Live in Concert"> <br>
			<label> Location:</label> <input type ="text" name="location" placeholder="Madison Square Garden"> <br>
			<label>City: </label> <input type ="text" name="city" placeholder="New York" ><br>
			<label>State: </label>
			<select>
				<option value="AL">AL</option>
				<option value="AK">AK</option>
				<option value="AR">AR</option>	
				<option value="AZ">AZ</option>
				<option value="CA">CA</option>
				<option value="CO">CO</option>
				<option value="CT">CT</option>
				<option value="DC">DC</option>
				<option value="DE">DE</option>
				<option value="FL">FL</option>
				<option value="GA">GA</option>
				<option value="HI">HI</option>
				<option value="IA">IA</option>	
				<option value="ID">ID</option>
				<option value="IL">IL</option>
				<option value="IN">IN</option>
				<option value="KS">KS</option>
				<option value="KY">KY</option>
				<option value="LA">LA</option>
				<option value="MA">MA</option>
				<option value="MD">MD</option>
				<option value="ME">ME</option>
				<option value="MI">MI</option>
				<option value="MN">MN</option>
				<option value="MO">MO</option>	
				<option value="MS">MS</option>
				<option value="MT">MT</option>
				<option value="NC">NC</option>	
				<option value="NE">NE</option>
				<option value="NH">NH</option>
				<option value="NJ">NJ</option>
				<option value="NM">NM</option>			
				<option value="NV">NV</option>
				<option value="NY" selected="selected">NY</option>
				<option value="ND">ND</option>
				<option value="OH">OH</option>
				<option value="OK">OK</option>
				<option value="OR">OR</option>
				<option value="PA">PA</option>
				<option value="RI">RI</option>
				<option value="SC">SC</option>
				<option value="SD">SD</option>
				<option value="TN">TN</option>
				<option value="TX">TX</option>
				<option value="UT">UT</option>
				<option value="VT">VT</option>
				<option value="VA">VA</option>
				<option value="WA">WA</option>
				<option value="WI">WI</option>	
				<option value="WV">WV</option>
				<option value="WY">WY</option>
			</select>	<br>	
					<label>Time:</label> <input type="datetime-local" name="time"><br>
					<input type="submit" value="Add Event">

		</form>
	</div>




</body>