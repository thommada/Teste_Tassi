<?php 
require_once './BD.php';
$link_ = 'https://cadastroeducacao.000webhostapp.com/index.php';;
$db = new BD_teste();

$db->deleteSingleAlunoTurma($_GET['idAlunoTurma']);
$idTurma = $_GET['idTurma'];

echo $message = "Excluido do Banco de Dados.";

header("Location: $link_");
exit ?>

?>