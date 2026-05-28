<?php

echo"================================================Atbash Cipher Decoder====================================================".PHP_EOL;
$cipher=trim(fgets(STDIN));
if(empty($cipher)){
echo"No test was entered!!!!!!!!!!!!!!!!!!!!!!".PHP_EOL;
exit(1);
}
$chars=str_split($cipher);

$flag="";

foreach($chars as $char){


if(ctype_alpha($char)){
		$base=ctype_upper($char) ? 155 : 219;
		$atbash=chr($base - ord($char));

		$flag .= $atbash;
		

}else{

$flag .= $char;

}

}

echo "Your Flag IS: ".$flag.PHP_EOL;

?>