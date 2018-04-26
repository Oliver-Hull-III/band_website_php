<!doctype html>
<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
	if(!empty($_POST['add'])){


		require_once 'admin_login.php';
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);
          
		for($i=0; $i < count($_POST['add']); $i++){
			
                    $index = $_POST['add'][$i];
                    $event = $_SESSION["userData"]["events"][$index];
                    
                    $test = strtotime($event['start_time']);
                    
                /*
                    $query = "INSERT INTO events VALUES()";  //no duplicates


                    $result   = $conn->query($query);

                    if (!$result) echo "INSERT failed: $query<br>" . $conn->error . $id . "<br><br>";
		*/
                }
                     

	}
?>
<head>
	<title> Monkeybite </title>

	<link rel="stylesheet" href="css/main.css"> 
	<link rel="stylesheet" href="css/admin.css"> 
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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

			<div class="col-md-9">
				<table class="table table-hover table-bordered">
					<tbody>
					
						<?php


							echo'<form action="admin.php" method="post">';

						    for($j = 0; $j<count($_SESSION['userData']['events']); $j++){
                                                        
                                                        $event = $_SESSION["userData"]["events"][$j];
                                                        $img_url =  $event[cover][source];
						       	echo '<tr> <td> <input type="checkbox" name="add[]" value= '. $j .' > </td>';
						        echo "<td> <img src=$img_url width= 300px height= 300px > </td> <td> $event[name] </td> </tr>";
                                                    }
						    echo '<tr> <td></td><td> <input type="submit" name="formSubmit" value="Add Events" /> </td> </tr></form>';
						?>
                                     
					</tbody>
				</table>
			</div>
		</div>
	</div>


</body>