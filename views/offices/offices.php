<div class="basic">
    <div>
        <p>Офисы</p>
        <?php
        if (app()->auth::checkRole()):
        ?>
        <a class="add" href="<?= app()->route->getUrl('/offices/add') ?>">Добавить новый</a>
        <?php
        endif;
        ?>
    </div>


    <div class="basic_inner">
        <?php
        foreach ($offices as $office) {
        ?>
            <div>
                <span><?= $office->name_office ?></span>
                <p>Адрес: <?= $office->address ?></p>
                <p>Директор: <?= $office->director ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</div>
