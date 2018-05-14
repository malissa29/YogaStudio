<?php
//Step1
 $db = mysqli_connect('localhost','root','malissa','Yoga')
 or die('Error connecting to MySQL server.');
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="yoga.css">
	<style type="text/css">

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


		
			<img src="yogadoor2.jpg" float:left; 
			width= "170" height= "250">
		

		<div id="right">
			<h2>Find Your Inner Light</h2>

			<p> 
			Path of Light Yoga Studio provides all levels of Yoga practice in a tranquil, peaceful environment. Whether you are new to yoga or an experienced practitioner, our dedicated instructors can develop a practice to meet your needs. Let your inner light shine at the Path of Light Yoga Studio.
			</p>

			<ul>
			<li>Hatha, Vinyasa and Restorative Yoga classes</li>
			<li>Drop-ins welcome</li>
			<li>Mats, blocks, and blankets provided</li>
			<li>Relax in our Serenity Lounge before or after your class</li>
			</ul>
		</div>


		<div id="bottom">
			<p>
			Path of Light Yoga Studio <br> 612 Serenity Way <br> El Dorado, CA 96162
			</p>

			<p>
			888-555-5555
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