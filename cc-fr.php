<?php
/*Color*/
$verde = "\033[32m";
$rojo = "\033[31m";
$celeste = "\033[36m";
$amarillo = "\033[33m";
$morado = "\033[35m";
$azul = "\033[34m";
$plomo = "\033[30m";

/*Form*/
$date   = date('d-M-Y H:i');
sleep(2);

echo $amarillo. "	           
           ————————————————————————————————————————
             |   ★MUNDO BINS REALWORLDRH_593★   |
           ————————————————————————————————————————\n";
 echo "==================================================================";
echo "\n
\033[01;31m[★] DESARROLLADO POR \033[01;32;1m@REALHACKRH593 (Telegram)\033[01;31m\n";
sleep(1);
echo "\033[01;31m[★] PROHIBIDO LA VENTA DE LA HERRAMIENTA\n";
sleep(1);
echo "[★] UNETE A: \033[01;32;1m@MundoNetRH (Telegram)\033[01;31m PARA MAS!.\n";
sleep(1);
echo "[★] SIEMPRE AGRADECE POR LO QUE HACEMOS.\n";
sleep(1);
echo "[★] EL CONOCIMIENTO NO TIENE FIN\n";
sleep(1);
echo $amarillo. "\n————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————";

//CANTIDAD DE CC

echo $celeste . "\n\nCANTIDAD DE CC A BUSCAR :  ";
$count = trim(fgets(STDIN,1024));

//GENERAR CC

for($x = 0; $x < $count; $x++){
$str = file_get_contents("http://namegenerators.org/fake-name-generator-fr/");
$var = '/<div class="col2">(.*?)<\/div>/s';
preg_match_all($var, $str, $matches);

// INFORMACION DE LA TARGETA

sleep(5);
echo "\033[33m%%%%%%%%%\033[34m%%%%%%%\033[31m%%%%%%\033[32m MUNDO BINS ★RH★_593 \033[33m%%%%%%%%%\033[01;34m%%%%%%%\033[31m%%%%%%\n";

echo $rojo . "\n=================== INFORMACION DEL USUARIO ======================\n\n";
echo $verde . "[NOMBRE : ".str_replace("</span>", "", str_replace('<span class="name">', "", $matches[1][3]))."]".
		" \n[LUGAR : ".$matches[1][8]."]".
		" \n[CORREO : ".$matches[1][10]."]".
		" \n[TELEFONO : ".$matches[1][9]."]\n";
echo $rojo . "====================== TARGETA DE CREDITO  =======================\n\n";
echo $azul . " \n[TARGETA DE CREDITO : ".str_replace(" ", "", $matches[1][14])."]".
		" \n[CVV : ".$matches[1][16]."]".
		" \n[FECHA : ".$matches[1][15]."]\n\n";
	sleep(5);
}
echo ">  FECHA DE GENERACION : " .$plomo .$date."\n";
?>
