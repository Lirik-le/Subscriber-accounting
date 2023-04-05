<form class="form" method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <p>Добавление номера</p>
    <div>
        <input placeholder="Номер" name="number" type="text">
        <h3><?= $message['number'][0] ?? ''; ?></h3>
    </div>
    <div>
        <label>Помещение:</label>
        <select name="id_room">
            <?php
            foreach ($rooms as $room) {
                ?>
                <option value="<?= $room->id ?>"><?= $room->room_number ?></option>
                <?php
            }
            ?>
        </select>
        <h3><?= $message['id_room'][0] ?? ''; ?></h3>
    </div>
    <button class="btn">Добавить</button>
</form>

