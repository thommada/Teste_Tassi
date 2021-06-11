<?php 
require_once './BD.php';
$link_ = 'https://cadastroeducacao.000webhostapp.com/index.php';
$db = new BD_teste();

$db->saveAlunoTurma($_GET['idAluno'], $_GET['idTurma']);
$idTurma = $_GET['idTurma'];

echo $message = "Salvo no Banco de Dados.";

header("Location: $link_");
exit ?>

?>