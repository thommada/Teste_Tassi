<?php
$title = "Teste - Escolas";

$icon_aba = "../imgs/icons/icon_aba.png";

$link_home = '../../index.php';
$link_escolaPagina = './escolaPagina.php';
$link_alunoPagina = './alunoPagina.php';
$link_turmaPagina = './turmaPagina.php';
$link_verEscola = './verEscola.php';

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
            <p> Pesquise em branco para listar todas as escolas, ou Pesquise pelo nome da escola.</p>
        </div>
        <div class="container-fluid">
            <form action=<?php echo $link_escolaPagina ?> method="post" style="border: 1%; margin: 1%;">
                <div class="input-group">
                    <div class="input-group-text">Nome da Escola</div>
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
                        $results = array();
                        if(isset($_POST['busca'])){
                            //busca
                        }
                        else{
                            //listagem
                        }
                        
                        //array_push($results, array("id"=>"1", "nome"=>"Colégio", "endereco"=>"Rua 1", "situacao"=>"Ativo"));
                        //array_push($results, array("id"=>"2", "nome"=>"Faculdade", "endereco"=>"Rua 2", "situacao"=>"Ativo"));
                        foreach($results as $result){
                            echo "<form method='get'>";
                            echo "<tr>";
                                echo "<td name='id'>".$result["id"]."</td>";
                                echo "<td>".$result["nome"]."</td>";
                                echo "<td>".$result["endereco"]."</td>";
                                echo "<td>".$result['situacao']."</td>";
                                echo "<td class='actions'>".
                                        "<a class='btn btn-success btn-xs' href='".$link_verEscola."?idEscola=".$result['id']."'>Visualizar</a>".
                                        "<a class='btn btn-warning btn-xs' href='".$link_verEscola."?idEscola=".$result['id']."'>Visualizar</a>".
                                        "<a class='btn btn-danger btn-xs' href='".$link_verEscola."?idEscola=".$result['id']."'>Visualizar</a>".
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