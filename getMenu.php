<!DOCTYPE html>
<html lang="ru">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="content-language" content="ru" />

    <meta name="code-author" content="Sergei Merkoev">
    <meta name="copyright" content="Sergei Merkoev">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="icon" href="favicon.svg" type="image/svg+xml">

    <title>Каскадное меню</title>

    <?php $v = rand(); ?>

    <link rel="stylesheet" type="text/css" href="./css/style.css?v<?php echo $v; ?>">
    <link rel="stylesheet" type="text/css" href="./css/menu.css?v<?php echo $v; ?>">

</head>
<body>

<section class="menu-wrapper">
    <div class="menu-container">

        <h1 class="no-select">Меню</h1>

        <div id="menu-list"></div>

        <div class="no-select">
            <h3>Каскадное меню</h3>
            <p>*Представлено каскадное меню со ссылками, построенное на основе запроса к серверу и ответа от него.</p>
            <p><img src="img/webm.png" alt="webm">Меню свёрстано и написано (файл menu.js) без использования сторонних библиотек на чистом js, который и строит его.</p>
            <p>Меню является многоуровневым. <br>То есть: в начале мы видим только верхний уровень меню, уровни потомков содержатся в скрытых блоках. </p>
            <p>Пункты меню, имеющие в структуре поле url, содержат ссылки. </p>
            <p>Пункты, имеющие потомков, имеют возможность при клике отображать скрытые контейнеры с ближайшим уровнем своих потомков. </p>
            <p>В контейнерах с пунктами меню, отвечающих за уровень ниже верхнего, предусмотрена возможность вернуться на уровень вверх (в контейнер родителя). </p>
            <p>Внешний вид меню возможно легко стилизовать при помощи CSS, выполнена небольшая анимация (плавное появление) при открытии блоков.</p>
            <p>Points сделаны средствами CSS3. Возможно, разумеется добавить при необходимости дополнительные графические элементы. </p>
        </div>

    </div>
</section>

<script defer type="text/javascript" src="js/menu.js?v<?php echo $v; ?>"></script>

</body>
</html>