<?php
$title = "Teste - Escolas";

$icon_aba = "../imgs/icons/icon_aba.png";

$link_home = '../../index.php';
$link_escolaPagina = './escolaPagina.php';
$link_alunoPagina = './alunoPagina.php';
$link_turmaPagina = './turmaPagina.php';
$link_verEscola = './verEscola.php';
$link_formEscola = './formEscola.php';
$link_excluirEscola= './excluirEscola.php';
?>
<?php require_once '../header.php'; ?>

<div style="display: flex; flex-direction: column; align-items: center;">
    <div style="text-align: center; margin: 1%; width: 90%;">
        <h3>Cadastrar Escola</h3>
        <p>Cadastrar uma Nova Escola no Banco de Dados</p>
        <br />
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="./formEscola.php" class="btn btn-primary btn-lg">Cadastrar</a>
        </div>
        <hr />
    </div>
    <div class="container-fluid" style="text-align: center; margin: 1%;">
        <div>
            <h3>Listar/Buscar Escolas</h3>
            <p> Pesquise em branco para listar todas as escolas, ou Pesquise.</p>
        </div>
        <div class="container-fluid">
            <form action=<?php echo $link_escolaPagina ?> method="get" style="border: 1%; margin: 1%;">
                <div class="input-group">
                    <div class="input-group-text">Pesquisar</div>
                    <select class="form-select" style="max-width: fit-content;" name="atr">
                        <option value="nome">Nome da Escola</option>
                        <option value="endereco">Endereço</option>
                        <option value="situacao">Situação</option>
                    </select>
                    <input type="search" class="form-control" name="busca" placeholder="Todas as Escolas">
                    <button type="submit" class="btn btn-primary">Buscar/Listar</button>
                </div>
            </form>
        </div>
        <br />
        <div class="row" class="container-fluid" style="width: 100%;">
            <div class="table-responsive col-md-12"> 
                <table class="table table-striped" cellspacing='0' cellpadding='0'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome da Escola</th>
                            <th>Endereço</th>
                            <th>Situação</th>
                            <th class="actions">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once '../../Controller/BD.php'; // require da classe do banco
                        $bd = new BD_teste(); //instância do banco e funcionalidades

                        $results = array();
                        if (isset($_GET['busca'])) // busca no banco
                        {
                            $results = $bd->searchEscola($_GET['busca'], $_GET['atr']);
                        }

                        foreach ($results as $result) { //form de busca
                            echo "<form method='GET'>";
                            echo "<tr>";
                            echo "<td name='id'>" . $result["idEscola"] . "</td>";
                            echo "<td>" . $result["nome"] . "</td>";
                            echo "<td>" . $result["endereco"] . "</td>";
                            echo "<td>" . $result['situacao'] . "</td>";
                            echo "<td class='actions'>" .
                                "<a class='btn btn-success btn-xs' href='" . $link_verEscola . "?idEscola=" . $result['idEscola'] . "'>Visualizar</a>" .
                                "<a class='btn btn-warning btn-xs' href='" . $link_formEscola . "?idEscola=" . $result['idEscola'] . "'>Editar</a>" .
                                "<a class='btn btn-danger btn-xs' href='" . $link_excluirEscola . "?idEscola=" . $result['idEscola'] . "'>Excluir</a>" .
                                "</td>";
                            echo "</tr>";
                            echo "</form>";
                        }


                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require_once '../footer.php'; ?>