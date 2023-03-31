<div class="basic">
    <div>
        <p>Типы помещений</p>
        <button>Добавить новый</button>
    </div>


    <div class="offices">
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
        width: 10%;
        border: 2px solid lightgray;
        padding: 10px;
        margin: 10px;
        border-radius: 10px;
        text-align: center;
    }

    .offices > div > p {
        padding-left: 10px;
        font-size: 16px;
        margin-top: 5px;
    }
</style>