<?php $title = 'Confirmation | '; include_once('includes/header.php'); ?>

<div class="content_title">
	<h3>Confirmation</h3>
</div>

<?php
	$cust = $_SESSION['customer'];
	$cart = $_SESSION['cart'];
	$price = $_SESSION['price'];
	$grandTotal = 0;

	// Print receipt
	echo '<section class="receipt">';
		echo '<h2>Receipt</h2>';
		echo $cust['custName'].'<br>';
		echo $cust['email'].'<br>';
		echo $cust['mobile'].'<br>';

		$array_length = count($cart);
		
		for($i = 0; $i < $array_length; $i++){
			switch($cart[$i]['movie']){
				case "AC":
					echo '<h3>Rogue One: A Star Wars Story (Action) '.$cart[$i]['session'].'</h3>';
					break;
				case "RC":
					echo '<h3>The Dark Knight (Romantic Comedy) '.$cart[$i]['session'].'</h3>';
					break;
				case "CH":
					echo '<h3>Inception (Children) '.$cart[$i]['session'].'</h3>';
					break;
				case "AF":
					echo '<h3>In the Heart of the Sea (Art/Foreign) '.$cart[$i]['session'].'</h3>';
					break;
			};
			
			echo '<table>';
				if($cart[$i]['seat']['SF'] > 0){
					echo '<tr>';
						echo '<td>'.$cart[$i]['seat']['SF'].' x Standard (Full)</td>';
						echo '<td> $'.number_format((float)$price[$i]['seat']['SF'], 2, '.', '').'</td>';
					echo '</tr>';
				}
				if($cart[$i]['seat']['SP'] > 0){
					echo '<tr>';
						echo '<td>'.$cart[$i]['seat']['SP'].' x Standard (Concession)</td>';
						echo '<td> $'.number_format((float)$price[$i]['seat']['SP'], 2, '.', '').'</td>';
					echo '</tr>';
				}
				if($cart[$i]['seat']['SC'] > 0){
					echo '<tr>';
						echo '<td>'.$cart[$i]['seat']['SC'].' x Standard (Child)</td>';
						echo '<td> $'.number_format((float)$price[$i]['seat']['SC'], 2, '.', '').'</td>';
					echo '</tr>';
				}

				if($cart[$i]['seat']['FA'] > 0){
					echo '<tr>';
						echo '<td>'.$cart[$i]['seat']['FA'].' x First Class (Adult)</td>';
						echo '<td> $'.number_format((float)$price[$i]['seat']['FA'], 2, '.', '').'</td>';
					echo '</tr>';
				}
				if($cart[$i]['seat']['FC'] > 0){
					echo '<tr>';
						echo '<td>'.$cart[$i]['seat']['FC'].' x First Class (Child)</td>';
						echo '<td> $'.number_format((float)$price[$i]['seat']['FC'], 2, '.', '').'</td>';
					echo '</tr>';
				}

				if($cart[$i]['seat']['BA'] > 0){
					echo '<tr>';
						echo '<td>'.$cart[$i]['seat']['BA'].' x Bean bag (Adult)</td>';
						echo '<td> $'.number_format((float)$price[$i]['seat']['BA'], 2, '.', '').'</td>';
					echo '</tr>';
				}
				if($cart[$i]['seat']['BF'] > 0){
					echo '<tr>';
						echo '<td>'.$cart[$i]['seat']['BF'].' x Bean bag (Family)</td>';
						echo '<td> $'.number_format((float)$price[$i]['seat']['BF'], 2, '.', '').'</td>';
					echo '</tr>';
				}
				if($cart[$i]['seat']['BC'] > 0){
					echo '<tr>';
						echo '<td>'.$cart[$i]['seat']['BC'].' x Bean bag (Child)</td>';
						echo '<td> $'.number_format((float)$price[$i]['seat']['BC'], 2, '.', '').'</td>';
					echo '</tr>';
				}
			echo '</table>';
			$grandTotal += $price[$i]['total'];
		}
		echo '<h2>Total Cost: $'.number_format((float)$grandTotal, 2, '.', '').'</h2>';
	echo '</section>';
?>

<?php
	// Export arrays to flat file
	$file = fopen("book.txt", "a");
	fwrite($file, print_r($cust, true));
	fwrite($file, print_r($cart, true));
	fwrite($file, print_r($price, true));
	fclose($file);
?>

<?php include_once('includes/footer.php'); ?>