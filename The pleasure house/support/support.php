<?php
	session_start();
	include '../includes/db.php';
	

	if (!isset($_POST["action"])){
		echo "error";
	}
	
	if($_POST["action"] == 'get_my_food') 
	{
		$query = "SELECT count(*) from items";
		$num = 0;
		
		if ($row = mysqli_query($link, $query)){
			
			while($row_orders= mysqli_fetch_array($row)){
				$num = $row_orders[0];
				//echo $num;
			}
		}
		
		$query = "SELECT * FROM items";
		if ($row = mysqli_query($link, $query)){
			
			while($row_orders= mysqli_fetch_array($row)){
				//print_r($row_orders);
				$name = $row_orders['Name'];
				$price = $row_orders['Price'];
				$photo = $row_orders['Photo'];
				
				echo '
				<div class="col-md-4 col-sm-6 center-responsive h-100" style="margin-top:60px;">
					<div class="card h-80">
						<img src="'.$photo.'" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">'.$name.'</h5>
							<p><span class="card-text"><big class="text-muted"> &#8377; '.$price.'</big></span></p>
							<p><button class="btn btn-primary btn-lg mybutton" onclick="add_to_cart(\''.$name.'\',\''.$price.'\');"><span>ADD TO CART</span></button></p>
						</div>
					</div>
				</div>
				';
			}
		}
		
		
		
	}
	
	/*
	if($_POST["action"] == 'contact') {
		
		
		$first = mysqli_real_escape_string($link, $_POST['first']);
		$last = mysqli_real_escape_string($link, $_POST['last']);
		$email = mysqli_real_escape_string($link, $_POST['email']);
		$phone = mysqli_real_escape_string($link, $_POST['phone']);
		$more = mysqli_real_escape_string($link, $_POST['more']);
		
		
		$query = "INSERT INTO `contact` (`first`, `last`, `email`, `phone`, `more`) VALUES ('".mysqli_real_escape_string($link, $_POST['first'])."','".$last."', '".$email."','".$phone."','".$more."')";
		
		if (mysqli_query($link, $query)){
			
			$mail = new PHPMailer;
			$mail->isSMTP(); 
			$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
			$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
			$mail->Port = 587; // TLS only
			$mail->SMTPSecure = 'tls'; // ssl is deprecated
			$mail->SMTPAuth = true;
			$mail->Username = 'helloark2@gmail.com'; // email
			$mail->Password = 'Arnav9856'; // password
			$mail->setFrom('helloark2@gmail.com', 'Website'); // From email and name
			$mail->addAddress('kharbandarnav@gmail.com', 'arnav kharbanda'); // to email and name
			$mail->Subject = 'PHPMailer GMail SMTP test';
			$mail->msgHTML("
			<h2>Someone just contacted me😊</h2>
			<p>Name: ".$first." ".$last."</p>
			<p>Email: ".$email."</p>
			<p>Phone: ".$phone."</p>
			<p>More: ".$more."</p>
			
			"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
			$mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
			// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
			$mail->SMTPOptions = array(
								'ssl' => array(
									'verify_peer' => false,
									'verify_peer_name' => false,
									'allow_self_signed' => true
								)
							);
			if(!$mail->send()){
				echo "Mailer Error: " . $mail->ErrorInfo;
				echo "error";
			}else{
				echo "success";
			}

			
		} else {
			echo "error";
		}
	
	*/
?>