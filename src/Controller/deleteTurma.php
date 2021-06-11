<?php
require_once './BD.php';
$link_turmaPagina = '../View/pages/turmaPagina.php';

$db = new BD_teste();// instancia do banco

// deletar na tabela alunoturmas
$db->deleteAlunoTurma($_GET['id'], 'idTurma');
// deletar na tabela turmas
$db->removeTurma($_GET['id']);
    
echo $message = "Excluído do Banco de Dados. ID: ".$_GET['id'];

header("Location: $link_turmaPagina");
die ?>
