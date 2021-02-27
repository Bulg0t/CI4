<?= $this->extend('onas\onas_szablon') ?>

<?= $this->section('content')?>


<h2><?= esc($title); ?></h2>

<?php if (! empty($users) && is_array($users)) : ?>
    <ol>
    <?php foreach ($users as $user_item): ?>
        <div>
        <ul>
        <li><h3><?= esc($user_item['login']); ?></h3></li>
        </ul>
        </div>
        <ol>
        <li><a href="/onas/<?= esc($user_item['login'], 'url'); ?>">Pokaż szczegóły</a></li>
        <li><a href="<?= route_to('updateusers', esc($user_item['login'], 'url')) ?>">Edytuj dane użytkownika</a></li>
        <li><a href="<?= route_to('delusers', esc($user_item['login'], 'url')) ?>">Usuń użytkownika</a></li>
        </ol>
        <br>
    <?php endforeach; ?>
    </ol>
    <p><a href="/onas/create"><b>Dodaj użytkownika</b></a></p>

<?php else : ?>

    <h3>Brak użytkowników</h3>
    <p><a href="/onas/create"><b>Dodaj użytkownika</b></a></p>

<?php endif ?>

<?= $this->endSection() ?>