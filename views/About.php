<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>FoodCabulary</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
			<link rel="stylesheet" href="../rescources/css/aboutPage.css">
			
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	    <!--Defines the font-->
	    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	</head>

	<body>

			<?php
				include '../includes/masterPage.php';
				createAboutNavBar();
			?>
						
			<div class = "container">
			<h1>
			OUR STORY 
			</h1>
			</div>	

			<div class = "w3-container">
			<p>
			
			We are Emily, Patrizia and Dominic, three friends passionate about healthy cooking. </br>
			Our cultures and traditions are very different, which is why we decided to join forces to build this community. Welcome! 
			
			</p>

			</div>


			<div class = "w3-container">
			<h2>
			WANT TO KNOW MORE? CLICK ON OUR NAMES:

			</h2>


			</div>

			<div class = "container-fluid">

			<!-- Accordion -->

			<div class = "panel-group" id="myAccordion">

				<div class = "panel panel-warning">

					<div class = "panel-heading">

						<h3 class = "panel-title" data-target = "#panel-1" data-toggle = "collapse" data-parent = "#myAccordion">EMILY
						</h3>
					</div>
						<div class = "panel-collapse collapse" id="panel-1">

							<div class = "panel-body">
								<p style = "font-size: 30px; font-weight: bold; color: black"> 
								Hometown: Missoula </br>
								Favorite Sport: Track and Field </br>
								Favorite Hobby: Cooking </br>
								Favorite Food: BLA BLA
								</p>
							</div>

						</div>


				</div>

				<div class = "panel panel-default">

					<div class = "panel-heading">

						<h3 class = "panel-title" data-target = "#panel-2" data-toggle = "collapse" data-parent = "#myAccordion" >PATRIZIA
						</h3>
					</div>
						<div class = "panel-collapse collapse" id="panel-2">

							<div class = "panel-body">
								<p style = "font-size: 30px; font-weight: bold; color: black"> Patrizia, originally from Italy, came to the United States at the tender age of 19 to learn English. Here, she is experimenting a very different food tradition which brought her to appreciate the immense variety of food you can find in the US. She misses her Italian food though, that is why she gains 10lbs every time she goes back to visit her family. Her favorite food is Lasagna Bolognese.
								</p>
							</div>

						</div>


				</div>

				<div class = "panel panel-warning">

					<div class = "panel-heading">

						<h3 class = "panel-title" data-target = "#panel-3" data-toggle = "collapse" data-parent = "#myAccordion">DOMINIC
						</h3>
					</div>
						<div class = "panel-collapse collapse" id="panel-3">

							<div class = "panel-body">
								<p style = "font-size: 30px; font-weight: bold; color: black"> Hailing from England, home to the finest food known to man, Dominic’s discerning palate has been an invaluable addition to the FoodCabulary family.
								</p>
							</div>

						</div>


				</div>




			</div>

			</div>

			


			<!--
			<div class = "container">

			<footer class="footer">
			
					“One cannot think well, love well, sleep well, if one has not dined well.” 
					― Virginia Woolf, A Room of One's Own
			
			
			</footer>
			</div> -->
					
</body>
</html>