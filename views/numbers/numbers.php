<div class="basic">
    <div>
        <p>Номера</p>
        <?php
        if (app()->auth::checkRole()):
        ?>
        <a class="add" href="<?= app()->route->getUrl('/numbers/add') ?>">Добавить новый</a>
        <?php
        endif;
        ?>
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
