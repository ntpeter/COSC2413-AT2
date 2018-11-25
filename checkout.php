<?php $title = 'Checkout | '; include_once('includes/header.php'); ?>

<div class="content_title">
	<h3>Checkout</h3>
</div>

<form action="#" method="post">
	<div id="checkout">
		Full Name<br><input type="text" name="custName" placeholder="John Doe" required pattern="[A-Za-z\s\.]+"><br><br>
		Email Address<br><input type="email" name="custEmail" placeholder="Email@email.com" required pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br><br>
		Australian Mobile Number<br><input type="text" name="mobile" placeholder="0412 345 678 or 0412345678" required pattern="((04)[0-9]{2} [0-9]{3} [0-9]{3}|(04)[0-9]{8})"><br><br>
		<button type="submit" name="submit">SUBMIT</button><br><br>
	</div>
</form>

<?php
	// Check when submit is executed before continuing
	if(isset($_POST['submit'])){
		$custName = $_POST['custName'];
		$email = $_POST['custEmail'];
		$mobile = $_POST['mobile'];
		
		$_SESSION['customer'] = array (
			'custName' => $custName,
			'email' => $email,
			'mobile' => $mobile
		);
		
		// Redirect to confirmation page
		echo ("<script>window.location='confirmation.php'</script>");
	}
?>

<?php include_once('includes/footer.php'); ?>