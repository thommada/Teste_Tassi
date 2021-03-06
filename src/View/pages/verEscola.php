<?php
$title = "Cadastro Educação - Perfil Escola";

$icon_aba = "../imgs/icons/icon_aba.png";

$link_home = '../../index.php';
$link_escolaPagina = './escolaPagina.php';
$link_alunoPagina = './alunoPagina.php';
$link_turmaPagina = './turmaPagina.php';

?>
<?php require_once '../header.php'; ?>
<?php
require_once '../../Controller/BD.php';
$bd = new BD_teste();

$results = $bd->searchExactlyEscola($_GET['idEscola'], "idEscola")[0];
?>
<div class="container-fluid" style="width:100%; justify-content: center; text-align: center; ">
    <div>
        <br />
        <h3>Perfil de Escola</h3>
        <hr />

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><strong>Nome: </strong><?php echo $results['nome']; ?></h1>
                <h3 class="lead"><strong>ID: </strong> <?php echo $results['idEscola']; ?></h3>
                <br />
                <h3><strong>Endereço: </strong> <?php echo $results['endereco']; ?></h3>
                <h3><strong>Situação: </strong> <?php echo $results['situacao']; ?></h3>
            </div>
        </div>
        <hr />
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href=<?php echo $link_escolaPagina ?> class="btn btn-primary btn-lg">Retornar</a>
        </div>
    </div>
</div>


<?php require_once '../footer.php'; ?>