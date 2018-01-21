<!DOCTYPE HTML>
<html>
	<head>
		<title>LivFit - KnowledgeBase</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
	</head>
	<body>
		<?php include ("header.php"); ?>
		<?php include ("nav.php"); ?>
		
		<div id=content>
			<h1>Know Your Workouts</h1>
			<p>Learn about the many ways to perfect your physique.</p>
			<script type="text/javascript">
			
				
				xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET", "kb.xml", false);
				xmlhttp.send();
				myXML = xmlhttp.responseXML; 
				
				var muscleNodes;
				var muscleName, muscleImage;
				
				var typeNodes;
				var typeName, typeDesc;
				
				var exerciseNodes;
				var exerciseName, exerciseImage;
				
				muscleNodes = myXML.getElementsByTagName("muscle");
				for(i = 0; i < muscleNodes.length; i++)
				{
					muscleName = muscleNodes[i].getAttribute("name");
					muscleImage = new Image();
					muscleImage.src = muscleNodes[i].getAttribute("image");
					
					document.write("<h2 id=\""+muscleName+"\" class=\"muscle\">"+muscleName+"</h2>");
					document.write("<p> <img src=\""+muscleImage.src+"\" /> </p>");
				
					typeNodes = muscleNodes[i].getElementsByTagName("type");
					
					document.write("<div class = \"musclegroup\">");
					// document.write("<ul>");
					for(j = 0; j < typeNodes.length; j++) {
						// document.write("<li>");
						typeName = typeNodes[j].getAttribute("name");
						typeDesc = typeNodes[j].getAttribute("desc");
						document.write("<h3>"+typeName+"</h3>");
						document.write("<p>"+typeDesc+"</p>");
						exerciseNodes = typeNodes[j].getElementsByTagName("exercise");
						
						document.write("<ol>");
						for(k = 0; k < exerciseNodes.length; k++) {
							exerciseName = exerciseNodes[k].getAttribute("name");
							exerciseImage = exerciseNodes[k].getElementsByTagName("image")[0].childNodes[0].nodeValue;
							document.write("<li>"+exerciseName);
							document.write("<br /> <br />");
							document.write("<img class=\"kbworkout\" src=\""+exerciseImage+"\"></img>");
							document.write("<br /> <br />");
							document.write("</li>");
						}
						document.write("</ol>");
						// document.write("</li>");
					}
					// document.write("</ul>");
					document.write("</div>");
				}
				

				
			</script>
			
		</div>
		
		<?php include ("footer.php"); ?>

	</body>
</html>