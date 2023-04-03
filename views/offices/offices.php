<div class="basic">
    <div>
        <p>Офисы</p>
        <a class="add" href="<?= app()->route->getUrl('/offices/add') ?>">Добавить новый</a>
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
