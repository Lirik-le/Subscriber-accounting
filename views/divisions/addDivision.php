<form class="form" method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <p>Добавление подразделения</p>
    <div>
        <input placeholder="Название" name="name_division" type="text">
        <h3><?= $message['name_division'][0] ?? ''; ?></h3>
    </div>
    <div>
        <input placeholder="Тип" name="type_of_division" type="text">
        <h3><?= $message['type_of_division'][0] ?? ''; ?></h3>

    </div>
    <div>
        <label>Офис:</label>
        <select name="id_office">
            <?php
            foreach ($offices as $office) {
            ?>
                <option value="<?= $office->id ?>"><?= $office->name_office ?></option>
            <?php
            }
            ?>
        </select>
        <h3><?= $message['id_office'][0] ?? ''; ?></h3>
    </div>
    <button class="btn">Добавить</button>
</form>