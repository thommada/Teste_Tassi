<?php
$title = "Teste - Turmas";
$icon_aba = "../imgs/icons/icon_aba.png";
$link_home = '../../index.php';
$link_escolaPagina = './escolaPagina.php';
$link_alunoPagina = './alunoPagina.php';
$link_turmaPagina = './turmaPagina.php';
$link_verTurma = './verTurma.php';
$link_formTurma= './formTurma.php';

?>
<?php require_once '../header.php'; ?>
<div style="display: flex; flex-direction: column; align-items: center;">
    <div style="text-align: center; margin: 1%; width: 90%;">
        <h3>Cadastrar Turma</h3>
        <p>Cadastrar uma Nova Turma no Banco de Dados</p>
        <br />
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="./formTurma.php" class="btn btn-primary btn-lg">Cadastrar</a>
        </div>
        <hr />
    </div>
    <div class="container-fluid" style="text-align: center; margin: 1%;">
        <div>
            <h3>Listar/Buscar Turmas</h3>
            <p> Pesquise em branco para listar todas as turmas, ou Pesquise.</p>
        </div>
        <div class="container-fluid">
            <form action=<?php echo $link_turmaPagina ?> method="get" style="border: 1%; margin: 1%;">
                <div class="input-group">
                    <div class="input-group-text">Pesquisar</div>
                    <select class="form-select" style="max-width: fit-content;" name="atr">
                        <option value="ano">Ano</option>
                        <option value="serie">Serie</option>
                        <option value="nivel">Nível de Ensino</option>
                        <option value="turno">Turno</option>
                    </select>
                    <input type="search" class="form-control" name="busca" placeholder="Todas as Turmas">
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
                            <th>Ano</th>
                            <th>Nível de Ensino</th>
                            <th>Série</th>
                            <th>Turno</th>
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
                            $results = $bd->searchTurma($_GET['busca'], $_GET['atr']);
                        }

                        foreach ($results as $result) { //form de busca
                            echo "<form method='get'>";
                            echo "<tr>";
                            echo "<td name='id'>" . $result["idTurma"] . "</td>";
                            echo "<td>" . $result["ano"] . "</td>";
                            echo "<td>" . $result["nivel"] . "</td>";
                            echo "<td>" . $result['serie'] . "</td>";
                            echo "<td>" . $result['turno'] . "</td>";
                            echo "<td class='actions'>" .
                                "<a class='btn btn-success btn-xs' href='" . $link_verTurma . "?idTurma=" . $result['idTurma'] . "'>Visualizar</a>" .
                                "<a class='btn btn-warning btn-xs' href='" . $link_formTurma . "?idTurma=" . $result['idTurma'] . "'>Editar</a>" .
                                "<a class='btn btn-danger btn-xs' href='" . $link_verTurma . "?idTurma=" . $result['idTurma'] . "'>Excluir</a>" .
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