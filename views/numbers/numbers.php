<div class="basic">
    <div>
        <p>Номера</p>
        <a class="add" href="<?= app()->route->getUrl('/numbers/add') ?>">Добавить новый</a>
    </div>

    <div class="basic_inner">
        <?php
        foreach ($numbers as $number) {
        ?>
            <div>
                <span><?= $number->number ?></span>
                <p>Помещение: <?= $number->room->room_number ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</div>
