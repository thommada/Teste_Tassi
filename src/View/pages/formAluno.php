<?php
$title = "Cadastro Educação - Formulário Aluno";

$icon_aba = "../imgs/icons/icon_aba.png";

$link_home = '../../index.php';
$link_escolaPagina = './escolaPagina.php';
$link_alunoPagina = './alunoPagina.php';
$link_turmaPagina = './turmaPagina.php';

$link_registerAluno = '../../Controller/registerAluno.php';

?>
<?php require_once '../header.php'; ?>
<?php
require_once '../../Controller/BD.php';
$db = new BD_teste();
$result = array("idAluno" => "", "nome" => "", "nascimento" => "", "telefone" => "", "email" => "", "genero" => "");

if (isset($_GET['idAluno'])) {
    $result = $db->searchExactlyAluno($_GET['idAluno'], 'idAluno')[0];
}

?>
<div class="container" style="width: 100%;">
    <div style="width: 100%; text-align: center; margin-top: 2%;">
        <h2><strong>Formulário de Aluno</strong></h2>
    </div>
    <form method="POST" action="<?php echo $link_registerAluno ?>">
        <div class="mb-3">
            <input type="hidden" class="form-control-plaintext" id="idAluno" value="<?php echo $result['idAluno']; ?>" name="idAluno">
        </div>
        <div class="mb-3">
            <label for="nomeAluno" class="form-label">Nome da Aluno</label>
            <input type="text" class="form-control" id="nome" value="<?php echo $result['nome']; ?>" name="nome" required>
            <div id="nomeHelp" class="form-text">Nome Completo do Aluno</div>
        </div>
        <div class="mb-3">
            <label for="emailAluno" class="form-label">E-Mail</label>
            <input type="email" class="form-control" id="email" value="<?php echo $result['email']; ?>" name="email" required>
            <div id="emailHelp" class="form-text">E-Mail válido</div>
        </div>
        <div class="mb-3">
            <label for="nascimentoAluno">Data de Nascimento</label>
            <input type="date" class="form-control" id="nascimento" value="<?php echo $result['nascimento']; ?>" name="nascimento">
        </div>
        <div class="mb-3">
            <label for="telefoneAluno">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" value="<?php echo $result['telefone']; ?>">
        </div>
        <div class="mb-3">
            <label for="generoAluno">Gênero</label>
            <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $result['genero']; ?>">
        </div>

        <button type="submit" href="<?php echo $link_registerAluno ?>" class="btn btn-primary">Salvar</button>
    </form>
</div>

<?php require_once '../footer.php'; ?>