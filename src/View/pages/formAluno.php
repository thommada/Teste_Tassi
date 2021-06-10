<?php
$title = "Cadastro Educação - Formulário Aluno";

$icon_aba = "../imgs/icons/icon_aba.png";

$link_home = '../../index.php';
$link_escolaPagina = './escolaPagina.php';
$link_alunoPagina = './alunoPagina.php';
$link_turmaPagina = './turmaPagina.php';



?>
<?php require_once '../header.php'; ?>

<div>
    <h2>Date Field</h2>

    <p>The <strong>input type="date"</strong> is used for input fields that should contain a date.</p>

    <form action="" method="get">
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">
        <input type="submit" value="Submit">
    </form>
</div>


<?php require_once '../footer.php'; ?>