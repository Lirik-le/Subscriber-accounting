<form class="form" method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <p>Добавление офиса</p>
    <div>
        <input placeholder="Название" name="name_office" type="text">
        <h3><?= $message['name_office'][0] ?? ''; ?></h3>
    </div>
    <div>
        <input placeholder="Адрес" name="address" type="text">
        <h3><?= $message['address'][0] ?? ''; ?></h3>
    </div>
    <div>
        <input placeholder="Директор" name="director" type="text">
        <h3><?= $message['director'][0] ?? ''; ?></h3>
    </div>
    <button class="btn">Добавить</button>
</form>