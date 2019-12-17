<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <title>Pelletteria</title>
    <link rel="shortcut icon" href="/images/leathernotebook_notes_book_6981.ico">
    <link rel="stylesheet" href="indexCSS.css">
    <link rel="stylesheet" href="formCSS.css">
    <!-- For icon links -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="nav">
        <div class="logo_header"><a href="index.php">PELLETTERIA</a></div>
            <ul>
                <li><a href="#portmone">ПОРТМОНЕ</a></li>
                <li><a href="#notepad">БЛОКНОТИ</a></li>
                <li><a href="#handbag">БАНАНКИ</a></li>
                <li><a href="#reviews">ВІДГУКИ</a></li>
                <li><a href="#contacts">КОНТАКТИ</a></li>
            </ul>
        <div class="contacts_header">+380 931694590</div>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Меню
                <i style="font-size: 20px" class="fas fa-bars"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#portmone">ПОРТМОНЕ</a>
                <a class="dropdown-item" href="#notepad">БЛОКНОТИ</a>
                <a class="dropdown-item" href="#handbag">БАНАНКИ</a>
                <a class="dropdown-item" href="#reviews">ВІДГУКИ</a>
                <a class="dropdown-item" href="#contacts">КОНТАКТИ</a>
            </div>
        </div>
    </nav>
</header>
<!--Form-->
<div id="fill_form">
    <div class="center_form">
        <form action="form.php" method="post" class="popup" id="popup1">
            <div id="close_form"><i class="fas fa-times"></i></div>
            <div class="h2">Оформити замовлення</div>
            <label for="name">Ім'я, прізвище*</label>
            <input class="input" name="name" id="name" type="text" required>
            <label for="phone">Телефон*</label>
            <input class="number" name="phone" id="phone" type="text" value="+ (380) " required>
            <label for="city">Місто</label>
            <input class="input" name="city" id="city" type="text">
            <label for="email">Електронна пошта</label>
            <input class="email" name="email" type="email" id="email">
            <input class="send" type="submit" value="ПРИДБАТИ">
        </form>
    </div>
</div>
<!--Form-->
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

    <!--    blocks1 begin-->
    <div class="blocksField">
        <div class="catalog_blocks">КАТАЛОГ</div>
        <div class="header_blocks" id="portmone">ПОРТМОНЕ</div>
        <div class="block">
            <div class="element">
                <div class="block_photo">
                    <div class="col_1"><a class="ph_left" href="images/portmone/black/1.png" title="Портмоне" style="background-image: url('images/portmone/black/1.png')"></a></div>
                    <div class="col_2">
                        <a class="ph_right" href="images/portmone/black/2.png" title="Портмоне" style="background-image: url('images/portmone/black/2.png')"></a>
                        <a class="ph_right" href="images/portmone/black/3.png" title="Портмоне" style="background-image: url('images/portmone/black/3.png')"></a>
                        <a class="ph_right" href="images/portmone/black/4.png" title="Портмоне" style="background-image: url('images/portmone/black/4.png')"></a>
                    </div>
                </div>
                <div class="name_goods">
                    ПОРТМОНЕ
                </div>
                <div class="description">
                    <div>
                        -Матеріал : Натуральна шкіра.<br>
                        -Шкіра : Crazy horse.<br>
                        -Колір шкіри : Чорний<br>
                        -Відділення для карт: 7.<br>
                    </div>
                    <div>
                        -Відділеня для купюр: 2.<br>
                        -Відділеня для монет: 1.<br>
                        -Розмір у закритому вигляді: 9*17.<br>
                    </div>
                </div>
                <div class="footer_element">
                    <div class="price">&#x20b4; 750</div>
                    <div class="show_popup" data-effect="750 грн" data-type="Портмоне чорне">ЗАМОВИТИ</div>
                </div>
            </div>
            <div class="element">
                <div class="block_photo">
                    <div class="col_1"><a class="ph_left" href="images/portmone/red/1.png" title="Портмоне" style="background-image: url('images/portmone/red/1.png')"></a></div>
                    <div class="col_2">
                        <a class="ph_right" href="images/portmone/red/2.png" title="Портмоне" style="background-image: url('images/portmone/red/2.png')"></a>
                        <a class="ph_right" href="images/portmone/red/3.png" title="Портмоне" style="background-image: url('images/portmone/red/3.png')"></a>
                        <a class="ph_right" href="images/portmone/red/4.png" title="Портмоне" style="background-image: url('images/portmone/red/4.png')"></a>
                    </div>
                </div>
                <div class="name_goods">
                    ПОРТМОНЕ
                </div>
                <div class="description">
                    <div>
                        -Матеріал : Натуральна шкіра.<br>
                        -Шкіра : Crazy horse.<br>
                        -Колір шкіри : Червоний<br>
                        -Відділення для карт: 7.<br>
                    </div>
                    <div>
                        -Відділеня для купюр: 2.<br>
                        -Відділеня для монет: 1.<br>
                        -Розмір у закритому вигляді: 9*17.<br>
                    </div>
                </div>
                <div class="footer_element">
                    <div class="price">&#x20b4; 750</div>
                    <div class="show_popup" data-effect="750 грн" data-type="Портмоне червоне">ЗАМОВИТИ</div>
                </div>
            </div>
            <div class="element">
                <div class="block_photo">
                    <div class="col_1"><a class="ph_left" href="images/portmone/green/1.png" title="Портмоне" style="background-image: url('images/portmone/green/1.png')"></a></div>
                    <div class="col_2">
                        <a class="ph_right" href="images/portmone/green/2.png" title="Портмоне" style="background-image: url('images/portmone/green/2.png')"></a>
                        <a class="ph_right" href="images/portmone/green/3.png" title="Портмоне" style="background-image: url('images/portmone/green/3.png')"></a>
                        <a class="ph_right" href="images/portmone/green/4.png" title="Портмоне" style="background-image: url('images/portmone/green/4.png')"></a>
                    </div>
                </div>
                <div class="name_goods">
                    ПОРТМОНЕ
                </div>
                <div class="description">
                    <div>
                        -Матеріал : Натуральна шкіра.<br>
                        -Шкіра : Crazy horse.<br>
                        -Колір шкіри : Зелений<br>
                        -Відділення для карт: 7.<br>
                    </div>
                    <div>
                        -Відділеня для купюр: 2.<br>
                        -Відділеня для монет: 1.<br>
                        -Розмір у закритому вигляді: 9*17.<br>
                    </div>
                </div>
                <div class="footer_element">
                    <div class="price">&#x20b4; 750</div>
                    <div class="show_popup" data-effect="750 грн" data-type="Портмоне зелене">ЗАМОВИТИ</div>
                </div>
            </div>
            <div class="element">
                <div class="block_photo">
                    <div class="col_1"><a class="ph_left" href="images/portmone/broun/1.png" title="Портмоне" style="background-image: url('images/portmone/broun/1.png')"></a></div>
                    <div class="col_2">
                        <a class="ph_right" href="images/portmone/broun/2.png" title="Портмоне" style="background-image: url('images/portmone/broun/2.png')"></a>
                        <a class="ph_right" href="images/portmone/broun/3.png" title="Портмоне" style="background-image: url('images/portmone/broun/3.png')"></a>
                        <a class="ph_right" href="images/portmone/broun/4.png" title="Портмоне" style="background-image: url('images/portmone/broun/4.png')"></a>
                    </div>
                </div>
                <div class="name_goods">
                    ПОРТМОНЕ
                </div>
                <div class="description">
                    <div>
                        -Матеріал : Натуральна шкіра.<br>
                        -Шкіра : Crazy horse.<br>
                        -Колір шкіри : Коричневий<br>
                        -Відділення для карт: 7.<br>
                    </div>
                    <div>
                        -Відділеня для купюр: 2.<br>
                        -Відділеня для монет: 1.<br>
                        -Розмір у закритому вигляді: 9*17.<br>
                    </div>
                </div>
                <div class="footer_element">
                    <div class="price">&#x20b4; 750</div>
                    <div class="show_popup" data-effect="750 грн" data-type="Портмоне коричневе">ЗАМОВИТИ</div>
                </div>
            </div>
        </div>
    </div>
    <!--    blocks1 end-->
    <!--    blocks2 begin-->
    <div class="blocksField">
        <div class="header_blocks" id="handbag">БАНАНКИ</div>
        <div class="block">
            <div class="element">
                <div class="block_photo">
                    <div class="col_1"><a class="ph_left" href="images/handbag/black/1.png" title="Портмоне" style="background-image: url('images/handbag/black/1.png')"></a></div>
                    <div class="col_2">
                        <a class="ph_right" href="images/handbag/black/2.png" title="Портмоне" style="background-image: url('images/handbag/black/2.png')"></a>
                        <a class="ph_right" href="images/handbag/black/3.png" title="Портмоне" style="background-image: url('images/handbag/black/3.png')"></a>
                        <a class="ph_right" href="images/handbag/black/4.png" title="Портмоне" style="background-image: url('images/handbag/black/4.png')"></a>
                    </div>
                </div>
                <div class="name_goods">
                    БАНАНКА
                </div>
                <div class="description">
                    <div>
                        -Матеріал: Натуральна шкіра.<br>
                        -Шкіра: Crazy horse.<br>
                        -Колір шкіри: Чорний.<br>
                    </div>
                    <div>
                        -Основне відділення: 1.<br>
                        -Довжина застібки: 24 см.<br>
                        -Карман усередині: 1 -16*8см.<br>
                    </div>
                </div>
                <div class="footer_element">
                    <div class="price">&#x20b4; 1150</div>
                    <div class="show_popup" data-effect="1150 грн" data-type="Бананка чорна">ЗАМОВИТИ</div>
                </div>
            </div>
            <div class="element">
                <div class="block_photo">
                    <div class="col_1"><a class="ph_left" href="images/handbag/broun/1.png" title="Портмоне" style="background-image: url('images/handbag/broun/1.png')"></a></div>
                    <div class="col_2">
                        <a class="ph_right" href="images/handbag/broun/2.png" title="Портмоне" style="background-image: url('images/handbag/broun/2.png')"></a>
                        <a class="ph_right" href="images/handbag/broun/3.png" title="Портмоне" style="background-image: url('images/handbag/broun/3.png')"></a>
                        <a class="ph_right" href="images/handbag/broun/4.png" title="Портмоне" style="background-image: url('images/handbag/broun/4.png')"></a>
                    </div>
                </div>
                <div class="name_goods">
                    БАНАНКА
                </div>
                <div class="description">
                    <div>
                        -Матеріал : Натуральна шкіра.<br>
                        -Шкіра : Crazy horse.<br>
                        -Колір шкіри : Коричневий<br>
                        -Відділення для карт: 7.<br>
                    </div>
                    <div>
                        -Відділеня для купюр: 2.<br>
                        -Відділеня для монет: 1.<br>
                        -Розмір у закритому вигляді: 9*17.<br>
                    </div>
                </div>
                <div class="footer_element">
                    <div class="price">&#x20b4; 1150</div>
                    <div class="show_popup" data-effect="1150 грн" data-type="Бананка коричнева">ЗАМОВИТИ</div>
                </div>
            </div>
            <div style="margin: 0 auto" class="element">
                <div class="block_photo">
                    <div class="col_1"><a class="ph_left" href="images/handbag/red/1.png" title="Портмоне" style="background-image: url('images/handbag/red/1.png')"></a></div>
                    <div class="col_2">
                        <a class="ph_right" href="images/handbag/red/2.png" title="Портмоне" style="background-image: url('images/handbag/red/2.png')"></a>
                        <a class="ph_right" href="images/handbag/red/3.png" title="Портмоне" style="background-image: url('images/handbag/red/3.png'); background-position: 0 -160px;"></a>
                        <a class="ph_right" href="images/handbag/red/4.png" title="Портмоне" style="background-image: url('images/handbag/red/4.png'); background-position: 0 -140px"></a>
                    </div>
                </div>
                <div class="name_goods">
                    БАНАНКА
                </div>
                <div class="description">
                    <div>
                        -Матеріал : Натуральна шкіра.<br>
                        -Шкіра : Crazy horse.<br>
                        -Колір шкіри : Червоний<br>
                        -Відділення для карт: 7.<br>
                    </div>
                    <div>
                        -Відділеня для купюр: 2.<br>
                        -Відділеня для монет: 1.<br>
                        -Розмір у закритому вигляді: 9*17.<br>
                    </div>
                </div>
                <div class="footer_element" >
                    <div class="price">&#x20b4; 1150</div>
                    <div class="show_popup" data-effect="1150 грн" data-type="Бананка червона">ЗАМОВИТИ</div>
                </div>
            </div>
        </div>
    </div>
    <!--    blocks2 end-->
    <!--    blocks3 begin-->

    <div  class="blocksField">
        <div class="header_blocks" id="notepad">БЛОКНОТИ</div>
        <div class="block">
            <div class="element">
                <div class="block_photo">
                    <div class="col_1"><a class="ph_left" href="images/notebook/black/1.png" title="Портмоне" style="background-image: url('images/notebook/black/1.png')"></a></div>
                    <div class="col_2">
                        <a class="ph_right ph_right_note" href="images/notebook/black/2.png" title="Портмоне" style="background-image: url('images/notebook/black/2.png'); background-position: 0 -130px"></a>
                        <a class="ph_right ph_right_note" href="images/notebook/black/3.png" title="Портмоне" style="background-image: url('images/notebook/black/3.png'); background-position: 0 -100px"></a>

                    </div>
                </div>
                <div class="name_goods">
                    БЛОКНОТ
                </div>
                <div class="description">
                    <div>
                        -Матеріал: Натуральна шкіра.<br>
                        -Шкіра: Crazy horse.<br>
                        -Колір шкіри: Чорний.<br>
                        -Відділення для карт: 2.<br>
                    </div>
                    <div>
                        -Відділення для купюр: 1.<br>
                        -Листи блокнота в клітинку.<br>
                        -Розмір у закритому вигляді: 18*12.<br>
                    </div>
                </div>
                <div class="footer_element">
                    <div class="price">&#x20b4; 600</div>
                    <div class="show_popup" data-effect="600 грн" data-type="Блокнот чорний">ЗАМОВИТИ</div>
                </div>
            </div>
            <div class="element">
                <div class="block_photo">
                    <div class="col_1"><a class="ph_left" href="images/notebook/broun/1.png" title="Портмоне" style="background-image: url('images/notebook/broun/1.png')"></a></div>
                    <div class="col_2">
                        <a class="ph_right ph_right_note" href="images/notebook/broun/2.png" title="Портмоне" style="background-image: url('images/notebook/broun/2.png')"></a>
                        <a class="ph_right ph_right_note" href="images/notebook/broun/3.png" title="Портмоне" style="background-image: url('images/notebook/broun/3.png'); background-position: 0 -100px"></a>

                    </div>
                </div>
                <div class="name_goods">
                    БЛОКНОТ
                </div>
                <div class="description">
                    <div>
                        -Матеріал: Натуральна шкіра.<br>
                        -Шкіра: Crazy horse.<br>
                        -Колір шкіри: Коричневий.<br>
                        -Відділення для карт: 2.<br>
                    </div>
                    <div>
                        -Відділення для купюр: 1.<br>
                        -Листи блокнота в клітинку.<br>
                        -Розмір у закритому вигляді: 18*12.<br>
                    </div>
                </div>
                <div class="footer_element">
                    <div class="price">&#x20b4; 600</div>
                    <div class="show_popup" data-effect="600 грн" data-type="Блокнот коричневий">ЗАМОВИТИ</div>
                </div>
            </div>
            <div class="element">
                <div class="block_photo">
                    <div class="col_1"><a class="ph_left" href="images/notebook/red/1.png" title="Портмоне" style="background-image: url('images/notebook/red/1.png')"></a></div>
                    <div class="col_2">
                        <a class="ph_right ph_right_note" href="images/notebook/red/2.png" title="Портмоне" style="background-image: url('images/notebook/red/2.png')"></a>
                        <a class="ph_right ph_right_note" href="images/notebook/red/3.png" title="Портмоне" style="background-image: url('images/notebook/red/3.png')"></a>
                    </div>
                </div>
                <div class="name_goods">
                    БЛОКНОТ
                </div>
                <div class="description">
                    <div>
                        -Матеріал: Натуральна шкіра.<br>
                        -Шкіра: Crazy horse.<br>
                        -Колір шкіри: Червоний.<br>
                        -Відділення для карт: 2.<br>
                    </div>
                    <div>
                        -Відділення для купюр: 1.<br>
                        -Листи блокнота в клітинку.<br>
                        -Розмір у закритому вигляді: 18*12.<br>
                    </div>
                </div>
                <div class="footer_element">
                    <div class="price">&#x20b4; 600</div>
                    <div class="show_popup" data-effect="600 грн" data-type="Блокнот червоний">ЗАМОВИТИ</div>
                </div>
            </div>
            <div class="element">
                <div class="block_photo">
                    <div class="col_1"><a class="ph_left" href="images/notebook/green/1.png" title="Портмоне" style="background-image: url('images/notebook/green/1.png')"></a></div>
                    <div class="col_2">
                        <a class="ph_right ph_right_note" href="images/notebook/green/2.png" title="Портмоне" style="background-image: url('images/notebook/green/2.png'); background-position: 0 -100px"></a>
                        <a class="ph_right ph_right_note" href="images/notebook/green/3.png" title="Портмоне" style="background-image: url('images/notebook/green/3.png')"></a>
                    </div>
                </div>
                <div class="name_goods">
                    БЛОКНОТ
                </div>
                <div class="description">
                    <div>
                        -Матеріал: Натуральна шкіра.<br>
                        -Шкіра: Crazy horse.<br>
                        -Колір шкіри: Зелений.<br>
                        -Відділення для карт: 2.<br>
                    </div>
                    <div>
                        -Відділення для купюр: 1.<br>
                        -Листи блокнота в клітинку.<br>
                        -Розмір у закритому вигляді: 18*12.<br>
                    </div>
                </div>
                <div  class="footer_element">
                    <div class="price">&#x20b4; 600</div>
                    <div class="show_popup" data-effect="600 грн" data-type="Блокнот зелений">ЗАМОВИТИ</div>
                </div>
            </div>
        </div>
    </div>
    <!--    blocks3 end-->

    <!--FOR TEST-->

</main>
<div  class="feedback_block">
    <div class="header_feedback" id="reviews">ВІДГУКИ</div>
    <div class="feedback_container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 100%">
            <div class="carousel-inner" style="height: 100%">
                <div class="carousel-item active">
                    <img src="images/comments/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/comments/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/comments/3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/comments/4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/comments/5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/comments/6.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/comments/7.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/comments/8.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/comments/9.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/comments/10.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/comments/11.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/comments/12.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="commentsNextPrev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="commentsNextPrev">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<footer id="contacts">
    <div>
        <p class="text_contacts">КОНТАКТИ</p>
    </div>
    <div class="contacts">
        <div>
            <div class="text_phone_email">ТЕЛЕФОН</div>
            <div class="data">+380 931694590   Telegram. Viber</div>
        </div>
        <div>
            <div class="text_phone_email">ПОШТА</div>
            <div class="data">vladgor1001@gmail.com</div>
        </div>
        <div>
            <a style="display: none" class="footer_img" href="" title="Facebook"><img src="images/facebook_icon.png" alt=""></a>
            <a class="footer_img" href="https://www.instagram.com/pelletteria_ua/?igshid=b6d010h6e1w4" title="Instagram"><img src="images/instagram_icon.png" alt=""></a>
        </div>
    </div>
</footer>
</body>
</html>

<script src="jquery/jquery.magnific-popup.js"></script>
<script src="script.js"></script>
<script src ="JS/popup_photoJS.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
