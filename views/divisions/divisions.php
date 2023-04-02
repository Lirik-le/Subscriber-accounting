<div class="basic">
    <div>
        <p>Подразделения</p>
        <button>Добавить новое</button>
    </div>


    <div class="offices">
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

    .offices {
        display: flex;
        flex-wrap: wrap;
        margin-top: 25px;
    }

    .offices > div {
        width: 20%;
        border: 2px solid lightgray;
        padding: 10px;
        margin: 10px;
        border-radius: 10px;
    }

    .offices > div > p {
        padding-left: 10px;
        font-size: 16px;
        margin-top: 5px;
    }
</style>