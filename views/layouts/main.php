<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ООО "Корпорейшен"</title>
</head>
<body>
<main>
    <div class="side">
        <div>
            <?php
            if (!app()->auth::check()):
            ?>
                <p><a href="<?= app()->route->getUrl('/login') ?>">Вход</a></p>
            <?php
            else:
            ?>
                <p><a href="<?= app()->route->getUrl('/subscribers') ?>">Учет абонентов</a></p>
                <p><a href="<?= app()->route->getUrl('/numbers') ?>">Номера</a></p>
                <p><a href="<?= app()->route->getUrl('/staff') ?>">Сотрудники</a></p>
                <p><a href="<?= app()->route->getUrl('/divisions') ?>">Подразделения</a></p>
                <p><a href="<?= app()->route->getUrl('/rooms') ?>">Помещения</a></p>
                <p><a href="<?= app()->route->getUrl('/types') ?>">Типы помещений</a></p>
                <p><a href="<?= app()->route->getUrl('/offices') ?>">Офисы</a></p>
                <p><a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a></p>
            <?php
            endif;
            ?>
        </div>
        <div>
            <p class="all_the_rights">
                © “Корпорейшн”
                Все права защищены
            </p>
        </div>
    </div>
    <div class="main">
        <header>
            <a href="<?= app()->route->getUrl('/') ?>"><h1 class="logo">ООО "Корпорейшен"</h1></a>
            <div class="contact">
                <p>+7(952)679-22-72</p>
                <img src="../../public/assets/img/vk.png" alt="">
                <img src="../../public/assets/img/telegram.png" alt="">
                <img src="../../public/assets/img/instagram.png" alt="">
            </div>
        </header>
        <?= $content ?? '' ?>
    </div>
</main>
</body>
<style>
    * {
        padding: 0;
        margin: 0;
        font-family: Consolas, serif;
        font-size: 20px;
    }

    a {
        text-decoration: none;
        color: black;
    }

    .logo {
        font-size: 30px;
    }

    main {
        display: flex;
        justify-content: space-between;
    }

    .side {
        position: fixed;
        width: 8%;
        padding: 10px;
        height: 98vh;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        border-right: 3px solid black;
    }

    .side > div {
        width: 100%;
    }

    .side > div:first-of-type {
        height: 85%;
    }

    .side > div:first-of-type > p {
        margin-top: 10px;
    }

    .side > div:first-of-type > p > a {
        font-size: 18px;
    }

    .side > div:last-of-type {
        display: flex;
        align-items: center;
        height: 15%;
    }

    .all_the_rights {
        font-size: 18px;
    }

    .main {
        margin-left: 10%;
        width: 100%;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 80px;
        margin: 0 70px;
    }

    .contact {
        width: 340px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .contact > img {
        width: 30px;
        height: 30px;
    }
</style>
</html>