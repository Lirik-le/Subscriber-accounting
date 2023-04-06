<form class="form" method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <p>Добавление типа помещения</p>
    <div>
        <input placeholder="Тип" name="type_of_room" type="text">
        <h3><?= $message['type_of_room'][0] ?? ''; ?></h3>
    </div>
    <button class="btn">Добавить</button>
</form>