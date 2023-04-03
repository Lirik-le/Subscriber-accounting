<form class="form" method="post">
    <p>Добавление подразделения</p>
    <div>
        <input placeholder="Фамилия" name="lastname" type="text">
    </div>
    <div>
        <input placeholder="Имя" name="firstname" type="text">
    </div>
    <div>
        <input placeholder="Отчество" name="patronymic" type="text">
    </div>
    <div>
        <label>Дата рождения</label>
        <input name="date_of_birth" type="date">
    </div>
    <div>
        <label>Номер:</label>
        <select name="id_number">
            <?php
            foreach ($numbers as $number) {
                ?>
                <option value="<?= $number->id ?>"><?= $number->number ?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <button class="btn">Добавить</button>
</form>