<form class="form" method="post">
    <p>Регистрация нового пользователя</p>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <div>
        <input placeholder="Логин" id="login" type="text" name="username">
        <h3><?= $message['username'][0] ?? ''; ?></h3>
    </div>
    <div>
        <input placeholder="Пароль" id="password" type="password" name="password">
        <h3><?= $message['password'][0] ?? ''; ?></h3>
    </div>
    <button class="btn">Добавить</button>
</form>
