

<html>
<head>
	<link rel="stylesheet" type="text/css" href="yoga.css">
	<style type="text/css">




	
.ptag { 
 
 margin-left: 10mm;
 

 }

 .pouter{
 	margin-bottom: -4mm;
 	padding:0mm;
 	margin-top: 1mm;
 }


 </style>
</head>


<body>
<div id= "wrapper">

	<h1><b>&nbsp&nbsp&nbsp&nbsp&nbspPath of Light Yoga Studio</b></h1>

	<div id="nav">
			<nav>
			<button class="button"><a href="index.php" >Home</a></button> &nbsp; <button class="button"><a href="Classes.php">Classes</a></button class="button"> &nbsp; <button class="button"><a href="schedule.php">Schedule</a></button> &nbsp; <button class="button"><a href="register.php">Register</a></button> &nbsp; <button class="button"><a href="contact.php">Contact</a></button> &nbsp;
			</nav>
	</div>

    <div>
			<img src="yogalounge.jpg" style="float:left; width: 50%; height: 20%" >
	</div>

	<div id="bottom">
		
		<h2>Yoga Schedule</h2>
            
		<p> Mats, blocks, and blankets provided. Please arrive 10 minutes before your class begins. Relax in our Serenity Lounge before or after your class.<br><br> Monday---Friday
		
		<ul>

			<?php
			//Step1
 			$db = new mysqli('localhost','root','malissa','Yoga')
 					or die('Error connecting to MySQL server.');
			$query = "SELECT Classname,  Time_Format(time, '%h:%i %p' )
						from Class as c, Time as t, Days as d,  schedule as s
						where c.Classid = s.Classid and t.Timeid = s.Timeid and d.Daysid = 1 and s.Daysid = d.Daysid
						order by Time";

			$stmt = $db->prepare($query);

			$stmt->execute();

			$stmt->bind_result($class, $time);

			while($stmt->fetch()){
				echo "<li> $time $class </li>" ;
			}

			$stmt->close();

			?>
			<!--
			<li> 9:00am Gentle Hatha Yoga</li>
			<li> 10:30am Vinyasa Yoga</li>
			<li> 5:30pm Restorative Yoga</li>
			<li> 7:00pm Gentle Hatha Yoga</li>
		-->
		</ul><br> Saturday & Sunday

		<ul>
			<?php
			//Step1
 			$db = new mysqli('localhost','root','malissa','Yoga')
 					or die('Error connecting to MySQL server.');
			$query = "SELECT Classname,  Time_Format(time, '%h:%i %p' )
						from Class as c, Time as t, Days as d,  schedule as s
						where c.Classid = s.Classid and t.Timeid = s.Timeid and d.Daysid = 2 and s.Daysid = d.Daysid
						order by Time";

			$stmt = $db->prepare($query);

			$stmt->execute();

			$stmt->bind_result($class, $time);

			while($stmt->fetch()){
				echo "<li> $time $class </li>" ;
			}

			$stmt->close();

			?>
      	</p>

	</div>




<div>
<footer>

	Copyright © 2016 Path of Light Yoga Studio <br> <a href="malissa@figer.com">malissa@figer.com</a>

</footer>
</div>
</div>
</body>
</html>