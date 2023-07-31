<html>
	<body>
			<?php
				if(isset($_POST["FirstName"])){
					echo"First Name:".$_POST["FirstName"];
				}
				if(isset($_POST["LastName"])){
					echo"<br>Last Name:".$_POST["LastName"];
				}
				if(isset($_POST["EmailID"])){
					echo"<br>EmailID:".$_POST["EmailID"];
				}
				if(isset($_POST["pwd"])){
					echo"<br>Password:".$_POST["pwd"];
				}
				if(isset($_POST["MobileNumber"])){
					echo"<br>Mobile No:".$_POST["MobileNumber"];
				}
				if(isset($_POST["Gender"])){
					echo"<br>Gender:".$_POST["Gender"];
				}
				if(isset($_POST["BirthDay"])){
					echo"<br>BirthDay:".$_POST["BirthDay"];
				}
				if(isset($_POST["BirthdayMonth"])){
					echo"<br>BirthdayMonth:".$_POST["BirthdayMonth"];
				}
				if(isset($_POST["BirthdayYear"])){
					echo"<br>BirthdayYear:".$_POST["BirthdayYear"];
				}
				
				if(isset($_POST["Address"])){
					echo"<br>Address:".$_POST["Address"];
				}
				if(isset($_POST["City"])){
					echo"<br>City:".$_POST["City"];
				}
				if(isset($_POST["PinCode"])){
					echo"<br>PinCode:".$_POST["PinCode"];
				}
				if(isset($_POST["State"])){
					echo"<br>State:".$_POST["State"];
				}
				if(isset($_POST["Country"])){
					echo"<brCountry:".$_POST["Country"];
				}
				if(isset($_POST["branch"])){
					echo"<br>branch:".$_POST["branch"];
				}
				if(isset($_POST["Semester"])){
					echo"<br>Semester:".$_POST["Semester"];
				}
				if(isset($_POST["t1"])){
					echo"<br>Enrollment Number:".$_POST["t1"];
				}
				
				echo"<br>Your Hobies Are:"."</br>";
				if(isset($_POST["Paper Presentation"])){
					echo"<br>Paper Presentation:".$_POST["Paper Presentation"];
				}
				if(isset($_POST["Web Design"])){
					echo"<br>Web Design:".$_POST["Web Design"];
				}
				if(isset($_POST["Code Cracking"])){
					echo"<br>Code Cracking:".$_POST["Code Cracking"];
				}
				if(isset($_POST["Code King"])){
					echo"<br>Code King:".$_POST["Code King"];
				}
				if(isset($_POST["Poster Design"])){
					echo"<br>Poster Design:".$_POST["Poster Design"];
				}
				if(isset($_POST["Code Debugging"])){
					echo"<br>Code Debugging:".$_POST["Code Debugging"];
				}
				if(isset($_POST["Technical Quiz"])){
					echo"<br>Technical Quiz:".$_POST["Technical Quiz"];
				}
				if(isset($_POST["Phd"])){
					echo"<br>Brain Tester:".$_POST["Phd"];
				}
				if(isset($_POST["btn1"])){
					echo"<br>Submit button Clicked";
				}
				else{
					echo"<br>Reset Button Clicked";
				}
				
			?>

</body>
</html>