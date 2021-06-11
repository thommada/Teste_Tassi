<?php
$title = "Teste - Alunos";

$icon_aba = "../imgs/icons/icon_aba.png";

$link_home = '../../index.php';
$link_escolaPagina = './escolaPagina.php';
$link_alunoPagina = './alunoPagina.php';
$link_turmaPagina = './turmaPagina.php';
$link_verAluno = './verAluno.php';
$link_formAluno= './formAluno.php';
$link_excluirAluno= './excluirAluno.php';

?>
<?php require_once '../header.php'; ?>
<div style="display: flex; flex-direction: column; align-items: center;">
    <div style="text-align: center; margin: 1%; width: 90%;">
        <h3>Cadastrar Aluno</h3>
        <p>Cadastrar um novo Aluno no Banco de Dados</p>
        <br />
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="./formAluno.php" class="btn btn-primary btn-lg">Cadastrar</a>
        </div>
        <hr />
    </div>
    <div class="container-fluid" style="text-align: center; margin: 1%;">
        <div>
            <h3>Listar/Buscar Alunos</h3>
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
<?php require_once '../footer.php'; ?>