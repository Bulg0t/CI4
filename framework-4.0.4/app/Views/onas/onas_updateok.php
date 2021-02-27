<?= $this->extend('onas\onas_szablon') ?>

<?= $this->section('content')?>

<h2>Zaktualizowano dane użytkownika(<?= esc($login);?>)</h2>
<p><a href="<?= route_to('onas') ?>">Lista użytkowników</a></p>

<?= $this->endSection() ?>
