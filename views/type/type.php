<div class="basic">
    <div>
        <p>Типы помещений</p>
        <button>Добавить новый</button>
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
