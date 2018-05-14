
<html>
<head>
    <link rel="stylesheet" type="text/css" href="yoga.css">
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="yoga.js" >
</script> 
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
 $phone = $_POST["phone"];
 $address = $_POST["address"];
 $class = $_POST["toclass"];
 $days = $_POST["days"];
 $time = $_POST["time"];
 $password = $_POST['password'];


 if (! filter_var($email, FILTER_VALIDATE_EMAIL) and strcmp($email, "") != 0) {
    $message = $message."This ($email) email address is not considered valid.\n";
    $flag = false;

}

if (! preg_match('/([0-9]{10})/', $phone) and strcmp($phone, "") != 0) {
    $message = $message."<br/>"."This ($phone) phone number is not considered valid.\n";
    $flag = false;

}

if (strcmp($name, "") == 0 || strcmp($email, "") == 0 || strcmp($phone, "") == 0 || strcmp($address, "") == 0 || strcmp($class, "") == 0 || strcmp($days, "") == 0 || strcmp($time, "") ==0 ){
    $message = $message."<br/>"."Fields highlighted in * can't be blank.\n";
    $flag = false;
}

if (! preg_match('/(^(?=.*[A-Z]).{8,16}$)/', $password) and strcmp($password, "") != 0) {
    $message = $message."<br/>"."Password must be 8-16 alphnumeric charecters with atleast 1 Uppercase\n";
    $flag = false;
}



if($flag){
    $query = "INSERT INTO `Client` (`Name`, `Address`, `Phone`, `Email`, Password) VALUES (?, ?, ?, ?, ?);";


 $stmt = $db->prepare($query);
 $stmt->bind_param("ssiss", $name, $address, $phone, $email, $password);


 $stmt->execute();

 $id = $stmt->insert_id;

 $stmt->close();

 $query = "INSERT INTO `client-schedule` (`Clientid`, `Timeid`, `Classid`, `Daysid`) VALUES (?, ?, ?, ?);";

 $stmt = $db->prepare($query);
 $stmt->bind_param("iiii", $id, $time, $class, $days);

 $id = $stmt->execute();

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
			<h2>Register Path of Light Yoga Studio</h2>
			<p> Required information is marked with an asterisk(*).</p>
				<form name="Register" 
					 method="post">
					<p> <label for ="name"> *&nbspName: </label> <input type="text" name="name" size="20"><br> </p>
					<p> <label for ="email"> *&nbspE-mail: </label> <input type="text" name="email" size="20"> </p>
					<p> <label for ="phone"> *&nbspPhone: </label> <input type="numbers" name="phone" size="20"> </p>
					<p> <label for ="address"> *&nbspAddress: </label> <textarea id ="ta" rows="10" cols="30" name="address"></textarea></p>
              		<p> <label for ="password"> *&nbspPassword: </label> <input type="password" name="password"></p>
                    <p> <label for ="class"> *&nbspType of Class:</label> <select name="toclass">
    					<?php
                                                $query = "SELECT classid,classname FROM class";
                                                $stmt = $db->prepare($query);
                                                $stmt->execute();
                                                $stmt->bind_result($c, $cc);
                                                while($stmt->fetch()) {
                                                        echo '<option value="'.$c.'">'.$cc.'</option>';
                                                }
                                          ?>
 					 </select></p>
 					<p> <label for ="days"> *&nbspSchedule: </label> <select id="days" name="days">
    					<?php
                                                $query = "SELECT * FROM days";
                                                $stmt = $db->prepare($query);
                                                $stmt->execute();
                                                $stmt->bind_result($c, $cc);
                                                while($stmt->fetch()) {
                                                        echo '<option value="'.$c.'">'.$cc.'</option>';
                                                }
                                          ?>
 					 </select></p>
                     <p> <label for ="time"> *&nbspTime: </label> <select id="time" name="time">
                        <?php
                                                $query = "SELECT t.timeid,Time_Format(time, '%h:%i %p' ) FROM time as t, schedule as s where t.timeid = s.timeid and s.daysid = 1 ";
                                                $stmt = $db->prepare($query);
                                                $stmt->execute();
                                                $stmt->bind_result($c, $cc);
                                                while($stmt->fetch()) {
                                                        echo '<option value="'.$c.'">'.$cc.'</option>';
                                                }
                                          ?>
                     </select></p>

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

