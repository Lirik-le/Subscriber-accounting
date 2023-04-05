<form class="form" method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <p>Добавление помещения</p>
    <div>
        <input placeholder="Номер" name="room_number" type="text">
        <h3><?= $message['room_number'][0] ?? ''; ?></h3>
    </div>
    <div>
        <label>Подразделение:</label>
        <select name="id_division">
            <?php
            foreach ($divisions as $division) {
                ?>
                <option value="<?= $division->id ?>"><?= $division->name_division ?></option>
                <?php
            }
            ?>
        </select><br><h3><?= $message['id_division'][0] ?? ''; ?></h3><br>
        <label>Тип:</label>
        <select name="id_type">
            <?php
            foreach ($types as $type) {
                ?>
                <option value="<?= $type->id ?>"><?= $type->type_of_room ?></option>
                <?php
            }
            ?>
        </select><br>
        <h3><?= $message['id_type'][0] ?? ''; ?></h3>
    </div>
    <button class="btn">Добавить</button>
    <h3><?= $message ?? ''; ?></h3>
</form>