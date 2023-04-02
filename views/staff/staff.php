<div class="basic">
    <div>
        <p>Сотрудники</p>
        <a class="add" href="<?= app()->route->getUrl('/signup') ?>">Добавить нового</a>
    </div>


    <div class="basic_inner">
        <?php
        foreach ($staff as $employee) {
            ?>
            <div>
                <span><?= $employee->username ?></span><?= $employee->role ?>
                <?php
                if ($employee->role){
                    echo '<p>Администратор</p>';
                } else {
                    echo '<p>Рабочий</p>';
                }
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>
