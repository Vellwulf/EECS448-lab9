<html>
<body>
	<?php
		//shipping prices in dollars
		$shipPrices = array("free"=>0, "3-day"=>50, "overnight"=>5);
		
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
			<th>Trip Jinx</th>
			<td><?php echo $tripNum; ?></td>
			<td><?php echo "$" . $jellyPrice; ?></td>
			<td><?php echo "$" . ($tripNum * $tripPrice); ?></td>
		</tr>
		
	</table>
</body>
</html>