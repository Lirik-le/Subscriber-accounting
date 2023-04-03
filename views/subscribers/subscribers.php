<div class="basic">
    <div>
        <p>Учет абонентов</p>
        <?php
        if (app()->auth::checkRole()):
        ?>
        <a class="add" href="<?= app()->route->getUrl('/subscribers/add') ?>">Добавить новое</a>
        <?php
        endif;
        ?>
    </div>
    <?php
    if (!app()->auth::checkRole()):
    ?>
    <div class="search">
        <label for="room"><input id="room" type="text"> помещение</label>
        <label for="div"><input id="div" type="text"> подразделение</label>
        <p>Количество абонентов: 8</p>
    </div>
    <?php
    endif;
    ?>
    <div class="basic_inner">
        <?php
        foreach ($subscribers as $subscriber) {
            ?>
            <div>
                <span><?= $subscriber->lastname ?></span>
                <span><?= $subscriber->firstname ?></span>
                <span><?= $subscriber->patronymic ?></span>
                <p><?= $subscriber->date_of_birth ?></p>
                <p>Номер: <?= $subscriber->number->number ?></p>
                <p>Помещение: <?= $subscriber->number->room->room_number ?></p>
                <p>Подразделение: <?= $subscriber->number->room->division->name_division ?></p>
                <?php
                if (app()->auth::checkRole()):
                ?>
                    <a href="<?= app()->route->getUrl("/subscribers/change?id=$subscriber->id") ?>">Изменить</a>
                <?php
                endif;
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<style>
    .search {
        width: 1100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 25px;
    }
</style>