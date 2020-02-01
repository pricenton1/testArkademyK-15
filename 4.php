
<?php
function changeVocal($char,$i){
	$vocal = "aiueoAIUEO";

	$arrvocal = str_split($vocal);
	//print_r($arrvocal);

	$arrchar = str_split($char);
	echo "<pre>";
	//print_r($arrchar);

	$replace = str_replace($arrvocal, $i, $arrchar);
	echo "<pre>";
	print_r($replace);
	
	$string = implode("", $replace);
	echo "$string";
	
}
changeVocal("Orang jahat adalah orang baik yang tersakiti","i");
?>