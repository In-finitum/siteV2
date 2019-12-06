<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="indexCSS.css">
    <title>Document</title>
</head>
<header>
    <nav class="nav">
        <div class="logo_header"></div>
        <ul>
            <li>Портмоне</li>
            <li>Блокноти</li>
            <li>Бананки</li>
            <li>Відгуки</li>
            <li>Про нас</li>
        </ul>
        <div class="contacts_header"></div>
    </nav>
</header>
<body>
<!--testform-->
<form action="form.php" method="post">
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
</form>
<!--testform-->kl
</body>
</html>
