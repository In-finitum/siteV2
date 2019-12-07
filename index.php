<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <title>Document</title>

    <link rel="stylesheet" href="indexCSS.css">
    <link rel="stylesheet" href="formCSS.css">
    <link rel="stylesheet" href="jquery/magnific-popup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="nav">
        <div class="logo_header"><a href="index.php">PELLETTERIA</a></div>
        <ul>
            <li><a href="#">ПОРТМОНЕ</a></li>
            <li><a href="#">БЛОКНОТИ</a></li>
            <li><a href="#">БАНАНКИ</a></li>
            <li><a href="#">ВІДГУКИ</a></li>
            <li><a href="#">ПРО НАС</a></li>
        </ul>
        <div class="contacts_header">+38(093)9228738</div>
    </nav>
</header>
<!--testform-->
<div id="fill_form">
    <div class="center_form">
        <form action="form.php" method="post" class="popup" id="popup1">
            <div id="close_form"><i class="fas fa-times"></i></div>
            <div class="h2">Оформити замовлення</div>
            <label for="name">Ім'я, прізвище</label>
            <input class="input" name="name" id="name" type="text" required>
            <label for="phone">Телефон</label>
            <input class="number" name="phone" id="phone" type="text" required>
            <label for="city">Місто</label>
            <input class="input" name="city" id="city" type="text">
            <label for="email">Електронна пошта</label>
            <input class="email" name="email" type="email" id="email">
            <input class="send" type="submit" value="ПРИДБАТИ">
        </form>
    </div>
</div>
<!--testform-->
<main>
    <div id="background">
        <!--        background photo-->
    </div>
    <div id="logo">
        <div>
            <div>Pelletteria</div>
            <div>український бренд шкіряних виробів</div>
            <div>лише ручна робота</div>
        </div>
    </div>

    <!--    blocks1-->
    <div class="blocksField">
        <div class="header_blocks">ПОРТМОНЕ</div>
        <div class="block">
            <div class="element">
                <div class="block_photo">
                    <div class="col_1"><a class="ph_left" style="background-image: url('images/portmone/black/1.jpg')"></a></div>
                    <div class="col_2">
                        <a class="ph_right" style="background-image: url('images/portmone/black/2.jpg')"></a>
                        <a class="ph_right" style="background-image: url('images/portmone/black/3.jpg')"></a>
                        <a class="ph_right" style="background-image: url('images/portmone/black/4.jpg')"></a>
                    </div>
                </div>
                <div class="name_goods">
                    РЮКЗАК "GEOMETRIC BLACK ETNO"
                </div>
                <div class="description">
                    Розмір 32х24х8 Рюкзак з одним великим відділенням та кишенькою для дрібниць. На спинці є кишеня під замок.  Матеріал екошкіра, всередині войлок. Шлейки регулюються
                </div>
                <div class="footer_element">
                    <div class="price">&#x20b4; 999</div>
                    <div id="show_popup">ЗАМОВИТИ</div>
                </div>
            </div>
            <div class="element">

            </div>
            <div class="element">

            </div>
            <div class="element">

            </div>
        </div>
    </div>
    <!--    blocks1-->


</main>
</body>
</html>


<script src="script.js"></script>
<script src ="JS/popup_photoJS.js"></script>
<script src="jquery/jquery.magnific-popup.js"></script>
