<?php
$title = "Cadastro Educação - Formulário Turma";

$icon_aba = "../imgs/icons/icon_aba.png";

$link_home = '../../index.php';
$link_escolaPagina = './escolaPagina.php';
$link_alunoPagina = './alunoPagina.php';
$link_turmaPagina = './turmaPagina.php';

$link_registerTurma = '../../Controller/registerTurma.php';

?>
<?php require_once '../header.php'; ?>

<?php
require_once '../../Controller/BD.php';
$db = new BD_teste();
$result = array("idTurma" => "", "ano" => "", "nivel" => "", "serie" => "", "turno" => "", "idEscola" => "");

if (isset($_GET['idTurma'])) {
    $result = $db->searchExactlyTurma($_GET['idTurma'], 'idTurma')[0];
}

?>
<div class="container" style="width: 100%;">
    <div style="width: 100%; text-align: center; margin-top: 2%;">
        <h2><strong>Formulário de Turma</strong></h2>
    </div>
    <form method="POST" action="<?php echo $link_registerTurma ?>">
        <div class="mb-3">
            <input type="hidden" class="form-control-plaintext" id="idTurma" value="<?php echo $result['idTurma']; ?>" name="idTurma">
        </div>
        <div class="mb-3">
            <label for="anoTurma" class="form-label">Ano da Turma</label>
            <select class="form-select form-select-md mb-3" id="anoTurma" name="ano" required>
                <?php $years = range(1900, strftime("%Y", time())); ?>
                <?php
                if (($result['ano'] != "") && ($result['ano'] != NULL)) {
                    echo "<option selected value='" . $result['ano'] . "'>Padrão: " . $result['ano'] . "</option>";
                } else {
                    echo "<option selected value=''></option>";
                }
                ?>
                <?php foreach ($years as $year) : ?>
                    <option value="<?php echo $year; ?>"><?php echo $year ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="nivelTurma" class="form-label">Nível de Ensino</label>
            <select class="form-select form-select-md mb-3" id="nivelTurma" name="nivel" required>
                <?php
                if (($result['nivel'] != "") && ($result['nivel'] != NULL)) {
                    echo "<option selected value='" . $result['nivel'] . "'>Padrão: " . $result['nivel'] . "</option>";
                } else {
                    echo "<option selected value=''></option>";
                }
                ?>
                <option value="Médio">Médio</option>
                <option value="Fundamental">Fundamental</option>
                <option value="Técnico">Técnico</option>
                <option value="Graduação">Graduação</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="serieTurma" class="form-label">Serie/Período</label>
            <select class="form-select form-select-md mb-3" id="serieTurma" name="serie" required>
                <?php $series = range(1, 30); ?>
                <?php
                if (($result['serie'] != "") && ($result['serie'] != NULL)) {
                    echo "<option selected value='" . $result['serie'] . "'>Padrão: " . $result['serie'] . "</option>";
                } else {
                    echo "<option selected value=''></option>";
                }
                ?>
                <?php foreach ($series as $serie) : ?>
                    <option value="<?php echo $serie; ?>"><?php echo $serie; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="turnoTurma" class="form-label">Turno</label>
            <select class="form-select form-select-md mb-3" id="turnoTurma" name="turno" required>
                <?php
                if (($result['turno'] != "") && ($result['turno'] != NULL)) {
                    echo "<option selected value='" . $result['turno'] . "'>Padrão: " . $result['turno'] . "</option>";
                } else {
                    echo "<option selected value=''></option>";
                }
                ?>
                <option value="Manhã">Manhã/Matutino</option>
                <option value="Tarde">Tarde/Vespertino</option>
                <option value="Noite">Noite/Noturno</option>
                <option value="Integral">Integral</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="escolaTurma" class="form-label">Escola da Turma</label>
            <select class="form-select form-select-md mb-3" id="escolaTurma" name="escola" required>
                <?php
                
                if ($result['idEscola'] != "") {
                    $escolaDB = $db->searchExactlyEscola($result['idEscola'], "idEscola")[0];
                    echo "<option selected value = '".$escolaDB['idEscola']."'>Padrão: ".$escolaDB['nome']."</option>";
                } else {
                    echo "<option selected value=''></option>";
                }
                ?>
                <?php
                $escolas = $db->listEscola();
                foreach ($escolas as $escola) {

                    echo "<option value='" . $escola['idEscola'] . "'>" . $escola['nome'] . "</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" href="<?php echo $link_registerEscola ?>" class="btn btn-primary">Salvar</button>
    </form>
</div>

<?php require_once '../footer.php'; ?>