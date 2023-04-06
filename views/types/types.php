<div class="basic">
    <div>
        <p>Типы помещений</p>
        <?php
        if (app()->auth::checkRole()):
        ?>
        <a class="add" href="<?= app()->route->getUrl('/types/add') ?>">Добавить новый</a>
        <?php
        endif;
        ?>
    </div>


    <div class="basic_inner">
        <?php
        foreach ($types as $type) {
            ?>
            <div>
                <span><?= $type->type_of_room ?></span>
            </div>
            <?php
        }
        ?>
    </div>
</div>
