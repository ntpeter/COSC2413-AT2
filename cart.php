<?php $title = 'Shopping Cart | '; include_once('includes/header.php'); ?>

<div class="content_title">
	<h3>Shopping Cart</h3>
</div>

<?php
	if (isset($_SESSION['price'])){
		unset($_SESSION['price']);
		$_SESSION['price'] = array();
	}

	if (isset($_SESSION['cart'])){
		$grandTotal = 0;
		$i = 0;
		$sfTotal = 0; $spTotal = 0; $scTotal = 0; $faTotal = 0; $fcTotal = 0; $baTotal = 0; $bfTotal = 0; $bcTotal = 0;
		
		foreach ($_SESSION['cart'] as $cart){
			
			switch($cart['session']) {
			case 'MON-01':
			case 'MON-06':
			case 'MON-09':
			case 'TUE-01':
			case 'TUE-06':
			case 'TUE-09':
			case 'WED-01':
			case 'THU-01':
			case 'FRI-01':
				$sfCost = 12.50;
				$spCost = 10.50;
				$scCost = 8.50;
				$faCost = 25.00;
				$fcCost = 20.00;
				$baCost = 22.00;
				$bfCost = 20.00;
				$bcCost = 20.00;
				break;
			case 'WED-06':
			case 'WED-09':
			case 'THU-06':
			case 'THU-09':
			case 'FRI-06':
			case 'FRI-09':
			case 'SAT-12':
			case 'SAT-03':
			case 'SAT-06':
			case 'SAT-09':
			case 'SUN-12':
			case 'SUN-03':
			case 'SUN-06':
			case 'SUN-09':
				$sfCost = 18.50;
				$spCost = 15.50;
				$scCost = 12.50;
				$faCost = 30.00;
				$fcCost = 25.00;
				$baCost = 33.00;
				$bfCost = 30.00;
				$bcCost = 30.00;
				break;
		}
			
			echo '<section class="cart">';
				echo '<form action="#" method="post">';
					echo '<button type="submit" name="remove" value="'.$i.'">Remove from Cart</button>';
				echo '</form>';

				switch($cart['movie']){
					case "AC":
						echo '<h3>Rogue One: A Star Wars Story (Action)</h3>';
						break;
					case "RC":
						echo '<h3>The Dark Knight (Romantic Comedy)</h3>';
						break;
					case "CH":
						echo '<h3>Inception (Children)</h3>';
						break;
					case "AF":
						echo '<h3>In the Heart of the Sea (Art/Foreign)</h3>';
						break;
				};
				
				echo '<p>Showing at ';
				switch($cart['session']){
					case "MON-01":
						echo 'Monday, 1pm</p>';
						break;
					case "MON-06":
						echo 'Monday, 6pm</p>';
						break;
					case "MON-09":
						echo 'Monday, 9pm</p>';
						break;
					case "TUE-01":
						echo 'Tuesday, 1pm</p>';
						break;
					case "TUE-06":
						echo 'Tuesday, 6pm</p>';
						break;
					case "TUE-09":
						echo 'Tuesday, 9pm</p>';
						break;
					case "WED-01":
						echo 'Wednesday, 1pm</p>';
						break;
					case "THU-01":
						echo 'Thursday, 1pm</p>';
						break;
					case "FRI-01":
						echo 'Friday, 1pm</p>';
						break;
					case "WED-06":
						echo 'Wednesday, 6pm</p>';
						break;
					case "WED-09":
						echo 'Wednesday, 9pm</p>';
						break;
					case "THU-06":
						echo 'Thursday, 6pm</p>';
						break;
					case "THU-09":
						echo 'Thursday, 9pm</p>';
						break;
					case "FRI-06":
						echo 'Friday, 6pm</p>';
						break;
					case "FRI-09":
						echo 'Friday, 9pm</p>';
						break;
					case "SAT-12":
						echo 'Saturday, 12pm</p>';
						break;
					case "SAT-03":
						echo 'Saturday, 3pm</p>';
						break;
					case "SAT-06":
						echo 'Saturday, 6pm</p>';
						break;
					case "SAT-09":
						echo 'Saturday, 9pm</p>';
						break;
					case "SUN-12":
						echo 'Sunday, 12pm</p>';
						break;
					case "SUN-03":
						echo 'Sunday, 3pm</p>';
						break;
					case "SUN-06":
						echo 'Sunday, 6pm</p>';
						break;
					case "SUN-09":
						echo 'Sunday, 9pm</p>';
						break;
				};
				
				echo '<table>';
					echo '<tr>';
						echo '<th>Ticket Type</th>';
						echo '<th>Cost</th>';
						echo '<th>Qty</th>';
						echo '<th>Subtotal</th>';
					echo '</tr>';
					if($cart['seat']['SF'] > 0){
						echo '<tr>';
							echo '<td>Standard (Full)</td>';
							echo '<td>$'.number_format((float)$sfCost, 2, '.', '').'</td>';
							echo '<td>'.$cart['seat']['SF'].'</td>';
							$sfTotal = $sfCost*$cart['seat']['SF'];
							echo '<td>$'.number_format((float)$sfTotal, 2, '.', '').'</td>';
						echo '</tr>';
					}
					if($cart['seat']['SP'] > 0){
						echo '<tr>';
							echo '<td>Standard (Concession)</td>';
							echo '<td>$'.number_format((float)$spCost, 2, '.', '').'</td>';
							echo '<td>'.$cart['seat']['SP'].'</td>';
							$spTotal = $spCost*$cart['seat']['SP'];
							echo '<td>'.number_format((float)$spTotal, 2, '.', '').'</td>';
						echo '</tr>';
					}
					if($cart['seat']['SC'] > 0){
						echo '<tr>';
							echo '<td>Standard (Child)</td>';
							echo '<td>$'.number_format((float)$scCost, 2, '.', '').'</td>';
							echo '<td>'.$cart['seat']['SC'].'</td>';
							$scTotal = $scCost*$cart['seat']['SC'];
							echo '<td>$'.number_format((float)$scTotal, 2, '.', '').'</td>';
						echo '</tr>';
					}
					
					if($cart['seat']['FA'] > 0){
						echo '<tr>';
							echo '<td>First Class (Adult)</td>';
							echo '<td>$'.number_format((float)$faCost, 2, '.', '').'</td>';
							echo '<td>'.$cart['seat']['FA'].'</td>';
							$faTotal = $faCost*$cart['seat']['FA'];
							echo '<td>$'.number_format((float)$faTotal, 2, '.', '').'</td>';
						echo '</tr>';
					}
					if($cart['seat']['FC'] > 0){
						echo '<tr>';
							echo '<td>First Class (Child)</td>';
							echo '<td>$'.number_format((float)$fcCost, 2, '.', '').'</td>';
							echo '<td>'.$cart['seat']['FC'].'</td>';
							$fcTotal = $fcCost*$cart['seat']['FC'];
							echo '<td>$'.number_format((float)$fcTotal, 2, '.', '').'</td>';
						echo '</tr>';
					}
					
					if($cart['seat']['BA'] > 0){
						echo '<tr>';
							echo '<td>Beanbag (Adult)</td>';
							echo '<td>$'.number_format((float)$baCost, 2, '.', '').'</td>';
							echo '<td>'.$cart['seat']['BA'].'</td>';
							$baTotal = $baCost*$cart['seat']['BA'];
							echo '<td>$'.number_format((float)$baTotal, 2, '.', '').'</td>';
						echo '</tr>';
					}
					if($cart['seat']['BF'] > 0){
						echo '<tr>';
							echo '<td>Beanbag (Family)</td>';
							echo '<td>$'.number_format((float)$bfCost, 2, '.', '').'</td>';
							echo '<td>'.$cart['seat']['BF'].'</td>';
							$bfTotal = $bfCost*$cart['seat']['BF'];
							echo '<td>$'.number_format((float)$bfTotal, 2, '.', '').'</td>';
						echo '</tr>';
					}
					if($cart['seat']['BC'] > 0){
						echo '<tr>';
							echo '<td>Beanbag (Child)</td>';
							echo '<td>$'.number_format((float)$bcCost, 2, '.', '').'</td>';
							echo '<td>'.$cart['seat']['BC'].'</td>';
							$bcTotal = $bcCost*$cart['seat']['BC'];
							echo '<td>$'.number_format((float)$bcTotal, 2, '.', '').'</td>';
						echo '</tr>';
					}
					echo '<tr>';
						echo '<td colspan="3" class="total">Total</td>';
						$total = $sfTotal + $spTotal + $scTotal + $faTotal + $fcTotal + $baTotal + $bfTotal + $bcTotal;
						$grandTotal += $total;
						echo '<td>$'.number_format((float)$total, 2, '.', '').'</td>';
					echo '</tr>';
				echo '</table>';
			echo '</section>';
			$i++;

			$price = array (
				'seat' => array (
					'SF' => $sfTotal,
					'SP' => $spTotal,
					'SC' => $scTotal,
					'FA' => $faTotal,
					'FC' => $fcTotal,
					'BA' => $baTotal,
					'BF' => $bfTotal,
					'BC' => $bcTotal
				),
				'total' => $total,
			);

			$_SESSION['price'][] = $price;
		};
		echo '<div id="grandTotal">';
			echo '<h2>Grand Total: $'.number_format((float)$grandTotal, 2, '.', '').'</h2>';
			echo '<a class="button" href="checkout.php">Proceed to Checkout</a>';
		echo '</div>';
		
		
		
	} else {
		echo "Your shopping cart is empty, but it doesn't have to be.";
	};

	if(isset($_POST['remove'])){
		$key = $_POST['remove'];
		//unset($_SESSION['cart'][$key]);
		array_splice($_SESSION['cart'], $key, 1);
		array_splice($_SESSION['price'], $key, 1);
		echo ("<script>window.location='cart.php'</script>");
	}
?>

<?php include_once('includes/footer.php'); ?>