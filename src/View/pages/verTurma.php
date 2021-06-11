<?php
$title = "Cadastro Educação - Perfil de Turma";

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

$results = $bd->searchExactlyTurma($_GET['idTurma'], "idTurma")[0];
$escolaTurma = $bd->searchExactlyEscola($results['idEscola'], 'idEscola')[0];
?>
<div class="container-fluid" style="width:100%; justify-content: center; text-align: center; ">
    <div>
        <br />
        <h3>Perfil de Turma</h3>
        <hr />

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><strong>Nível de Ensino: </strong><?php echo $results['nivel']; ?></h1>
                <h1 class="display-4"><strong>Série/Período: </strong><?php echo $results['serie']; ?></h1>
                <h3 class="lead"><strong>ID: </strong> <?php echo $results['idTurma']; ?></h3>
                <br />
                <h3><strong>Ano: </strong> <?php echo $results['ano']; ?></h3>
                <h3><strong>Turno: </strong> <?php echo date('d-m-Y', strtotime($results['turno'])); ?></h3>
                <h3><strong>Escola: </strong> <?php echo $escolaTurma['nome']; ?></h3>
            </div>
        </div>
        <hr />
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href=<?php echo $link_turmaPagina ?> class="btn btn-primary btn-lg">Retornar</a>
        </div>
    </div>
</div>


<?php require_once '../footer.php'; ?>