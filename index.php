<html>
	<head>
		<title>LivFit - Your personal fitness assistant</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
		
			<script type="text/javascript">
				var slideimages = new Array() // create new array to preload images
				slideimages[0] = new Image() // create new instance of image object
				slideimages[0].src = "images/slide/slide1.png" // set image src property to image path, preloading image in the process
				slideimages[1] = new Image()
				slideimages[1].src = "images/slide/slide2.png"
				slideimages[2] = new Image()
				slideimages[2].src = "images/slide/slide3.png"
			</script>
			
	</head>
	<body>
		<?php include ("header.php"); ?>
		<?php include ("nav.php"); ?>
			
		<div id=content >
			<h1>The World's Largest Online Fitness Site</h1>
			<!-- <center><img class="headerimg" src="images/sampol.jpg"></center> -->
			
			<center>
				<div id=slide>
					<script type="text/javascript">
						//variable that will increment through the images
						var step=0
						function slideit(){
							//if browser does not support the image object, exit.
							if (!document.images)
								return
							document.getElementById('slide').style.background = 'url("'+slideimages[step].src+'") no-repeat scroll left top rgba(38,70,121,0.3)' 
							if (step<2)
								step++
							else
								step=0
							//call function "slideit()" every x seconds
							setTimeout("slideit()",1500)
						}
						slideit()
					</script>
					
					<div id=slidetext>
						The largest selection of articles, exercises, workouts, professionals and fitness products. 
					</div>
					
				</div>
			</center>
			
			<!--<center><div id=headerimg> </div></center>-->
			<div align="center"> 
			<h3>Here is a quick glimpse into the world of workouts!</h3>
				<video autoplay controls loop>
				<source src="Sylvester.webm" type="video/webm">
				</video>
			</div>
			<div> 
				<img style="float: left; padding-right: 2em" src="images/rock 4.png">
				<p>We're the leader in all things fitness. Keep yourself updated on the latest advances in exercise.
				<h2>Access all these cool features, and more!</h2>
				<ul>
					<li>Schedule workouts</li>
					<li>Record progress</li>
					<li>Plan diets</li>
					<li>Discover techniques</li>
					<li>Inspire and get inspired</li>
				</ul>
				<p>Are you ready? Signing up is just a click away!
				<br>
			</div>
		</div>
		
		<?php include ("footer.php"); ?>
	</body>
</html>