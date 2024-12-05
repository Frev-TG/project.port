<?php include('layouts/header.php'); ?>

<?php
$data_nascimento = $_POST['data_nascimento'];
$signos = simplexml_load_file("signos.xml");

$signoEncontrado = null;

foreach ($signos->signo as $signo) {
    $dataInicio = DateTime::createFromFormat('d/m', $signo->dataInicio)->setDate(0, 0, 0);
    $dataFim = DateTime::createFromFormat('d/m', $signo->dataFim)->setDate(0, 0, 0);
    $dataUser = DateTime::createFromFormat('Y-m-d', $data_nascimento)->setDate(0, 0, 0);

    if ($dataUser >= $dataInicio && $dataUser <= $dataFim) {
        $signoEncontrado = $signo;
        break;
    }
}

if ($signoEncontrado) {
    echo "<h1 class='text-center'>{$signoEncontrado->signoNome}</h1>";
    echo "<p class='text-center'>{$signoEncontrado->descricao}</p>";
} else {
    echo "<h1 class='text-center text-danger'>Signo não encontrado!</h1>";
}
?>

<div class="text-center mt-4">
    <a href="index.php" class="btn btn-secondary">Voltar</a>
</div>

<?php include('layouts/footer.php'); ?>
