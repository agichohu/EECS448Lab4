<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	echo "<p> Multiplication Table!! </p>";
	for ($row=1; $row <= 100; $row++) {
		echo "<tr> \n";
		for ($col=1; $col <= 100; $col++) {
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
