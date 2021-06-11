<?php
$title = "Cadastro Educação - Matricula";

$icon_aba = "../imgs/icons/icon_aba.png";

$link_home = '../../index.php';
$link_escolaPagina = './escolaPagina.php';
$link_alunoPagina = './alunoPagina.php';
$link_turmaPagina = './turmaPagina.php';

$link_registerMatricula = '../../Controller/registerMatricula.php';

?>
<?php require_once '../header.php'; ?>
<?php
require_once '../../Controller/BD.php';
$bd = new BD_teste();
$turma = $bd->searchExactlyTurma($_GET['idTurma'], 'idTurma')[0];

?>

<div class="container-fluid" style="width:100%; justify-content: center; text-align: center; ">
    <div class="">
        <br />
        <h4><strong>Turma</strong></h4>
        <hr />
        <br />
        <h2><strong>Ano: </strong><?php echo $turma['ano'] ?></h2>
        <h2><strong>Serie: </strong><?php echo $turma['serie'] ?></h2>
        <h2><strong>Nível de Ensino: </strong><?php echo $turma['nivel'] ?></h2>
        <br />
    </div>
    <hr />
    <div>
        <div>
            <h4><strong>Alunos Matriculados</strong></h4>
        </div>
        <div class="row" class="container-fluid" style="width: 100%;">
            <div class="table-responsive col-md-12">
                <table class="table table-striped" cellspacing='0' cellpadding='0'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do Aluno</th>
                            <th>e-mail</th>
                            <th>Telefone</th>
                            <th>Nascimento</th>
                            <th>Gênero</th>
                            <th class="actions">Matrícula</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once '../../Controller/BD.php'; // require da classe do banco
                        $bd = new BD_teste(); //instância do banco e funcionalidades

                        $results = array();

                        foreach ($results as $result) { //form de busca
                            echo "<form method='get'>";
                            echo "<tr>";
                            echo "<td name='id'>" . $result["idAluno"] . "</td>";
                            echo "<td>" . $result["nome"] . "</td>";
                            echo "<td>" . $result["email"] . "</td>";
                            echo "<td>" . $result['telefone'] . "</td>";
                            echo "<td>" . date('d-m-Y', strtotime($result["nascimento"])) . "</td>";
                            echo "<td>" . $result['genero'] . "</td>";
                            echo "<td class='actions'>" .
                                "<a class='btn btn-success btn-xs' href='" . $link_verAluno . "?idAluno=" . $result['idAluno'] . "'>Visualizar</a>" .
                                "<a class='btn btn-warning btn-xs' href='" . $link_formAluno . "?idAluno=" . $result['idAluno'] . "'>Editar</a>" .
                                "<a class='btn btn-danger btn-xs' href='" . $link_excluirAluno . "?idAluno=" . $result['idAluno'] . "'>Excluir</a>" .
                                "</td>";
                            echo "</tr>";
                            echo "</form>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr />
    </div>
    <div class="container-fluid" style="text-align: center; margin: 1%;">
        <div>
            <h3>Buscar Alunos</h3>
            <p> Pesquise em branco para listar todas os Alunos, ou Pesquise.</p>
        </div>
        <div class="container-fluid">
            <form action=<?php echo $link_alunoPagina ?> method="get" style="border: 1%; margin: 1%;">
                <div class="input-group">
                    <div class="input-group-text">Pesquisar</div>
                    <select class="form-select" style="max-width: fit-content;" name="atr">
                        <option value="nome">Nome do Aluno</option>
                        <option value="email">E-mail do Aluno</option>
                    </select>
                    <input type="search" class="form-control" name="busca" placeholder="Todas os Alunos">
                    <button type="submit" class="btn btn-primary">Buscar/Listar</button>
                </div>
            </form>
        </div>
        <br />
        <div>
            <div class="row" class="container-fluid" style="width: 100%;">
                <div class="table-responsive col-md-12">
                    <table class="table table-striped" cellspacing='0' cellpadding='0'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome do Aluno</th>
                                <th>e-mail</th>
                                <th>Telefone</th>
                                <th>Nascimento</th>
                                <th>Gênero</th>
                                <th class="actions">Matrícula</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once '../../Controller/BD.php'; // require da classe do banco
                            $bd = new BD_teste(); //instância do banco e funcionalidades

                            $results = array();
                            if (isset($_GET['busca'])) // busca no banco
                            {
                                $results = $bd->searchAluno($_GET['busca'], $_GET['atr']);
                            }

                            foreach ($results as $result) { //form de busca
                                echo "<form method='get'>";
                                echo "<tr>";
                                echo "<td name='id'>" . $result["idAluno"] . "</td>";
                                echo "<td>" . $result["nome"] . "</td>";
                                echo "<td>" . $result["email"] . "</td>";
                                echo "<td>" . $result['telefone'] . "</td>";
                                echo "<td>" . date('d-m-Y', strtotime($result["nascimento"])) . "</td>";
                                echo "<td>" . $result['genero'] . "</td>";
                                echo "<td class='actions'>" .
                                    "<a class='btn btn-success btn-xs' href='" . $link_verAluno . "?idAluno=" . $result['idAluno'] . "'>Visualizar</a>" .
                                    "<a class='btn btn-warning btn-xs' href='" . $link_formAluno . "?idAluno=" . $result['idAluno'] . "'>Editar</a>" .
                                    "<a class='btn btn-danger btn-xs' href='" . $link_excluirAluno . "?idAluno=" . $result['idAluno'] . "'>Excluir</a>" .
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
</div>
</div>


<?php require_once '../footer.php'; ?>