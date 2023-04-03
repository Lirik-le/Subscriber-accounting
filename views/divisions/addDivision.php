<form class="form" method="post">
    <p>Добавление подразделения</p>
    <div>
        <input placeholder="Название" name="name_division" type="text">
    </div>
    <div>
        <input placeholder="Тип" name="type_of_division" type="text">
    </div>
    <div>
        <label>Офис:</label>
        <select name="id_office">
            <?php
            foreach ($offices as $office) {
            ?>
                <option value="<?= $office->id ?>"><?= $office->name_office ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <button class="btn">Добавить</button>
</form>