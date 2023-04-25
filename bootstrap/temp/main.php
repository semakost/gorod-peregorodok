<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="описание страницы">
    <meta name="keywords" content="meta, HTML, Tutorial">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <meta name="theme-color" content="#712cf9">

    <title>Headers · Bootstrap v5.3</title>


    <link
            href="/node_modules/bootstrap/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous"
    >

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/vendor/twbs/bootstrap/site/content/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/vendor/twbs/bootstrap/site/content/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">

    <link rel="manifest" href="/temp/manifest.json">








    <!-- <Library Gelery> -->
    <link rel="stylesheet" type="text/css" href="../lib/js/jquery-collagePlus/support/examples.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../lib/js/jquery-collagePlus/css/transitions.css" media="all" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="../lib/js/jquery-collagePlus/jquery.collagePlus.js"></script>
    <script src="../lib/js/jquery-collagePlus/extras/jquery.removeWhitespace.js"></script>
    <script src="../lib/js/jquery-collagePlus/extras/jquery.collageCaption.js"></script>

    <script type="text/javascript">

        // All images need to be loaded for this plugin to work so
        // we end up waiting for the whole window to load in this example
        $(window).load(function () {
            $(document).ready(function(){
                collage();
                $('.Collage').collageCaption();
            });
        });


        // Here we apply the actual CollagePlus plugin
        function collage() {
            $('.Collage').removeWhitespace().collagePlus(
                {
                    'fadeSpeed'     : 200,
                    'targetHeight'  : 220,
                    'effect'        : 'effect-2',
                    'direction'     : 'vertical',
                    'allowPartialLastRow':true
                }
            );
        };

        // This is just for the case that the browser window is resized
        var resizeTimer = null;
        $(window).bind('resize', function() {
            // hide all the images until we resize them
            $('.Collage .Image_Wrapper').css("opacity", 0);
            // set a timer to re-apply the plugin
            if (resizeTimer) clearTimeout(resizeTimer);
            resizeTimer = setTimeout(collage, 200);
        });

    </script>
</head>
<body style="padding-bottom: 0">


<main class="bg-light" >
    <?php
    //Подключаем шапку сайта
    require_once  $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR. 'index.php';
    ?>
    <br>
    <div class="container"><h3> Здесь будет основной сайт!</h3>
        <style>
            section.Collage a img {
                border: 0 !important;
            }
        </style>
        <section class="Collage effect-parent">
            <div class="Image_Wrapper"><a href="/"><img src="https://italishop.ru/wa-data/public/shop/products/14/06/20614/images/25630/25630.750x0.jpeg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://static.tildacdn.com/tild3137-6238-4863-a663-336562643937/bugatti_3.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://oboikina.ru/image/catalog/fotooboi/8/ge-catalog-fotooboi-batterfly_zel-int1.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://static.baza.farpost.ru/v/1553063854968_bulletin"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://i.etsystatic.com/10160754/r/il/708745/670852946/il_fullxfull.670852946_65vz.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://wonderlight.ru/upload/iblock/ab2/ab26e8a8a754e7edbc50e631e2d436c3.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://www.stels.ru/upload/iblock/4e7/teratai_giant_sofa-bretz-012.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://www.mebelitalii.ru/upload/iblock/502/502e5744e1723d8ea726b595c30fc1f0.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://galateas.ru/data/big/big.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://italishop.ru/wa-data/public/shop/products/14/06/20614/images/25630/25630.750x0.jpeg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://static.tildacdn.com/tild3137-6238-4863-a663-336562643937/bugatti_3.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://oboikina.ru/image/catalog/fotooboi/8/ge-catalog-fotooboi-batterfly_zel-int1.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://static.baza.farpost.ru/v/1553063854968_bulletin"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://i.etsystatic.com/10160754/r/il/708745/670852946/il_fullxfull.670852946_65vz.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://wonderlight.ru/upload/iblock/ab2/ab26e8a8a754e7edbc50e631e2d436c3.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://www.stels.ru/upload/iblock/4e7/teratai_giant_sofa-bretz-012.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://designboom.ru/upload/resize_cache/iblock/6f7/330_330_0/6f79b4d72baf83ba82cdad9eea639d59.jpeg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://sosnoviydom.ru/image/cache/catalog/Katalog%20mebeli/Krovati/Galateya/krovat-galateya-1-1500x1500.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://italishop.ru/wa-data/public/shop/products/14/06/20614/images/25630/25630.750x0.jpeg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://static.tildacdn.com/tild3137-6238-4863-a663-336562643937/bugatti_3.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://oboikina.ru/image/catalog/fotooboi/8/ge-catalog-fotooboi-batterfly_zel-int1.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://static.baza.farpost.ru/v/1553063854968_bulletin"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://mebelnavolge.ru/files/products/245_7.330x300.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://wonderlight.ru/upload/iblock/ab2/ab26e8a8a754e7edbc50e631e2d436c3.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://www.stels.ru/upload/iblock/4e7/teratai_giant_sofa-bretz-012.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://www.mebelitalii.ru/upload/iblock/502/502e5744e1723d8ea726b595c30fc1f0.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://galateas.ru/data/big/big.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://italishop.ru/wa-data/public/shop/products/14/06/20614/images/25630/25630.750x0.jpeg"/></a></div>
            <div class="Image_Wrapper"><a href="/m"><img src="https://ge.all.biz/img/ge/catalog/23551.jpeg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://oboikina.ru/image/catalog/fotooboi/8/ge-catalog-fotooboi-batterfly_zel-int1.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://static.baza.farpost.ru/v/1553063854968_bulletin"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://i.etsystatic.com/10160754/r/il/708745/670852946/il_fullxfull.670852946_65vz.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://wonderlight.ru/upload/iblock/ab2/ab26e8a8a754e7edbc50e631e2d436c3.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://www.stels.ru/upload/iblock/4e7/teratai_giant_sofa-bretz-012.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/"><img src="https://www.mebelitalii.ru/upload/iblock/502/502e5744e1723d8ea726b595c30fc1f0.jpg"/></a></div>
            <div class="Image_Wrapper"><a href="/m"><img src="https://galateas.ru/data/big/big.jpg"/></a></div>
            <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it"><a><img src="http://placehold.it/350x150/69D2E7/ffffff"></a></div>
            <div class="Image_Wrapper"><a><img src="http://placehold.it/320x180/A7DBD8/ffffff"></a></div>
            <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it. Also a really long sentence with a <a href='http://www.bbc.co.uk'>link</a> in it"><a><img src="http://placehold.it/320x300/E0E4CC/ffffff"></a></div>
            <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it This is some data <u>with</u>html in it. Also a really long sentence with a <a href='http://www.bbc.co.uk'>link</a> in it This is some data <u>with</u>html in it. Also a really long sentence with a <a href='http://www.bbc.co.uk'>link</a> in it"><a><img src="http://placehold.it/472x500/F38630/ffffff"></a></div>
            <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it This is some data <u>with</u>html in it. Also a really long sentence with a <a href='http://www.bbc.co.uk'>link</a> in it"><a><img src="http://placehold.it/540x360/FA6900/ffffff"></a></div>
            <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it"><a><img src="http://placehold.it/800x600/ECD078/ffffff"></a></div>
            <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it This is some data <u>with</u>html in it. Also a really long sentence with a <a href='http://www.bbc.co.uk'>link</a> in it"><a><img src="http://placehold.it/400x120/D95B43/ffffff"></a></div>
            <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it This is some data <u>with</u>html in it. Also a really long sentence with a <a href='http://www.bbc.co.uk'>link</a> in it"><a><img src="http://placehold.it/300x300/C02942/ffffff"></a></div>
            <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it"><a><img src="http://placehold.it/320x500/542437/ffffff"></a></div>
            <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it"><a><img src="http://placehold.it/450x300/53777A/ffffff"></a></div>
        </section>
    </div>
    <?php
    //Подключаем футер
    require_once  $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR . 'footer' . DIRECTORY_SEPARATOR. 'index.php';
    ?>
</main>

<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js" ></script>

</body>
</html>


