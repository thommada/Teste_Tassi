<?php
$title = "Cadastro Educação - Formulário Escola";

$icon_aba = "../imgs/icons/icon_aba.png";

$link_home = '../../index.php';
$link_escolaPagina = './escolaPagina.php';
$link_alunoPagina = './alunoPagina.php';
$link_turmaPagina = './turmaPagina.php';



?>
<?php require_once '../header.php'; ?>
<?php
require_once '../../Controller/BD.php';
$db = new BD_teste();
$result = array("nome"=>"", "endereco"=>"", "situacao"=>"");


if(isset($_GET['idEscola']))
{
    $result = $db->searchExactlyEscola($_GET['idEscola'],'idEscola')[0];
}


?>
<div class="container" style="width: 100%;">
    <div style="width: 100%; text-align: center; margin-top: 2%;">
        <h2><strong>Formulário de Escola</strong></h2>
    </div>
    <form method="GET" action="">
        <div class="mb-3">
            <label for="nomeEscola" class="form-label">Nome da Escola</label>
            <input type="text" class="form-control" id="nome" value="<?php echo $result['nome']; ?>" name="nome" required>
            <div id="nomeHelp" class="form-text">Nome Completo da Escola</div>
        </div>
        <div class="mb-3">
            <label for="enderecoEscola" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $result['endereco']; ?>">
        </div>
        <div class="mb-3">
            <label for="situacaoEscola" class="form-label">Situação</label>
            <select class="form-select form-select-lg mb-3" id="situacao" name="situacao" required>
                <option value="<?php echo $result['situacao']; ?>"><?php echo "Padrão: ".$result['situacao']; ?></option>
                <option value="Ativa">Ativa</option>
                <option value="Inativa">Inativa</option>
                <option value="Outra">Outra</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>


<?php require_once '../footer.php'; ?>