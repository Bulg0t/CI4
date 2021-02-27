<?= $this->extend('onas\onas_szablon') ?>

<?= $this->section('content')?>

<h1><?= esc($title); ?></h1>

<?= \Config\Services::validation()->listErrors(); ?>

<form action="/onas/onas_delete" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="id" value="<?= esc($users['id'])?>" />
    <ul><li><h3><?=esc($users['login'])?></h3></li>
    </ul>
    <input type="submit" name="submit" value="Usuń" />

</form>

<p><a href="<?= route_to('onas') ?>">Lista wiadomości</a></p>

<?= $this->endSection() ?>