<?php

	$sql = "SELECT fid, username, comment, rating FROM feedback";
	$result = mysqli_query($conn, $sql);
	
	
	
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		
		for($i = 0; $i<4096; $i++)
		{
			echo "<!-- Lol you can't see this :P -->";
		}

		echo "<table class='feedback_table'>
			<tr>
				<th>No.</th>
				<th>User</th>
				<th>Comment</th>
				<th>Rating</th> ";
		// echo "<th>Date</th>";
		echo "</tr>";
		
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row["fid"]."</td>";
			echo "<td>".$row["username"]."</td>";
			echo "<td>".$row["comment"]."</td>";
			
			$rating = $row["rating"];
			if($rating > 0) {
				echo "<td>";
				for($i = 0; $i<$rating; $i++)
					echo "<img src=\"images/ui/star.gif\"></img>&nbsp;";
				
				echo "</td>";
			}
			else
				echo "<td>n/a</td>";
				
			// echo "<td>".$row["stamp"]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	} else {
		echo "0 results";
	}
	flush();
	
?>