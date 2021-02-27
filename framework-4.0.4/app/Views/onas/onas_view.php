<?= $this->extend('onas\onas_szablon') ?>

<?= $this->section('content')?>

<h2><?= esc($title); ?></h2>

<p><b>Login: </b><?= esc($users['login']); ?></p>
<p><b>Imię: </b><?= esc($users['imie']); ?></p>
<p><b>Nazwisko: </b><?= esc($users['nazwisko']); ?></p>
<p><b>Email: </b><?= esc($users['email']); ?></p>
<br>
<ul>
    <li><a href="<?= route_to('onas') ?>">Lista użytkowników</a></li>
    <li><a href="<?= route_to('updateusers', esc($users['login'], 'url')) ?>">Edytuj dane użytkownika</a></li>
    <li><a href="<?= route_to('delusers', esc($users['login'], 'url')) ?>">Usuń użytkownika</a></li>
</ul>



<?= $this->endSection() ?>