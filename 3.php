<?php 
	//fungsi dengan parameter string
	function createRandomString($char)
	{
		
		$char_len = strlen($char);
		
		$string = str_shuffle($char);

		if ($char == is_int($char) || $char == is_null($char)) {
			echo "Harus terdapat parameter dan harus string";
		}
		else{
			echo "$string";
		}


	}
	echo createRandomString('SayaSeorangAmatiran');

 ?>
