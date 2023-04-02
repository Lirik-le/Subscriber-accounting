<div class="basic">
    <div>
        <p>Номера</p>
        <button>Добавить новый</button>
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
