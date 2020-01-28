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

        #carousel {
            /*margin-bottom: 10px;*/
/*            background-color: #789986;*/
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

    </style>

    <title>Brooklyn Heights Pilates</title>

</head>

<body>
		<!--Form for Emergency Contact Information-->

	<?php require_once('nav.php'); ?>
	     	<form action="dh.php" method="post">
				Name: <input type="text" name="name"><br>
				Relationship: <input type="text" name="relationship"><br>
				E-mail: <input type="text" name="email"><br>
				Phone Number: <input type="text" name="phone"><br>
				<input type="submit">
			</form>

		</body>

		</html>
