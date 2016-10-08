<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ЭКО-Окна</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="page__container">
    <?php include_once 'partials/_header.php';?>
    <?php include_once "partials/_menu.php"; ?>
    <div class="form__container">
        <div class="form__states">
            <div class="form__state">
                <h2 class="state__caption">Выберите конфигурацию окна</h2>
                <div class="state__content">
                    <div class="window__type">
                        <div class="window__count">
                            <label for="windowTypeOne">one</label>
                            <input id="windowTypeOne" type="radio" name="windowType" value="1">
                            <label for="windowTypeTwo">two</label>
                            <input id="windowTypeTwo" type="radio" name="windowType" value="2">
                            <label for="windowTypeThree">three</label>
                            <input id="windowTypeThree" type="radio" name="windowType" value="3">
                        </div>
                        <div class="window__preview">
                            <img src="/images/action1.jpg" alt="PREVIEW" class="preview__img">
                        </div>
                    </div>
                    <button class="button">Далее</button>
                </div>
            </div>
            <div class="form__state">
                <h2 class="state__caption">Введите свои данные</h2>
                <div class="state__content">
                    <label for="lastname">Фамилия</label>
                    <input type="text" name="lastName" id="lastname">
                    <label for="firstname">Имя</label>
                    <input type="text" name="firstName" id="firstname">
                    <label for="patr">Отчество</label>
                    <input type="text" name="patr" id="patr">
                    <label for="phone">Номер телефона</label>
                    <input type="tel" name="phone" id="phone">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                    <label for="time">Предпочтетильное время</label>
                    <input type="time" name="time" id="time">
                    <label for="date">Предпочтительная дата</label>
                    <input type="date" name="date" id="date">
                    <button class="button">Далее</button>
                </div>
            </div>
            <div class="form__state">
                <h2 class="state__caption">Подтверждение заказа</h2>
                <div class="state__content">
                    <button class="button">Оформить заказ</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/form.js"></script>
</body>
</html>