<?php
require_once '../Model/Turma.php';
require_once './BD.php';
$$link_ = 'https://cadastroeducacao.000webhostapp.com/index.php';

$db = new BD_teste();// instancia do banco
$turma = new Turma($_POST['ano'], $_POST['nivel'], $_POST['serie'], $_POST['turno'], $_POST['escola'] ); //instancia do modelo Escola
var_dump($_POST);
if($_POST['idTurma'] != "")
{
    $turma->setId($_POST['idTurma']); // guardando o id para mostrar pro usuário
    $db->updateTurma($turma);//update
}
else
{
    $id = $db->saveTurma($turma); // cadastrando no banco e recebendo o novo id
    $turma->setId($id);
}

header("Location: $link_");
exit ?>