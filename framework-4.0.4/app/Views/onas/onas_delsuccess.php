<?= $this->extend('onas\onas_szablon') ?>

<?= $this->section('content')?>

<h2><?= esc($title); ?>(<?= esc($id)?>)</h2>

<p><a href="<?= route_to('onas') ?>"><b>Lista użytkowników</b></a></p>
<?= $this->endSection() ?>
