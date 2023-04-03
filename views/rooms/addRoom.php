<form class="form" method="post">
    <p>Добавление помещения</p>
    <div>
        <input placeholder="Номер" name="room_number" type="text">
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
        </select><br><br>
        <label>Тип:</label>
        <select name="id_type">
            <?php
            foreach ($types as $type) {
                ?>
                <option value="<?= $type->id ?>"><?= $type->type_of_room ?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <button class="btn">Добавить</button>
</form>