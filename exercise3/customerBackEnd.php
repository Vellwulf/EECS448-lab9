<html>
<body>
	<?php
		//shipping prices in dollars
		$shipPrices = array("free"=>0, "3-day"=>5, "overnight"=>50);
		
		$jellyNum = $_POST["jelly-legs"];
		$jellyPrice = 5.00;
		
		$tripNum = $_POST["trip"];
		$tripPrice = 5.00;
		
		$pepperNum = $_POST["pepper-breath"];
		$pepperPrice = 10.00;
		
		$shipMethod = $_POST["shipSelect"];
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
			<td><?php echo "$" . ($jellyNum * $jellyPrice); ?></td>
		</tr>
		<tr>
			<th>Trip</th>
			<td><?php echo $tripNum; ?></td>
			<td><?php echo "$" . $jellyPrice; ?></td>
			<td><?php echo "$" . ($tripNum * $tripPrice); ?></td>
		</tr>
		<tr>
			<th>Pepper Breath</th>
			<td><?php echo $pepperNum; ?></td>
			<td><?php echo "$" . $pepperPrice; ?></td>
			<td><?php echo "$" . ($pepperNum * $pepperPrice); ?></td>
		</tr>
		<tr>
			<th>Shipping</th>
			<td><?php echo $shipMethod; ?></td>
			<td></td>
			<td><?php echo "$" . $shipPrices[$shipMethod]; ?></td>
	</table>
</body>
</html>