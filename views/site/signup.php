<form class="form" method="post">
    <p>Регистрация нового пользователя</p>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <div>
        <input placeholder="Логин" id="login" type="text" name="username">
    </div>
    <div>
        <input placeholder="Пароль" id="password" type="password" name="password">
    </div>
    <button class="btn">Добавить</button>
    <h3><?= $message ?? ''; ?></h3>
</form>
