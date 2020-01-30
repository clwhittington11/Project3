<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--     Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- My CSS -->
	<style>
		* {
			font-family: serif;
			font: Georgia;
		}
		.hero {
			background-color: #789986;
			text-align: center;
			/*            margin-bottom: 10px;*/
			padding: 20px;
		}

		.btn {
			background-color: #776A61;
			border: #776A61;
		}

		.btn:hover {
			background-color: #789986;
			border: #789986;
		}

		.container {
			background-color: #789986;
			width: 100%;
			padding: none;
			margin: none;
		}

		.card {
			background-color: #789986;
			text-align: center;
			font-size: 30px;
			border: none;
			border-radius: 0px;
		}

		.card2 {
			background-color: #0000;
			border-radius: 0px;
			text-align: center;
		}

		.card-title2 {
			text-align: center;
		}

		#myBtn {
			position: fixed;
			bottom: 20px;
			right: 20px;
			z-index: 99;
			border: none;
			outline: none;
			background-color: floralwhite;
			color: black;
			cursor: grab;
			padding: 10px;
			border-radius: 10px;
			font: Georgia;
			font-size: 14px;
		}

		#myBtn:hover {
			background-color: #776A61;
			color: white;
		}
		
		.text-center {
			color: #789986;
			font-size: 30px;
		}

	</style>

	<title>Brooklyn Heights Pilates</title>

</head>

<body>
	<!-- Navbar-->
	<?php require_once('nav.php');?>
	<h1 class="text-center">Employee Emergency Contact Information</h1>
		<table class="table">
		<tr>
			<th>Employee's Name</th>
			<th>Emergency Contact's Name</th>
			<th>Relationship</th>
			<th>Email</th>
			<th>Phone</th>
		</tr>
		
		<?php
		//while in the table, get the json data
		$d = file_get_contents('data.json');
		//convert the data to a php array so we can work with it
		$d = json_decode($d, true);
		
		//loop through the data to create dynamic html
		foreach($d as $k => $o){
			//for each object in our data, create a table row with table cells. in each table cell, concatenate values from the object we are looping through
			echo '<tr>
					<td>'.$o['employee'].'</td>
					<td>'.$o['name'].'</td>
					<td>'.$o['relationship'].'</td>
					<td>'.$o['email'].'</td>
					<td>'.$o['phone'].'</td>
				</tr>';
		}
	?>

	</table>
	<hr>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>
