<?php
include(("../models/conexao.php"));
$file = $_GET["deletarArquivo"];

$dir = "../arquivos/";
/* Excluir do diretório */
mysqli_query($conexao, "DELETE from img where nome_random = '$file' ");

unlink($dir . $file);
/* Excluir do DataBase */

echo ("Arquivo apagado!");
header("location:../views/arquivo.php");

?>