<div class="basic">
    <div>
        <p>Подразделения</p>
        <button>Добавить новое</button>
    </div>


    <div class="basic_inner">
        <?php
        foreach ($divisions as $division) {
            ?>
            <div>
                <span><?= $division->name_division ?></span>
                <p>Тип: <?= $division->type_of_division ?></p>
                <p>Офис: <?= $division->office->name_office ?></p>
            </div>
            <?php
        }
        ?>
    </div>
</div>
