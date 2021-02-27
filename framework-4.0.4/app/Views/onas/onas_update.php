<?= $this->extend('onas\onas_szablon') ?>

<?= $this->section('content')?>


<?= \Config\Services::validation()->listErrors(); ?>

<table>
    <tbody>
            <form action="/onas/onas_update" method="post">
                <?= csrf_field() ?>

                <input type="hidden" name="id" value="<?=esc($users['id']) ?>" />
                <tr><td>
                <label for="login"><b>Login</b></label>
                </td>
                <td>
                <input type="input" name="login"  value="<?=esc($users['login']) ?>"/><br />
                </td>
                </tr>
                <tr>
                <td>
                <label for="email"><b>E-mail</b></label>
                </td>
                <td>
                <input type="email" name="email"  value="<?=esc($users['email']) ?>"/><br />
                </td>
                </tr>
                <tr><td>
                <label for="imie"><b>Imię</b></label>
                </td>
                <td>
                <input type="input" name="imie"  value="<?=esc($users['imie']) ?>"/><br />
                </td>
                </tr>
                <tr>
                <td>
                <label for="nazwisko"><b>Nazwisko</b></label>
                </td>
                <td>
                <input type="input" name="nazwisko"  value="<?=esc($users['nazwisko']) ?>"/><br />
                </td>
                </tr>
                <tr>
                <td>
                <input type="submit" name="submit" value="Aktualizuj dane" />
                </td>
                </tr>
                </tr>
                <br>
                <tr><td><p><a href="<?= route_to('onas') ?>">Lista użytkowników</a></p>
                </td>
                </tr>           
            </form>
    </tbody>
</table>

<?= $this->endSection() ?>