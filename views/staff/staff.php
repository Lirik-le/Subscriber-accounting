<div class="basic">
    <div>
        <p>Сотрудники</p>
        <?php
        if (app()->auth::checkRole()):
        ?>
        <a class="add" href="<?= app()->route->getUrl('/signup') ?>">Добавить нового</a>
        <?php
        endif;
        ?>
    </div>


    <div class="basic_inner">
        <?php
        foreach ($staff as $employee) {
            ?>
            <div>
                <span><?= $employee->username ?></span>
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
