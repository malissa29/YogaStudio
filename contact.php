
<html>
<head>
	<link rel="stylesheet" type="text/css" href="yoga.css">  
</head>



<body>
<div id= "wrapper">
	<h1><b>&nbsp&nbsp&nbsp&nbsp&nbspPath of Light Yoga Studio</b></h1>
		<div id="nav">
			<nav>
			<button class="button"><a href="index.php" >Home</a></button> &nbsp; <button class="button"><a href="Classes.php">Classes</a></button class="button"> &nbsp; <button class="button"><a href="schedule.php">Schedule</a></button> &nbsp; <button class="button"><a href="register.php">Register</a></button> &nbsp; <button class="button"><a href="contact.php">Contact</a></button> &nbsp;
			</nav>
		</div>


<?php
//Step1
 $db = new mysqli('localhost','root','malissa','Yoga')
 or die('Error connecting to MySQL server.');

 $flag = true;

 $message = "";


 if(isset($_POST["submit"])){

	 $name = $_POST["name"];
	 $email = $_POST["email"];
	 $comments = $_POST["comments"];

	 if (! filter_var($email, FILTER_VALIDATE_EMAIL) and strcmp($email, "") != 0) {
		 $message = $message."This ($email) email address is not considered valid.\n";
		 $flag = false;

	 }

	        
	if (strcmp($name, "") == 0 || strcmp($email, "") == 0  || strcmp($comments, "") == 0 ){
	    $message = $message."<br/>"."Fields highlighted in * can't be blank.\n";
	    $flag = false;
	}
	        
	if($flag){
		$query = "INSERT INTO `Contact` (`Name`, `Email`, `Comments`) VALUES (?, ?, ?);";


		 $stmt = $db->prepare($query);
		 $stmt->bind_param("sss", $name, $email, $comments);
		 $stmt->execute();
		 $stmt->close();

	}


}


?>


		<div>

			<div id ="msg" style = "color : red" >
                <?php

                    if($flag and isset($_POST["submit"]))
                        echo "Record inserted successfully" ;
                    else
                        echo $message;
                ?>

            </div>
			<h2>Contact Path of Light Yoga Studio</h2>
			<p> Required information is marked with an asterisk(*).</p>
			<form name="contact" method="post">
				<!--<p class="required">--> <p> <label for ="name"> *&nbspName: </label> <input type="text" name="name" size="20"><br> </p>
				<!--<p class="required">--> <p> <label for ="email"> *&nbspE-mail: </label> <input type="text" name="email" size="20"> </p>
				<!--<p class="required">--> <p> <label for ="comments"> *&nbspComments: </label> <textarea id ="com" rows="10" cols="30" name="comments"></textarea></p>
            	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="Send Now">
            </form>

		</div>





<div>
<footer>

	Copyright © 2016 Path of Light Yoga Studio <br> <a href="malissa@figer.com">malissa@figer.com</a>

</footer>
</div>
</div>
</body>
</html>