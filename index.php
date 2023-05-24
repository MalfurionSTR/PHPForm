<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Practice</title>
</head>
<body>
<div class="wrapper">
    <h2 class="wrapper__title">Заполните форму для заказа!</h2>
    <form class="form" action="form.php" method="post">
    <div class="user">
            <ul class="user-info">
                <li class="user-info__item">
                    <label for="name"><sup style="color: red;">*</sup>Ф.И.О </label>
                    <input type="text" name="name" id="name" placeholder="Введите ваше ФИО" required>
                </li>
                <li class="user-info__item">
                    <label for="email"><sup style="color: red;">*</sup>E-mail</label>
                    <input type="email" id="email" placeholder="Введите ваш e-mail" name="email" required>
                </li>
            </ul>
            <ul class="address-date">
                <li class="user-info__item">
                    <label for="address"><sup style="color: red;">*</sup>Укажите ваш адрес</label>
                    <input type="text" name="address" id="address" placeholder="Ваш адрес" required>
                </li>
                <li class="user-info__item">
                    <label for="date"><sup style="color: red;">*</sup>Укажите дату доставки</label>
                    <input type="date" name="date" id="date" required>
                </li>
            </ul>
        </div>
        <div class="delivery">
            <ul class="delivery-info">
                <h3 class="delivery__title"><sup style="color: red;">*</sup>Выберете способ доставки</h3>
                <li class="delivery-info__item">
                    <input type="radio" id="contactChoice2"
                     name="delType" value="courier" required>
                    <label for="contactChoice2">Обычная доставка</label>
                </li>
                <li class="delivery-info__item">
                    <input type="radio" id="express"
                     name="delType" value="express" required>
                    <label for="express">Экспресс Доставка(+100 рублей)</label>
                </li>
                <li class="delivery-info__item">
                    <input type="radio" id="pickUp"
                     name="delType" value="pick up" required>
                    <label for="pickUp">Самовывоз</label>
                </li>
            </ul>
            <ul class="delivery-info">
                <h3 class="delivery__title">Выберете доп.услуги</h3>
                <li class="delivery-info__item">
                    <input type="checkbox" name="fast_courier" id="dop1">
                    <label for="dop1">Сырные бортики</label>
                </li>
                <li class="delivery-info__item">
                    <input type="checkbox" name="gruz4ik" id="dop2">
                    <label for="dop2">Двойная начинка</label>
                </li>
                <li class="delivery-info__item">
                    <input type="checkbox" name="бронебойная упаковка" id="dop3">
                    <label for="dop3">Пожелание на коробке</label>
                </li>
            </ul>
        </div>
            <div class="select">
                <h3 class="select__title"><sup style="color: red;">*</sup>Выберите оплату </h3>
                <select name="select" id="" required>
                    <option>Картой при получении</option>
                    <option>Картой на сайте</option>
                    <option>Наличными при получении</option>
                </select>
                <label for="comment">Дополнительный комментарий</label>
                <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
            </div>
        <button type="submit">Готово!</button>
    </form>
</div>
<script src="js/script.js"></script>
</body>
</html>