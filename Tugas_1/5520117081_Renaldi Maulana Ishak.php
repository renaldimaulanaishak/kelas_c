<?php 
	$kangguru1 = " ";
	$kangguru2 = " ";
	function kangguru ($x1,$v1,$x2,$v2) {
		echo "kangguru (".$x1.",".$v1.",".$x2.",".$v2.")";
		echo "<br>";
		for ($i=0;$i<4;$i++){
			$x1 += $v1;
			$x2 += $v2;
			@$kangguru1.= $x1. " ";
			@$kangguru2.= $x2. " ";
		}
			echo "kangguru1"."=".kangguru1;
			echo "<br>";
			echo "kangguru2"."=".kangguru2;
			echo "<br>";

		if ($x1 == $x2){
			echo "YES<br>";
		}
		else {
			echo "NO<br>";
		}
	}
	kangguru (0,3,4,2);
	kangguru (1,5,4,2);
	
 ?>