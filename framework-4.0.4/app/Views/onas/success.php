<?= $this->extend('onas\onas_szablon') ?>

<?= $this->section('content')?>

<h2><?= esc($title); ?></h2>

<p><a href="<?= route_to('onas') ?>">Lista użytkowników</a></p>
<?= $this->endSection() ?>