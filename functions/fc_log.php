<?php
header('Content-Type: text/html; charset=UTF-8');

function escreveTexto($errorText = ''){

    //$arquivo = null;

    $hoje = Date('Ymd');
    //if(!file_exists("loadXMLFileHomoV2_".$hoje.".txt")){
        $arquivo = fopen("loadXMLFileHomoV2_".$hoje.".txt", "ab");
    //}

    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {

        if(PHP_SAPI == 'cli') {
            echo Date('d/m/Y H:i:s') . "[INFO]:" . utf8_decode($errorText) . "\n";
        }else {
            echo Date('d/m/Y H:i:s') . "[INFO]:" . $errorText . "</br>";
        }

        fwrite($arquivo, Date('d/m/Y H:i:s') . "[INFO]:" . utf8_decode($errorText) . "\r\n");

    } else {

        if(PHP_SAPI == 'cli') {
            echo Date('d/m/Y H:i:s') . "[INFO]:" . $errorText . "\n";
        }else {
            echo Date('d/m/Y H:i:s') . "[INFO]:" . $errorText . "</br>";
        }

        fwrite($arquivo, Date('d/m/Y H:i:s') . "[INFO]:" . $errorText . "\r\n");

    }

    fclose($arquivo);

}

?>