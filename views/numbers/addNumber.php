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

        </select>
        <?php
        foreach ($rooms as $room) {
                ?>
                <pre>
                <?php
                foreach ($room->numbers as $num)
                var_dump($num->number);
                ?>
                </pre>
            <?php
        }
        die();
        ?>


        <h3><?= $message['id_room'][0] ?? ''; ?></h3>
    </div>
    <button class="btn">Добавить</button>
</form>

<option value="<?= $room->id ?>"><?= $room->room_number ?></option>
