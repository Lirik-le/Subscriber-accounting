<form class="form" method="post">
    <p>Добавление номера</p>
    <div>
        <input placeholder="Номер" name="number" type="text">
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
    </div>
    <button class="btn">Добавить</button>
</form>