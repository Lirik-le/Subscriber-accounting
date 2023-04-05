<form class="form" method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <p>Добавление абонента</p>
    <div>
        <input placeholder="Фамилия" name="lastname" type="text">
        <h3><?= $message['lastname'][0] ?? ''; ?></h3>
    </div>
    <div>
        <input placeholder="Имя" name="firstname" type="text">
        <h3><?= $message['firstname'][0] ?? ''; ?></h3>
    </div>
    <div>
        <input placeholder="Отчество" name="patronymic" type="text">
        <h3><?= $message['patronymic'][0] ?? ''; ?></h3>
    </div>
    <div>
        <label>Дата рождения</label>
        <input name="date_of_birth" type="date">
        <h3><?= $message['date_of_birth'][0] ?? ''; ?></h3>
    </div>
    <div>
        <label>Номер:</label>
        <select name="id_number">
            <?php
            foreach ($numbers as $number) {
                if ($number->id !== $number->subscriber->id_number):
                    ?>
                    <option value="<?= $number->id ?>"><?= $number->number ?></option>
                <?php
                endif;
            }
            ?>
        </select>
        <h3><?= $message['id_number'][0] ?? ''; ?></h3>
    </div>
    <button class="btn">Добавить</button>
</form>