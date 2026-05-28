<?php

echo"================================================Atbash Cipher Decoder====================================================".PHP_EOL;
$cipher="VDFXHX{ZGYZHS_NRIILOW_ZOISZY VG}";


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