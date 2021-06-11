<?php
require_once '../Model/Escola.php';
require_once './BD.php';
$link_ = 'https://cadastroeducacao.000webhostapp.com/index.php';

$db = new BD_teste();// instancia do banco
$escola = new Escola($_POST['nome'], $_POST['endereco'], $_POST['situacao']); //instancia do modelo Escola

if($_POST['idEscola'] != "")
{
    $escola->setId($_POST['idEscola']); // guardando o id para mostrar pro usuário
    $db->updateEscola($escola);//update
}
else
{
    $id = $db->saveEscola($escola); // cadastrando no banco e recebendo o novo id
    $escola->setId($id);
}

echo $message = "Salvo no Banco de Dados. ID: ".$escola->getId();

header("Location: $link_");
exit ?>