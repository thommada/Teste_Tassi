<?php
$title = "Teste - Escolas";

$icon_aba = "../imgs/icons/icon_aba.png";
$icon_cadastrar =
    $link_home = '../../index.php';
$link_escolaPagina = './escolaPagina.php';
$link_alunoPagina = './alunoPagina.php';
$link_turmaPagina = './turmaPagina.php';


?>
<?php require_once '../header.php'; ?>
<div style="display: flex; flex-direction: column; align-items: center;">
    <div style="text-align: center; margin: 1%;">
        <h3>Cadastrar Escola</h3>
        <br />
        <a href="#" class="btn btn-primary">Cadastrar</a>
    </div>
    <hr size="2"/>
    <div style="text-align: center; margin: 1%; width: 100%">
        <div>
            <h3>Listar Escolas</h3>
        </div>
        <div style="width: 100%;">
            <form style="border: 1%; margin: 1%;">
                <div class="input-group">
                    <div class="input-group-text">Nome da Escola</div>
                    <input type="text" class="form-control" id="buscaEscola" placeholder="Colégio Exemplo">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>

            </form>

        </div>
        <div>
        </div>
    </div>
</div>
<?php require_once '../footer.php'; ?>