<?php 
require_once './BD.php';
$link_matricularturma = '../View/pages/matricularTurma.php';
$db = new BD_teste();

$db->deleteSingleAlunoTurma($_GET['idAlunoTurma']);
$idTurma = $_GET['idTurma'];

echo $message = "Excluido do Banco de Dados.";

header("Location: $link_matricularturma?idTurma=$idTurma");
exit ?>

?>