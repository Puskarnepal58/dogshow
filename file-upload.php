<?php
include 'database.php';
if(isset($_POST['submit']))
{

	$randomNumber = rand(1, 9999);
    // $reg_num = $_POST['reg_num'];
	$dogname = $_POST['dogname'];
	$breedname = $_POST['breedname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$left_view = $_FILES['left_view'];
		
	$pay_slip = $_FILES['pay_slip'];
		


	$filename = $left_view['name'];
	
	$filename3 = $pay_slip['name'];

	$filepath = $left_view['tmp_name'];
	
	$filepath3 = $pay_slip['tmp_name'];

	$fileerror = $left_view['error'];
	
	$fileerror3 = $pay_slip['error'];

	$fileerror = $left_view['error'];
   
    $fileerror3 = $pay_slip['error'];

    
	
	

	if($fileerror == 0){
		$destfile = 'upload/'.$filename;
		
		$destfile3 = 'upload/'.$filename3;
		
		
		// echo "$destfile";
		move_uploaded_file($filepath,  $destfile);
		
		move_uploaded_file($filepath3,  $destfile3); 


		$reg_num = $randomNumber;
       


		$insertquery = "insert into register(reg_num, dogname, breedname, age, gender, firstname, lastname, email, number, left_view, pay_slip) values($reg_num, '$dogname', '$breedname', '$age', '$gender', '$firstname', '$lastname', '$email', '$number', '$destfile', '$destfile3')";

		$query = mysqli_query($con, $insertquery);

		// Mailer Function Being
		if($query){
			$to = "$email"; 
			$subject = "Dog registration";
			$headers .= "MIME-Version: 1.0"."\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
			$headers .= 'From:Kathmandu Dog Show<kathmandudogshow@gmail.com>'."\r\n";
			$headers .= 'Cc:kathmandudogshow@gmail.com'."\r\n";
			$ms .= "<html><body><div>
			<div><b>Dog Name:</b> $dogname</div>
			<div><b>Breed Name:</b> $breedname</div>
			<div><b>Age:</b> $age</div>
			<div><b>Gender:</b> $gender</div>
			<div><b>Full Name:</b> $firstname $lastname</div>
			<div><b>E-mail:</b> $email</div>
			<div><b>Number:</b> $number</div>
			<div><b>Registration No:</b> $reg_num </div>";
			$ms .= "<div style='padding-top:8px;'><b>Message : </b>$message</div></div></body></html>";
			mail($to,$subject,$ms,$headers);
		
		// Mailer Function Ends
		
		
			echo "Registered Sucessfully";
			// header('location:index.php');
		}
		else
		{
			echo "Not Inserted";
		}
	}
    


	
}
?>


