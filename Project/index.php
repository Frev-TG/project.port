<?php include('layouts/header.php'); ?>

<h1 class="text-center">Descubra seu Signo</h1>
<form id="signo-form" method="POST" action="show_zodiac_sign.php" class="mt-4">
    <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
    </div>
    <button type="submit" class="btn btn-primary">Consultar Signo</button>
</form>

<?php include('layouts/footer.php'); ?>
