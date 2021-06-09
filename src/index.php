<?php
$title = "Teste - Cadastro Educação";
$icon_aba = "./View/imgs/icons/icon_aba.png";
$link_home = "./index.php";
$link_escolaPagina = './View/pages/escolaPagina.php';
$link_alunoPagina = './View/pages/alunoPagina.php';
$link_turmaPagina = './View/pages/turmaPagina.php';
?>
<?php
require_once './View/header.php';
?>
    <div style="display: flex; flex-direction: column; text-align: center; align-items: center; justify-content: space-evenly;">
        <div class="card" style="width: fit-content; margin: 2%;">
            <img src="./View/imgs/icons/icon_escola.png" class="card-img-top" style="width: 15%; align-self: center;" alt="...">
            <div class="card-body">
                <h5 class="card-title">Escolas</h5>
                <p class="card-text">Vizualize, Cadastre, Edite ou Exclua registros de Escolas.</p>
                <a href=<?php echo $link_escolaPagina ?> class="btn btn-primary">Ir para Escolas</a>
            </div>
        </div>
        <div class="card" style="width: fit-content; margin: 2%;">
            <img src="./View/imgs/icons/icon_aluno.png" class="card-img-top" style="width: 15%; align-self: center;" alt="...">
            <div class="card-body">
                <h5 class="card-title">Alunos</h5>
                <p class="card-text">Vizualize, Cadastre, Edite ou Exclua registros de Alunos.</p>
                <a href=<?php echo $link_alunoPagina ?> class="btn btn-primary">Ir para Alunos</a>
            </div>
        </div>
        <div class="card" style="width: fit-content; margin: 2%;">
            <img src="./View/imgs/icons/icon_turmas.png" class="card-img-top" style="width: 15%; align-self: center;" alt="...">
            <div class="card-body">
                <h5 class="card-title">Turmas</h5>
                <p class="card-text">Vizualize, Cadastre, Edite ou Exclua registros de Turmas.</p>
                <a href=<?php echo $link_turmaPagina ?> class="btn btn-primary">Ir para Turmas</a>
            </div>
        </div>
    </div>

    <?php /*Footer da Página*/ require_once './View/footer.php'; ?>