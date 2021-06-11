<?php
require_once './BD.php';
$link_alunoPagina = '../View/pages/alunoPagina.php';

$db = new BD_teste();// instancia do banco

// deletar na tabela alunoturmas
$db->deleteAlunoTurma($_GET['id'], 'idAluno');
// deletar na tabela turmas
$db->removeAluno($_GET['id']);
    
echo $message = "Excluído do Banco de Dados. ID: ".$_GET['id'];

header("Location: $link_alunoPagina");
die ?>
