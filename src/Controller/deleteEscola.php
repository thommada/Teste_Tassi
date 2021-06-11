<?php
require_once './BD.php';
$link_escolaPagina = '../View/pages/escolaPagina.php';

$db = new BD_teste();// instancia do banco

$turmas = $db->listTurmasEscola($_GET['id']);

foreach ($turmas as $turma)
{
    // deletar na tabela alunoturmas
    $db->deleteAlunoTurma($turma['idTurma'], 'idTurma');
    // deletar na tabela turmas
    $db->removeTurma($turma['idTurma']);
    
    

}
// deletar na tabela de escolas
$db->removeEscola($_GET['id']);

echo $message = "Excluído do Banco de Dados. ID: ".$_GET['id'];

header("Location: $link_escolaPagina");
die ?>