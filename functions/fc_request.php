<?php

$LimitRemainingDefault = 500;
$LimitRemaining = $LimitRemainingDefault;
$LimitResetDefault = 300;
$LimitResetStart = new DateTime();
$LimitResetCurrent;
$LimitReset;

function controlaRequest() {

	$GLOBALS['LimitRemainingDefault'];
	$GLOBALS['LimitRemaining'];
	$GLOBALS['LimitResetDefault'];
	$GLOBALS['LimitResetStart'];
	$GLOBALS['LimitResetCurrent'] = new DateTime();

	$interval = $GLOBALS['LimitResetCurrent']->diff($GLOBALS['LimitResetStart']);

	$segundos = $interval->s;

	$GLOBALS['LimitRemaining']--;

	if(
		($GLOBALS['LimitRemaining'] == 1 AND $segundos > 0)
		// OR
		// ($GLOBALS['LimitRemaining'] > 0 AND $segundos == 299)
	){

		$header = listHeaderInfo();

		list($nome, $valor) = explode(":", $header[8]);

		$GLOBALS['LimitRemaining'] = $valor;

		escreveTexto("Requisições Restantes: " . $GLOBALS['LimitRemaining']);

		list($nome, $valor) = explode(":", $header[9]);

		$GLOBALS['LimitReset'] = $valor;

		//escreveTexto("Tempo Restante: " . $LimitReset . " segundos.");

		escreveTexto("Aguardando " . $GLOBALS['LimitReset'] . " segundos.");
		sleep($GLOBALS['LimitReset']);

		$GLOBALS['LimitRemaining'] = $GLOBALS['LimitRemainingDefault'];
		$GLOBALS['LimitResetStart'] = new DateTime();

	} else {

		escreveTexto("Requisições Restantes: " . $GLOBALS['LimitRemaining']);
		escreveTexto("Tempo Restante: " . ($GLOBALS['LimitResetDefault'] - $segundos));
		
	}

}

// function controlaRequest() {

// 	$GLOBALS['LimitResetCurrent'] = new DateTime();
// 	$GLOBALS['LimitResetStart'];

// 	$interval = $GLOBALS['LimitResetCurrent']->diff($GLOBALS['LimitResetStart']);

// 	$segundos = $interval->s;

// 	$GLOBALS['LimitRemaining']--;

// 	if(
// 		($GLOBALS['LimitRemaining'] == 1 AND $segundos > 0)
// 		OR
// 		($GLOBALS['LimitRemaining'] > 0 AND $segundos == 299)
// 	){

// 		$header = listHeaderInfo();

// 		list($nome, $valor) = explode(":", $header[8]);

// 		$LimitRemaining = $valor;

// 		escreveTexto("Requisições Restantes: " . $LimitRemaining);

// 		list($nome, $valor) = explode(":", $header[9]);

// 		$LimitReset = $valor;

// 		//escreveTexto("Tempo Restante: " . $LimitReset . " segundos.");

// 		escreveTexto("Aguardando " . $LimitReset . " segundos.");
// 		sleep($LimitReset);

// 		$GLOBALS['LimitRemaining'] = 500;
// 		$GLOBALS['LimitResetStart'] = new DateTime();

// 	} else {

// 		escreveTexto("Requisições Restantes: " . $GLOBALS['LimitRemaining']);
// 		escreveTexto("Tempo Restante: " . (300 - $segundos));
		
// 	}

// }