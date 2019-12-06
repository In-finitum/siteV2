<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="indexCSS.css">
    <link rel="stylesheet" href="formCSS.css">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="jquery/magnific-popup.css">

    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="jquery/jquery.magnific-popup.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="jquery/jquery.magnific-popup.js"></script>
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
                    <div class="col_1"><a class="ph1" href="images/portmone/black/1.jpg"></a></div>
                    <div class="col_2"></div>
                </div>
                <div class="name_goods">
                    РЮКЗАК "GEOMETRIC BLACK ETNO"
                </div>
                <div class="description">
                    Розмір 32х24х8 Рюкзак з одним великим відділенням та кишенькою для дрібниць. На спинці є кишеня під замок.  Матеріал екошкіра, всередині войлок. Шлейки регулюються
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

    <!--testform-->
    <form action="form.php" method="post" class="popup" id="popup1">
        <input name="type" style="display: none" type="text" value="Набор TRY с портативной лампой (<s>985</s>грн) 689грн">
        <label for="number">Номер телефона *</label><br>
        <input class="input" id="number" name="number" type="text" value="+ (380) ">
        <label for="name">Фамилия Имя Отчество *</label><br>
        <input class="input" id="name" name="name" type="text"><br>
        <label for="city">Город</label><br>
        <input class="input" id="city" name="city" type="text"><br>
        <label for="email">Электронная почта</label><br>
        <input class="input" id="email" name="email" type="email"><br>
        <input class="button" type="submit" value="КУПИТЬ">
        <input class="close" type="button" value="close">
    </form>
    <!--testform-->
    <button class="show_popup" rel="popup1">Купить товар</button>
    <div class="overlay_popup"></div>
</main>
</body>
</html>

<script src="jquery/jquery-3.4.1.min.js"></script>
<script src="script.js"></script>

