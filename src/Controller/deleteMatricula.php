<?php 
require_once './BD.php';
$link_ = 'https://cadastroeducacao.000webhostapp.com/index.php';
$link_retorno = '../View/pages/.php';
$db = new BD_teste();

$db->deleteSingleAlunoTurma($_GET['idAlunoTurma']);
$idTurma = $_GET['idTurma'];

header("Location: $link_");
exit ?>

?>