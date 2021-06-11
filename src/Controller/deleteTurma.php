<?php
require_once './BD.php';
$link_ = 'https://cadastroeducacao.000webhostapp.com/index.php';

$db = new BD_teste();// instancia do banco

// deletar na tabela alunoturmas
$db->deleteAlunoTurma($_GET['id'], 'idTurma');
// deletar na tabela turmas
$db->removeTurma($_GET['id']);
    
echo $message = "Excluído do Banco de Dados. ID: ".$_GET['id'];

header("Location: $link_");
die ?>
