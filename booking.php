<?php $title = 'Booking | '; include_once('includes/header.php'); ?>

<div class="content_title">
	<h3>Booking Form</h3>
</div>

<!-- URL <https://titan.csit.rmit.edu.au/~e54061/wp/silverado-test.php>
	Original form has been adapted to complete assignment 2 -->
<form action="#" method='post'>
	<fieldset>
		<legend>Booking Form</legend>
		<p>
			<label>Movie</label>
			<select name=movie id="movie" onchange="reloadPricing()">
				<option value="AC">Rogue One: A Star Wars Story (AC)</option>
				<option value="RC">The Dark Knight (RC)</option>
				<option value="CH">Inception (CH)</option>
				<option value="AF">In the Heart of the Sea (AF)</option>
			</select>
		</p>
		<p>
			<label>Session</label>
			<select name=session id="session" onchange="reloadPricing()">
				<optgroup id="gAC" name="gAC">
					<option id="gAC1" value="WED-09">Wednesday 9pm</option>
					<option value="THU-09">Thursday 9pm</option>
					<option value="FRI-09">Friday 9pm</option>
					<option value="SAT-09">Saturday 9pm</option>
					<option value="SUN-09">Sunday 9pm</option>
				</optgroup>
				<optgroup id="gRC" name="gRC">
					<option id="gRC1" value="MON-09">Monday 9pm</option>
					<option value="TUE-09">Tuesday 9pm</option>
					<option value="WED-01">Wednesday 1pm</option>
					<option value="THU-01">Thursday 1pm</option>
					<option value="FRI-01">Friday 1pm</option>
					<option value="SAT-06">Saturday 6pm</option>
					<option value="SUN-06">Sunday 6pm</option>
				</optgroup>
				<optgroup id="gCH" name="gCH">
					<option id="gCH1" value="MON-01">Monday 1pm</option>
					<option value="TUE-01">Tuesday 1pm</option>
					<option value="WED-06">Wednesday 6pm</option>
					<option value="THU-06">Thursday 6pm</option>
					<option value="FRI-06">Friday 6pm</option>
					<option value="SAT-12">Saturday 12pm</option>
					<option value="SUN-12">Sunday 12pm</option>
				</optgroup>
				<optgroup id="gAF" name="gAF">
					<option id="gAF1" value="MON-06">Monday 6pm</option>
					<option value="TUE-06">Tuesday 6pm</option>
					<option value="SAT-03">Saturday 3pm</option>
					<option value="SUN-03">Sunday 3pm</option>
				</optgroup>
			</select>
		</p>
		<fieldset>
			<legend>Seats</legend>
			<fieldset>
			<legend>Standard</legend>
			<p>
				<label>Adult</label>
				<select name=SF id="SF" onchange="reloadPricing()">
					<option value=0>0</option>
        	 		<option value=1>1</option>
        	 		<option value=2>2</option>
        	 		<option value=3>3</option>
        	 		<option value=4>4</option>
        	 		<option value=5>5</option>
        	 		<option value=6>6</option>
        	 		<option value=7>7</option>
        	 		<option value=8>8</option>
        	 		<option value=9>9</option>
        	 		<option value=10>10</option>
				</select>
			</p>
			<p>
				<label>Concession</label>
				<select name=SP id="SP" onchange="reloadPricing()">
					<option value=0>0</option>
        	 		<option value=1>1</option>
        	 		<option value=2>2</option>
        	 		<option value=3>3</option>
        	 		<option value=4>4</option>
        	 		<option value=5>5</option>
        	 		<option value=6>6</option>
        	 		<option value=7>7</option>
        	 		<option value=8>8</option>
        	 		<option value=9>9</option>
        	 		<option value=10>10</option>
				</select>
			</p>
        	<p>
        		<label>Child</label>
        		<select name=SC id="SC" onchange="reloadPricing()">
        			<option value=0>0</option>
        	 		<option value=1>1</option>
        	 		<option value=2>2</option>
        	 		<option value=3>3</option>
        	 		<option value=4>4</option>
        	 		<option value=5>5</option>
        	 		<option value=6>6</option>
        	 		<option value=7>7</option>
        	 		<option value=8>8</option>
        	 		<option value=9>9</option>
        	 		<option value=10>10</option>
        		</select>
        	</p>
			Standard: $<label id="seatStandard">0</label><br>
			</fieldset>
			<fieldset>
				<legend>First Class</legend>
	        	<p>
	        		<label>Adult</label>
	        		<select name=FA id="FA" onchange="reloadPricing()">
	        			<option value=0>0</option>
        	 			<option value=1>1</option>
        	 			<option value=2>2</option>
        	 			<option value=3>3</option>
        	 			<option value=4>4</option>
        	 			<option value=5>5</option>
        	 			<option value=6>6</option>
        	 			<option value=7>7</option>
        	 			<option value=8>8</option>
        	 			<option value=9>9</option>
        	 			<option value=10>10</option>
	        		</select>
	        	</p>
	        	<p>
	        		<label>Child</label>
	        		<select name=FC id="FC" onchange="reloadPricing()">
	        			<option value=0>0</option>
        	 			<option value=1>1</option>
        	 			<option value=2>2</option>
        	 			<option value=3>3</option>
        	 			<option value=4>4</option>
        	 			<option value=5>5</option>
        	 			<option value=6>6</option>
        	 			<option value=7>7</option>
        	 			<option value=8>8</option>
        	 			<option value=9>9</option>
        	 			<option value=10>10</option>
	        		</select>
	        	</p>
				First Class: $<label id="seatFirstClass">0</label><br>
        	</fieldset>
        	<fieldset>
        		<legend>Bean Bags</legend>
	        	<p>
	        		<label>Adult</label>
	        		<select name=BA id="BA" onchange="reloadPricing()">
	        			<option value=0>0</option>
        	 			<option value=1>1</option>
        	 			<option value=2>2</option>
        	 			<option value=3>3</option>
        	 			<option value=4>4</option>
        	 			<option value=5>5</option>
        	 			<option value=6>6</option>
        	 			<option value=7>7</option>
        	 			<option value=8>8</option>
        	 			<option value=9>9</option>
        	 			<option value=10>10</option>
	        		</select>
	        	</p>
        		<p>
        			<label>Family</label>
        			<select name=BF id="BF" onchange="reloadPricing()">
        				<option value=0>0</option>
        	 			<option value=1>1</option>
        	 			<option value=2>2</option>
        	 			<option value=3>3</option>
        	 			<option value=4>4</option>
        	 			<option value=5>5</option>
        	 			<option value=6>6</option>
        	 			<option value=7>7</option>
        	 			<option value=8>8</option>
        	 			<option value=9>9</option>
        	 			<option value=10>10</option>
        			</select>
        		</p>
        	 	<p>
        	 		<label>Child</label>
        	 		<select name=BC id="BC" onchange="reloadPricing()">
        	 			<option value=0>0</option>
        	 			<option value=1>1</option>
        	 			<option value=2>2</option>
        	 			<option value=3>3</option>
        	 			<option value=4>4</option>
        	 			<option value=5>5</option>
        	 			<option value=6>6</option>
        	 			<option value=7>7</option>
        	 			<option value=8>8</option>
        	 			<option value=9>9</option>
        	 			<option value=10>10</option>
        	 		</select>
        	 	</p>
				Bean Bag: $<label id="seatBeanBag">0</label><br>
        	</fieldset>
		</fieldset>
		<p>
			Total Cost: $<label id="total">0</label><br>
			<button id="submit" type="submit" name="book">Book</button>
		</p>
	</fieldset>
</form>

<script>
window.onload = function() {
	document.getElementById("gAC").style.display = 'block';
	document.getElementById("gRC").style.display = 'none';
	document.getElementById("gCH").style.display = 'none';
	document.getElementById("gAF").style.display = 'none';
}

function changeMovieTimes(){
	var movie = document.getElementById("movie").value;
	var gAC  = document.getElementById("gAC");
	var gRC  = document.getElementById("gRC");
	var gCH  = document.getElementById("gCH");
	var gAF  = document.getElementById("gAF");

	if (movie == "AC"){
		gAC.style.display = 'block';
		gRC.style.display = 'none';
		gCH.style.display = 'none';
		gAF.style.display = 'none';
		document.getElementById("gAC1").selected = true;
		;
	}
	
	if (movie == "RC"){
		gAC.style.display = 'none';
		gRC.style.display = 'block';
		gCH.style.display = 'none';
		gAF.style.display = 'none';
		document.getElementById("gRC1").selected = true;
	}
	
	if (movie == "CH"){
		gAC.style.display = 'none';
		gRC.style.display = 'none';
		gCH.style.display = 'block';
		gAF.style.display = 'none';
		document.getElementById("gCH1").selected = true;
	}
	
	if (movie == "AF"){
		gAC.style.display = 'none';
		gRC.style.display = 'none';
		gCH.style.display = 'none';
		gAF.style.display = 'block';
		document.getElementById("gAF1").selected = true;
	}
}

function calcCost(){
	var session = document.getElementById("session").value;
	
	
	var sf = parseFloat(document.getElementById("SF").value);
	var sfCost;
	var sp = parseFloat(document.getElementById("SP").value);
	var spCost;
	var sc = parseFloat(document.getElementById("SC").value);
	var scCost;
	
	var fa = parseFloat(document.getElementById("FA").value);
	var faCost;
	var fc = parseFloat(document.getElementById("FC").value);
	var fcCost;
	
	var ba = parseFloat(document.getElementById("BA").value);
	var baCost;
	var bf = parseFloat(document.getElementById("BF").value);
	var bfCost;
	var bc = parseFloat(document.getElementById("BC").value);
	var bcCost;
	
	switch(session) {
		case 'MON-01':
		case 'MON-06':
		case 'MON-09':
		case 'TUE-01':
		case 'TUE-06':
		case 'TUE-09':
		case 'WED-01':
		case 'THU-01':
		case 'FRI-01':
			sfCost = 12.50;
			spCost = 10.50;
			scCost = 8.50;
			faCost = 25.00;
			fcCost = 20.00;
			baCost = 22.00;
			bfCost = 20.00;
			bcCost = 20.00;
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
			sfCost = 18.50;
			spCost = 15.50;
			scCost = 12.50;
			faCost = 30.00;
			fcCost = 25.00;
			baCost = 33.00;
			bfCost = 30.00;
			bcCost = 30.00;
			break;
	}
	
	//alert(sfCost);
	
	
	var standard = (sfCost*sf) + (spCost*sp) + (scCost*sc);
	var firstClass = (faCost*fa) + (fcCost*fc);
	var beanBag = (baCost*ba) + (bfCost*bf) + (bcCost*bc);
	var total = (standard + firstClass + beanBag);
	
	document.getElementById("seatStandard").innerHTML = standard.toFixed(2);
	document.getElementById("seatFirstClass").innerHTML = firstClass.toFixed(2);
	document.getElementById("seatBeanBag").innerHTML = beanBag.toFixed(2);
	document.getElementById("total").innerHTML = total.toFixed(2);
}

function reloadPricing(){
	changeMovieTimes();
	calcCost();
}

</script>

<?php
	// Check when submit is executed before continuing
	if(isset($_POST['book'])){
		$movie = $_POST['movie'];
		$session = $_POST['session'];
		
		// Seat types
		$standardAdult = $_POST['SF'];
		$standardConcession = $_POST['SP'];
		$standardChild = $_POST['SC'];
		$firstClassAdult = $_POST['FA'];
		$firstClassChild = $_POST['FC'];
		$beanBagAdult = $_POST['BA'];
		$beanBagFamily = $_POST['BF'];
		$beanBagChild = $_POST['BC'];
		
		$reserve = array (
			'movie' => $movie,
			'session' => $session,
			'seat' => array (
				'SF' => $standardAdult,
				'SP' => $standardConcession,
				'SC' => $standardChild,
				'FA' => $firstClassAdult,
				'FC' => $firstClassChild,
				'BA' => $beanBagAdult,
				'BF' => $beanBagFamily,
				'BC' => $beanBagChild
			)
		);
		
		$_SESSION['cart'][] = $reserve;
		
		echo ("<script>window.location='cart.php'</script>");
	}
?>

<?php include_once('includes/footer.php'); ?>