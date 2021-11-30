<?php
	function makeRow($row) {
		echo "<th>$row</th>";
		
		for ($col = 1; $col <= 100; $col++) {
			echo "<td>" . $row * $col . "</td>";
		}
	}

	echo "<h1>Multiplication Table</h1>";
  
	echo "<table><tr>";
	echo "<td> </td>";
  
	for ($x = 1; $x <= 100; $x++)
		echo "<th>$x</th>";
  
	echo "</tr>";
  
	for ($x = 1; $x <= 100; $x++) {
		echo "<tr>";
		makeRow($x);
		echo "</tr>";
	}
?>
