<div class="basic">
    <div>
        <p>Учет абонентов</p>
        <button>Добавить нового</button>
    </div>

    <div class="search">
        <label for="room"><input id="room" type="text"> помещение</label>
        <label for="div"><input id="div" type="text"> подразделение</label>
        <p>Количество абонентов: 8</p>
    </div>

    <div class="staff">
        <?php
        foreach ($subscribers as $subscriber) {
            ?>
            <div>
                <span><?= $subscriber->lastname ?></span>
                <span><?= $subscriber->firstname ?></span>
                <span><?= $subscriber->patronymic ?></span>
                <p><?= $subscriber->date_of_birth ?></p>
                <p>Офис</p>
                <p>Помещение</p>
                <p>Номер телефона</p>
                <a href="#">Изменить</a>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<style>
    .basic {
        margin: 50px 0 0 50px;
        height: 1000px;
    }

    .basic > div:first-of-type {
        display: flex;
        justify-content: space-between;
        width: 470px;
        margin-left: 100px;
    }

    .basic > div:first-of-type > p {
        font-size: 28px;
    }

    .basic > div > button {
        width: 200px;
    }

    .staff {
        display: flex;
        flex-wrap: wrap;
        margin-top: 25px;
    }

    .staff > div {
        width: 20%;
        border: 2px solid lightgray;
        padding: 10px;
        margin: 10px;
        border-radius: 10px;
    }

    .staff > div > p {
        padding-left: 10px;
        font-size: 16px;
        margin-top: 5px;
    }

    .search {
        width: 1100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 25px;
    }
</style>