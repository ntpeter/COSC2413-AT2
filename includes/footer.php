			</div>
		</main>
		<footer>
			<div class="container">
				<h2>S3602814 Thien Nguyen & S3602472 Isaac Cochrane</h2>
				<div id="debug">
					<!-- DEBUG MODULE PROVIDED IN THE ASSIGNMENT 3 BRIEF -->
					<?php
						// FOR CORETEACHING SERVERS
						//include_once("http://titan.csit.rmit.edu.au/~e54061/wp/debug.php");
						
						// FOR CLOUD9
						echo "<b>DEBUGGING</b><br><br>";
						echo "<b>Customer Details</b><br>";
						if (isset($_SESSION['customer'])){
							var_dump($_SESSION['customer']);
						} else {
							echo "No data in customer array.";
						}
						echo "<br><br>";
						echo "<b>Cart Information</b><br>";
						if (isset($_SESSION['cart'])){
							var_dump($_SESSION['cart']);
						} else {
							echo "No data in cart array.";
						}
						echo "<br><br>";
						echo "<b>Price Information</b><br>";
						if (isset($_SESSION['price'])){
							var_dump($_SESSION['price']);
						} else {
							echo "No data in price array.";
						}
					?>
					<form action="#" method='post'>
						<br><button type="submit" name="destroySession">Destroy Session</button>
					</form>
					<?php
						if(isset($_POST['destroySession'])){
							session_unset(); // Clear session for usage
							session_destroy(); // Destroy all data regarding session
							$_SESSION = array(); // Empty the array
							echo ("<script>window.location='index.php'</script>");
						}
					?>
				</div>
			</div>
		</footer>
	</body>
</html>