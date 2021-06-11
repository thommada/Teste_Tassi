<?php
$title = "Cadastro Educação - Matricula";

$icon_aba = "../imgs/icons/icon_aba.png";

$link_home = '../../index.php';
$link_escolaPagina = './escolaPagina.php';
$link_alunoPagina = './alunoPagina.php';
$link_turmaPagina = './turmaPagina.php';

$link_registerMatricula = '../../Controller/registerMatricula.php';
$link_deleteMatricula = '../../Controller/deleteMatricula.php';


?>
<?php require_once '../header.php'; ?>
<?php
require_once '../../Controller/BD.php';
$db = new BD_teste();
$turma = $db->searchExactlyTurma($_GET['idTurma'], 'idTurma')[0];

$matriculas = $db->searchAlunoTurma($_GET['idTurma']);

?>

<div class="container-fluid" style="width:100%; justify-content: center; text-align: center; ">
    <div>
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
                                <th class="actions">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once '../../Controller/BD.php'; // require da classe do banco
                            $bd = new BD_teste(); //instância do banco e funcionalidades
                            

                            foreach ($matriculas as $matricula) : //form de busca
                                $idAlunoTurma = $matricula['idAlunoTurma'];
                                $matriculado = $db->searchExactlyAluno($matricula['idAluno'], 'idAluno')[0];
                            ?>
                                <form method='GET' action='../../Controller/deleteMatricula.php'>
                                    <input type="hidden" name="idTurma" value="<?php echo $turma['idTurma'] ?>">
                                    <input type="hidden" name="idAluno" value="<?php echo $matriculado['idAluno'] ?>">
                                    <input type="hidden" name="idAlunoTurma" value="<?php echo $idAlunoTurma ?>">
                                    <tr>
                                        <td><?php echo $matriculado['idAluno'] ?></td>
                                        <td><?php echo $matriculado['nome'] ?></td>
                                        <td><?php echo $matriculado['email'] ?></td>
                                        <td><?php echo $matriculado['telefone'] ?></td>
                                        <td><?php echo date('d-m-Y', strtotime($matriculado['nascimento'])); ?></td>
                                        <td><?php echo $matriculado['genero'] ?></td>
                                        <td class='actions'>
                                            <button type=submit class="btn btn-dark">Retirar Matrícula</button>
                                        </td>
                                    </tr>
                                </form>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
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
            <form action='./matricularTurma.php' method="get" style="border: 1%; margin: 1%;">
                <div class="input-group">
                    <div class="input-group-text">Pesquisar</div>
                    <select class="form-select" style="max-width: fit-content;" name="atr">
                        <option value="nome">Nome do Aluno</option>
                        <option value="email">E-mail do Aluno</option>
                    </select>
                    <input type="hidden" class="form-control" name="idTurma" value="<?php echo $_GET['idTurma'] ?>">
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
                                <th class="actions">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once '../../Controller/BD.php'; // require da classe do banco
                            $bd = new BD_teste(); //instância do banco e funcionalidades
                        
                            $alunos = array();
                            if (isset($_GET['busca'])) // busca no banco
                            {
                                $alunos = $bd->searchAluno($_GET['busca'], $_GET['atr']);
                            }

                            foreach ($alunos as $aluno) : //form de busca
                            ?>
                                <form method='GET' action='../../Controller/registerMatricula.php'>
                                    <input type="hidden" name="idTurma" value="<?php echo $turma['idTurma']?>">
                                    <input type="hidden" name="idAluno" value="<?php echo $aluno['idAluno']?>">
                                    <tr>
                                        <td><?php echo $aluno['idAluno'] ?></td>
                                        <td><?php echo $aluno['nome'] ?></td>
                                        <td><?php echo $aluno['email'] ?></td>
                                        <td><?php echo $aluno['telefone'] ?></td>
                                        <td><?php echo date('d-m-Y', strtotime($aluno['nascimento'])); ?></td>
                                        <td><?php echo $aluno['genero'] ?></td>
                                        <td class='actions'>
                                            <button type=submit class="btn btn-dark">Matricular</button>
                                        </td>
                                    </tr>
                                </form>
                            <?php
                            endforeach;
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