<?php

    $dados = $_POST;

    $dados = implode(" - ", $dados);

    $arquivo = fopen("Devs.txt", "a+");
    
    fwrite($arquivo, $dados."\n");

    fclose($arquivo);

    header("location: listaDevs.php");
?>