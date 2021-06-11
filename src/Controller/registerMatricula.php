<?php 
require_once './BD.php';
$link_matricularturma = '../View/pages/matricularTurma.php';
$db = new BD_teste();

$db->saveAlunoTurma($_GET['idAluno'], $_GET['idTurma']);
$idTurma = $_GET['idTurma'];

echo $message = "Salvo no Banco de Dados.";

header("Location: $link_matricularturma?idTurma=$idTurma");
exit ?>

?>