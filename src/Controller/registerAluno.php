<?php
require_once '../Model/Aluno.php';
require_once './BD.php';
$link_alunoPagina = '../View/pages/alunoPagina.php';

$db = new BD_teste();// instancia do banco
$aluno = new Aluno($_POST['nome'], $_POST['email'], $_POST['nascimento'], $_POST['telefone'], $_POST['genero']); //instancia do modelo Aluno

if($_POST['idAluno'] != "")
{
    $aluno->setId($_POST['idAluno']); // guardando o id para mostrar pro usuário
    $db->updateAluno($aluno);//update
}
else
{
    $id = $db->saveAluno($aluno); // cadastrando no banco e recebendo o novo id
    $aluno->setId($id);

}

echo $message = "Salvo no Banco de Dados. ID: ".$aluno->getId();

header("Location: $link_alunoPagina");
exit ?>