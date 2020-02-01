<?php 
	function printSquare($num){

		$onerow = ($num / $num);

		$char1 = "*";
		$char2 = ".";

		echo '<div style="font:bold 16px courier new; line-height:10px;letter-spacing:10px;">';
		//loop baris
		for ($row=1; $row<= $num; $row++) { 
			//loop kolom
			for ($col=1; $col<=$num; $col++) { 
				if ($col == $onerow) {
					echo "$char1";
				}
				elseif ($row == $onerow) {
					echo "$char1";
				}
				elseif ($col == $num ) {
					echo "$char1";
				}
				elseif ($row == $num) {
					echo "$char1";
				}
				else {
					echo "$char2";
				}			
			}
			echo '<br/>';
		}
		echo "</div>";		

	}
	printSquare(4)

 ?>