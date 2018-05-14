<?php
	$db = new mysqli('localhost','root','malissa','Yoga')
 or die('Error connecting to MySQL server.');

	$id = $_POST["id"];
	$data = "";
	$query = "SELECT t.timeid,Time_Format(time, '%h:%i %p' ) FROM time as t, schedule as s where t.timeid = s.timeid and s.daysid = $id ";
                                                $stmt = $db->prepare($query);
                                                $stmt->execute();
                                                $stmt->bind_result($c, $cc);
                                                while($stmt->fetch() ){
                                                        $data = $data . '<option value="'.$c.'">'.$cc.'</option>';
                                                }

	echo $data;		

?>
