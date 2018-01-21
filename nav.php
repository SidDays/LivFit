<!-- Reuse the navigation bar code -->
<div id=nav>
		<p><a href="gyms.php">Home</a> |
		<a href="bmi.php">BMI Calculator</a> |
		
		<?php
			if(isset($_SESSION['sid']) && isset($_SESSION['current_user']))
			{
				echo '<a href="wplanner.php">Workout Planner</a> | ';
				echo '<a href="diethome.php">Diet Planner</a> | ';
			}
		?>
		
		<a href="kb.php">KnowledgeBase</a> |
		<a href="quizzes.php">Quizzes</a> |
		<a href="feedback.php">Feedback</a>
</div>