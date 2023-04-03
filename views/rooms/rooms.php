<div class="basic">
    <div>
        <p>Помещения</p>
        <a class="add" href="<?= app()->route->getUrl('/rooms/add') ?>">Добавить новый</a>
    </div>


    <div class="basic_inner">
        <?php
        foreach ($rooms as $room) {
            ?>
            <div>
                <span><?= $room->room_number ?></span>
                <p>Тип: <?= $room->type->type_of_room ?></p>
                <p>Подразделение: <?= $room->division->name_division ?></p>
            </div>
            <?php
        }
        ?>
    </div>
</div>
