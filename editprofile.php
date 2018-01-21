<html>
	<head>
		<title>LivFit - Edit Profile</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
	</head>
	<body onload=setDate()>
		<?php include ("header.php"); ?>
		<?php include ("nav.php"); ?>
		<h1>Edit your stats</h1>
		
		<?php
		
		if(isset($_SESSION['sid']) && isset($_SESSION['current_user']))
		{
			$conn = mysql_connect("localhost","root","");
			if (!$conn)
			{
				die('Could not connect: ' . mysql_error());
			}
			$db = mysql_select_db("livfit", $conn);
			$sql = "select * from users where username='".$_SESSION['current_user']."'";
			
			$result =  mysql_query($sql);
			while($row=mysql_fetch_array($result))
			{
				$fn=$row[0];
				$ln=$row[1];
				$un=$row[2];
				$pw=$row[3];
				$sx=$row[4];
				$dob=$row[5];
				$ht=$row[6];
				$wt=$row[7];
			}
			
			$time = strtotime($dob);		
			$yr=date('Y', $time);
			$mt=date('m', $time);
			$dt=date('d', $time);
		}
		else
			die('Error (not logged in?)');
		?>
		
		<!--<script src="js/editprofile.js" type="text/javascript"></script>-->
		
		<script>
			function setDate()
			{
				var jyr=<?php echo $yr ?>;
				var jmt=<?php echo $mt ?>;
				var jdt=<?php echo $dt ?>;
				
				var ylist=document.eform.birthday_year;
				for(i=0;i<ylist.options.length;i++)
				{    
					if (ylist.options[i].value==jyr)
					{
						ylist.options[i].selected=true;
						break;
					}
				}
				var mlist=document.eform.birthday_month;
				for(i=0;i<mlist.options.length;i++)
				{    
					if (mlist.options[i].value==jmt)
					{
						mlist.options[i].selected=true;
						break;
					}
				}
				var dlist=document.eform.birthday_day;
				for(i=0;i<dlist.options.length;i++)
				{    
					if (dlist.options[i].value==jdt)
					{
						dlist.options[i].selected=true;
						break;
					}
				}
			}

		</script>

		<form id="eform" name="eform" class=formwhite onsubmit="return validateEdit()" method="post" action="editquery.php">
		<br/>
		Username:&nbsp;
		<input type="text" style="background: rgba(255,0,48,0.1);" class="bmioutput" name="eUsername" value="<?php echo $un;?>" readonly>
		<br />
		
		Password:&nbsp;
		<input type="text" class="bmioutput" name="ePassword" value="<?php echo $pw;?>">
		<br />
		
		Firstname:&nbsp;
		<input type="text" class="bmioutput" name="eFirstname" value="<?php echo $fn;?>">
		<span class="alertmsg" id="test"></span>
		<br />
		
		Lastname:&nbsp;
		<input type="text" class="bmioutput" name="eLastname" value="<?php echo $ln;?>">
		<br />
		
		
		Sex:&nbsp;
		<input type="text" class="bmioutput" name="esex" value="<?php echo $sx;?>">
		<br />
		
		Birthday:&nbsp;				
		<select class="regdate" aria-label="Month" name="birthday_month" id="birthday_month" title="Month"><option value="0" selected="1">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
		&nbsp;
		<select class="regdate" aria-label="Day" name="birthday_day" id="birthday_day" title="Day"><option value="0" selected="1">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
		&nbsp;
		<select class="regdate" aria-label="Year" name="birthday_year" id="birthday_year" title="Year"><option value="0" selected="1">Year</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option></select>
		<br />
		
		Height (cm):&nbsp;
		<input type="text" class="bmioutput" name="eheight" value="<?php echo $ht;?>">
		<br />
		
		Weight (kg):&nbsp;
		<input type="text" class="bmioutput" name="eweight" value="<?php echo $wt;?>">
		<br />
			<input class=buttonsmall type="submit" value="Update">
		<br>
		</form>
		
	</body>
</html>