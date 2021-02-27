<?= $this->extend('onas\onas_szablon') ?>

<?= $this->section('content')?>

<h2><?= esc($title); ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>

<form action="/onas/create" method="post">
    <?= csrf_field() ?>

    <table>
            <tbody>
                <tr><td><label for="title"><b>Login</b></label></td>
                <td><input type="input" name="login" /><br /></td>
                </tr>

                <tr><td><label for="email"><b>E-mail</b></label></td>
                <td><input type="email" name="email" /><br /></td>
                </tr>
                <tr><td><label for="imie"><b>Imię</b></label></td>
                <td><input type="input" name="imie" /><br /></td>
                </tr>
                <tr><td><label for="nazwisko"><b>Nazwisko</b></label></td>
                <td><input type="input" name="nazwisko" /><br /></td>
                </tr>
            </tbody>

    </table>

    <input type="submit" name="submit" value="Dodaj użytkownika" />
    <br>
    <br>
    <p><a href="/onas/">Powrót</a></p>
</form>
<?= $this->endSection() ?>