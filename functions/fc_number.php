<?php

function apenasNumero($text){

	return preg_replace('/\D/', '', $text);

}

function formataNumero($num){

	return floatval(str_replace(',', '.', str_replace('.', '', $num)));

}

?>