<form class="login" method="post">
    <p>Регистрация нового пользователя</p>
    <div>
        <input placeholder="Логин" id="login" type="text" name="username">
    </div>
    <div>
        <input placeholder="Пароль" id="password" type="password" name="password">
    </div>
    <button class="btn">Войти</button>
    <h3><?= $message ?? ''; ?></h3>
</form>
