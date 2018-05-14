<?php
//Step1
 $db = mysqli_connect('localhost','root','malissa','Yoga')
 or die('Error connecting to MySQL server.');
?>

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
	<h1><b>&nbsp&nbsp&nbsp&nbsp&nbspPath of Light Yoga Studio </b></h1>

		<div id="nav">
			<nav>
			<button class="button"><a href="index.php" >Home</a></button> &nbsp; <button class="button"><a href="Classes.php">Classes</a></button class="button"> &nbsp; <button class="button"><a href="schedule.php">Schedule</a></button> &nbsp; <button class="button"><a href="register.php">Register</a></button> &nbsp; <button class="button"><a href="contact.php">Contact</a></button> &nbsp;
			</nav>
		</div>

        <div>
			<img src="yogamat.jpg" style="float:left; width: 50%; height:20% ">
		</div>

		<div id="bottom">
			<br>
			<h2>Yoga Classes</h2>

				<?php $result=mysqli_query($db,"select * from Class"); ?>

				<?php echo "<p>"; 
				while($row=mysqli_fetch_assoc($result)):
					echo "<b>".$row['Classname']."</b><br>";
					echo $row['Description']."<br>";

				endwhile;?> 
				
 
				<!--while($row=mysqli_fetch_array($result))
				{
         			echo $row['Classname'].' '.$row['Description'].'<br/>';
 				}-->	



			<!--<p class="pouter" align="justify"><b>Gentle Hatha Yoga</b> </p> 
			<p class="ptag">Intended for beginners and anyone wishing a grounded foundation in the practice of yoga, this 60 minute class of poses and slow movement focuses on asana (proper alignment and posture), and pranayama (breath work), and guided meditation to foster your mind and body connection.
			</p>

			<p class="pouter" align="justify"><b>Vinyasa Yoga</b></p> 
			<p class="ptag">Although designed for intermediate to advanced students, beginners are welcome to sample this 60 minute class that focuses on breath-synchronized movement---you will inhale and exhale as you flow energetically through yoga poses.
			</p>

			<p class="pouter" align="justify"><b>Restorative Yoga</b></p> 

			<p class="ptag">This 90 minute class features very slow movement and long poses that are supported by a chair or wall. This calming, restorative experience is suitable for students of any level of experience. This practice is can be a perfect way to help rehabilitate an injury.
			</p>-->
		</div>

         <div>
			<footer>

			Copyright © 2016 Path of Light Yoga Studio <br> <a href="malissa@figer.com">malissa@figer.com</a>

			</footer>
		</div>

</div>
</body>
</html>