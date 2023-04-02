<div class="basic">
    <div>
        <p>Офисы</p>
        <button>Добавить новый</button>
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
