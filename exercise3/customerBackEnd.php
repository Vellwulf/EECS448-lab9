<html>
<link rel="stylesheet" href="style.css">
<body>
	<?php
		//shipping prices in dollars
		$shipPrices = array("free 7-day"=>0, "3-day"=>5, "overnight"=>50);
		
		$jellyNum = $_POST["jelly-legs"];
		$jellyPrice = 5.00;
		$jellyTotal = $jellyNum * $jellyPrice;
		
		$tripNum = $_POST["trip"];
		$tripPrice = 5.00;
		$tripTotal = $tripNum * $tripPrice;
		
		$pepperNum = $_POST["pepper-breath"];
		$pepperPrice = 10.00;
		$pepperTotal = $pepperNum * $pepperPrice;
		
		$shipMethod = $_POST["shipSelect"];
		
		$totalPrice = $jellyTotal + $tripTotal + $pepperTotal + $shipPrices[$shipMethod];
		
		$pass = $_POST["pass"];
		$username = $_POST["username"];
		
		echo "<h2>Welcome, " . $username . "!</h2>";
		echo "The password you entered was: " . $pass;
		echo "<br>Your receipt is below. Have a great day!";
		
	?>
	
	<table>
		<tr>
			<th> </th>
			<th>Quantity</th>
			<th>Cost per Item</th>
			<th>Sub total</th>
		</tr>
		<tr>
			<th>Jelly Legs</th>
			<td><?php echo $jellyNum; ?></td>
			<td><?php echo "$" . $jellyPrice; ?></td>
			<td><?php echo "$" . $jellyTotal; ?></td>
		</tr>
		<tr>
			<th>Trip</th>
			<td><?php echo $tripNum; ?></td>
			<td><?php echo "$" . $jellyPrice; ?></td>
			<td><?php echo "$" . $tripTotal; ?></td>
		</tr>
		<tr>
			<th>Pepper Breath</th>
			<td><?php echo $pepperNum; ?></td>
			<td><?php echo "$" . $pepperPrice; ?></td>
			<td><?php echo "$" . $pepperTotal; ?></td>
		</tr>
		<tr>
			<th>Shipping</th>
			<td><?php echo $shipMethod; ?></td>
			<td></td>
			<td><?php echo "$" . $shipPrices[$shipMethod]; ?></td>
		</tr>
		<tr>
			<th>Total Price</th>
			<td></td>
			<td></td>
			<td><?php echo "$" . $totalPrice; ?></td>
		</tr>
	</table>
</body>
</html>