<?php
    require 'db/data.php';
    require 'db/visits.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">
<script>
 dataLayer = [];
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MHTZRB');</script>
<!-- End Google Tag Manager -->
<head>

    <meta charset="utf-8">

    <title>BootCamp for leaders | проект “СОЛЬ”</title>

    <meta name="description" content="BootCamp в Карпатах — это пятидневная программа эмоциональной и физической перезагрузки. Соберитесь с силами — вас ждет откровенный разговор с самим собой.">
    <meta name="keywords" content="bootcamp, eq, соль, вчемсоль, узнать себя, эмоциональный интеллект, бут кемп, карпаты, миссия, ценности, видение, познание себя, программа для лидеров">

    <meta property="og:description" content="BootCamp в Карпатах — это пятидневная программа эмоциональной и физической перезагрузки. Соберитесь с силами — вас ждет откровенный разговор с самим собой." />

     <meta property="og:image" content="http://allinsol.com/eqbootcamp/img/og.png" />
    <meta property="og:image:url" content="http://allinsol.com/eqbootcamp/img/og.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />

    <meta property="og:site_name" content="EQ BootCamp"/>
    <meta property="og:title" content="BootCamp for leaders | проект “СОЛЬ”" />
    <meta property="og:url" content="http://allinsol.com/eqbootcamp"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />


    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#2196f3">




    <!-- RESET -->
    <style>html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}*{box-sizing:border-box}html,body{height:100%;margin:0;width:100%}.container{max-width:1200px;margin:0 auto}a,button,img,input{-webkit-transition:all .5s;transition:all .5s}button,button:active,button:focus,input,input:active,input:focus,textarea,textarea:active,textarea:focus{outline:none}button,button:hover,a,a:hover{text-decoration:none;cursor:pointer}.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:before,.clearfix:after,.container:before,.container:after{content:'.';display:block;overflow:hidden;visibility:hidden;font-size:0;line-height:0;width:0;height:0}.clearfix:after,.container:after{clear:both}.left{float:left}.right{float:right}.tl{text-align:left}.tr{text-align:right}.tc{text-align:center}.flex{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center}</style>

    <!-- GRID -->
    <style>:before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.col-1,.col-sm-1,.col-md-1,.col-lg-1,.col-2,.col-sm-2,.col-md-2,.col-lg-2,.col-3,.col-sm-3,.col-md-3,.col-lg-3,.col-4,.col-sm-4,.col-md-4,.col-lg-4,.col-5,.col-sm-5,.col-md-5,.col-lg-5,.col-6,.col-sm-6,.col-md-6,.col-lg-6,.col-7,.col-sm-7,.col-md-7,.col-lg-7,.col-8,.col-sm-8,.col-md-8,.col-lg-8,.col-9,.col-sm-9,.col-md-9,.col-lg-9,.col-10,.col-sm-10,.col-md-10,.col-lg-10,.col-11,.col-sm-11,.col-md-11,.col-lg-11,.col-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12{float:left}.col-12{width:100%}.col-11{width:91.66666667%}.col-10{width:83.33333333%}.col-9{width:75%}.col-8{width:66.66666667%}.col-7{width:58.33333333%}.col-6{width:50%}.col-5{width:41.66666667%}.col-4{width:33.33333333%}.col-3{width:25%}.col-2{width:16.66666667%}.col-1{width:8.33333333%}.col-pull-12{right:100%}.col-pull-11{right:91.66666667%}.col-pull-10{right:83.33333333%}.col-pull-9{right:75%}.col-pull-8{right:66.66666667%}.col-pull-7{right:58.33333333%}.col-pull-6{right:50%}.col-pull-5{right:41.66666667%}.col-pull-4{right:33.33333333%}.col-pull-3{right:25%}.col-pull-2{right:16.66666667%}.col-pull-1{right:8.33333333%}.col-pull-0{right:auto}.col-push-12{left:100%}.col-push-11{left:91.66666667%}.col-push-10{left:83.33333333%}.col-push-9{left:75%}.col-push-8{left:66.66666667%}.col-push-7{left:58.33333333%}.col-push-6{left:50%}.col-push-5{left:41.66666667%}.col-push-4{left:33.33333333%}.col-push-3{left:25%}.col-push-2{left:16.66666667%}.col-push-1{left:8.33333333%}.col-push-0{left:auto}.col-offset-12{margin-left:100%}.col-offset-11{margin-left:91.66666667%}.col-offset-10{margin-left:83.33333333%}.col-offset-9{margin-left:75%}.col-offset-8{margin-left:66.66666667%}.col-offset-7{margin-left:58.33333333%}.col-offset-6{margin-left:50%}.col-offset-5{margin-left:41.66666667%}.col-offset-4{margin-left:33.33333333%}.col-offset-3{margin-left:25%}.col-offset-2{margin-left:16.66666667%}.col-offset-1{margin-left:8.33333333%}.col-offset-0{margin-left:0}.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}.clearfix:after,.container:after,.container-fluid:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}</style>

    <!-- FONTS+HEADER -->
    <style>@font-face{font-family:"Raleway-Bold";font-style:normal;font-weight:400;src:url(fonts/Raleway-Bold.woff2) format("woff2"),url(fonts/Raleway-Bold.woff) format("woff")}@font-face{font-family:"RalewayLight";font-style:normal;font-weight:400;src:url(fonts/RalewayLight.woff2) format("woff2"),url(fonts/RalewayLight.woff) format("woff")}@font-face{font-family:"BebasNeueBold";font-style:normal;font-weight:400;src:url(fonts/BebasNeueBold.woff2) format("woff2"),url(fonts/BebasNeueBold.woff) format("woff")}</style>

    <!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
    <script>!function(a){"use strict";function b(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)}function c(b,c){return a.localStorage&&localStorage[b+"_content"]&&localStorage[b+"_file"]===c}function d(b,d){if(a.localStorage&&a.XMLHttpRequest)c(b,d)?f(localStorage[b+"_content"]):e(b,d);else{var h=g.createElement("link");h.href=d,h.id=b,h.rel="stylesheet",h.type="text/css",g.getElementsByTagName("head")[0].appendChild(h),g.cookie=b}}function e(a,b){var c=new XMLHttpRequest;c.open("GET",b,!0),c.onreadystatechange=function(){4===c.readyState&&200===c.status&&(f(c.responseText),localStorage[a+"_content"]=c.responseText,localStorage[a+"_file"]=b)},c.send()}function f(a){var b=g.createElement("style");b.setAttribute("type","text/css"),g.getElementsByTagName("head")[0].appendChild(b),b.styleSheet?b.styleSheet.cssText=a:b.innerHTML=a}var g=a.document;a.loadCSS=function(a,b,c){var d,e=g.createElement("link");if(b)d=b;else{var f;f=g.querySelectorAll?g.querySelectorAll("style,link[rel=stylesheet],script"):(g.body||g.getElementsByTagName("head")[0]).childNodes,d=f[f.length-1]}var h=g.styleSheets;e.rel="stylesheet",e.href=a,e.media="only x",d.parentNode.insertBefore(e,b?d:d.nextSibling);var i=function(a){for(var b=e.href,c=h.length;c--;)if(h[c].href===b)return a();setTimeout(function(){i(a)})};return e.onloadcssdefined=i,i(function(){e.media=c||"all"}),e},a.loadLocalStorageCSS=function(e,f){c(e,f)||g.cookie.indexOf(e)>-1?d(e,f):b(a,"load",function(){d(e,f)})}}(this);</script>

<!--     <link rel="stylesheet" href="css/fonts.css"> -->
    <link rel="stylesheet" href="css/header.css">
    <!-- Load CSS Start -->
    <!-- <script>loadCSS( "css/fonts.css?ver=1.0.0", false, "all" );</script> -->
<!--     <script>loadCSS( "css/header.css?ver=1.0.0", false, "all" );</script> -->
    <script>loadCSS( "css/main.css?ver=1.0.0", false, "all" );</script>
    <!-- Load CSS End -->

    <!-- Load CSS Compiled without JS -->
    <noscript>
        <link rel="stylesheet" href="css/main.css">
    </noscript>

</head>
<body data-img="img/land.jpg">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHTZRB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="site_wrapper">

    <div class="bar-long"></div>
    <div id="scrollup"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.054 286.054"><path d="M143.027 0C64.04 0 0 64.04 0 143.027c0 78.996 64.04 143.027 143.027 143.027s143.027-64.03 143.027-143.027C286.054 64.05 222.014 0 143.027 0zm0 259.236c-64.183 0-116.21-52.026-116.21-116.21s52.027-116.2 116.21-116.2 116.21 52.018 116.21 116.2-52.027 116.21-116.21 116.21zm51.677-125.148h-24.86V89.392c0-4.934-3.996-8.94-8.94-8.94H125.15c-4.934 0-8.94 4.006-8.94 8.94v44.696H91.342c-9.698 0-13.667 6.463-8.822 14.338l51.686 51.096c4.845 7.884 12.783 7.884 17.637 0l51.678-51.096c4.863-7.875.894-14.338-8.814-14.338z"/></svg></div>

    <section id="sec_01">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="main_menu">
                        <img src="img/logo.png" alt="" class="main_menu_logo logo">
                        <ul class="main_menu_navigation">
                            <li class="menu_navigation_item"><a href="#sec_04" class="scroll menu_navigation_link">Что такое BootCamp</a></li>
                            <li class="menu_navigation_item"><a href="#sec_09" class="scroll menu_navigation_link">Программа</a></li>
                            <li class="menu_navigation_item"><a href="#sec_10" class="scroll menu_navigation_link">Тренеры</a></li>
                            <li class="menu_navigation_item"><a href="#sec_11" class="scroll menu_navigation_link">Как попасть</a></li>
                            <li class="menu_navigation_item"><a href="#sec_14-1" class="scroll menu_navigation_link">Первый EQ Bootcamp</a></li>
                            <li class="menu_navigation_item"><a href="#sec_12" class="scroll menu_navigation_link">Локации</a></li>
                        </ul>
                        <div class="phones_wrapper">
                            <a class="md-trigger main_title callback_button text--upper" data-modal="modal_callback">ЗАКАЗАть звонок</a>
                            <a href="tel:+380933432126" class="tel main_title">+38 (093) 343-21-26</a>
                        </div>
                    </div>

                    <div class="main_menu menu_site_navigation">
                        <img src="img/logo.png" alt="" class="main_menu_logo logo">
                        <ul class="main_menu_navigation">
                            <li class="menu_navigation_item"><a href="#sec_04" class="scroll menu_navigation_link">Что такое BootCamp</a></li>
                            <li class="menu_navigation_item"><a href="#sec_09" class="scroll menu_navigation_link">Программа</a></li>
                            <li class="menu_navigation_item"><a href="#sec_10" class="scroll menu_navigation_link">Тренеры</a></li>
                            <li class="menu_navigation_item"><a href="#sec_11" class="scroll menu_navigation_link">Как попасть</a></li>
                            <li class="menu_navigation_item"><a href="#sec_14-1" class="scroll menu_navigation_link">Первый EQ Bootcamp</a></li>
                            <li class="menu_navigation_item"><a href="#sec_12" class="scroll menu_navigation_link">Локации</a></li>
                        </ul>
                        <a class="md-trigger main_title callback_button text--upper" data-modal="modal_callback">ЗАКАЗАть звонок</a>
                        <a href="tel:+380933432126" class="tel main_title">+38 (093) 343-21-26</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="content_wrapper sec_01_wrapper">
                        <p class="vertical_text rotate--minus main_title">28 июня - 2 июля 2017</p>
                        <h1 class="main_title">bootcamp</h1>
                        <p class="afterheader">for<span class="title_text"> leaders</span></p>
                        <p class="sec_01_describe title_text text--upper">За пять дней вы поймете о себе <br> больше, чем знали всю жизнь </p>
                        <a class="md-trigger btn flex sec_01-btn" data-modal="modal_callback_subscribe"><span class="text--upper btn_span main_title">Оставить заявку</span><img src="img/ar-1.png" alt="Указатель" class="btn_arrow"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec_02">
        <div class="container">
            <div class="row">
                <div class="col-7 only_img_col">
                    <img src="img/sec_02-img-2.png" alt="" class="sec_img">
                </div>
                <div class="col-5 col--nopadding">
                    <h2 class="main_title section_title text--blue">Вы лидер</h2>
                    <div class="item sec_02_item">
                        <p class="item_text text"> Вы всегда думаете о всех и обо всем <br> С легкостью расскажете о миссии, видении <br> и ценностях своего бизнеса или компании.  <br> <span class="title_text">Но что вы знаете о своей миссии?</span></p>
                    </div>
                    <div class="item sec_02_item margined--left">
                        <p class="item_text text">У вас нет времени думать об этом. А зря.  <br> Ведь ваши чувства, видение, ценности, <br> мысли — это система координат.  <br> Они помогают понять, что на самом <br> деле важно.</p>
                    </div>
                    <div class="item sec_02_item">
                        <p class="item_text text">Вокруг много предложений и встреч. <br> Времени мало, возможностей — море. <br> Как выбрать то, что действительно важно? <br> Как понять, что спустя 40 лет вы не захотите <br> <span class="title_text">вернуться и изменить все?</span></p>
                    </div>
                    <div class="item sec_02_item">
                        <p class="item_text text">Найдите смелость остановиться и подумать. <br> <span class="title_text">Решитесь узнать о себе больше.</span></p>
                    </div>
                    <div class="item sec_02_item margined--left">
                        <p class="item_text text">Пятидневная программа BootCamp <br> — это возможность избавиться от шума.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec_03">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2 class="section_title main_title"><span class="text--blue">Соберитесь с силами:</span> <br> вас ждет откровенный разговор <br> с самим собой</h2>
                    <div class="sec_03_items">
                        <div class="items_row desctop">
                            <div class="sec_03_item item">
                                <p class="item_number text--blue">1</p>
                                <p class="title_text">20 участников:</p>
                                <p class="text"> собственники бизнеса <br> и лидеры мнений;</p>
                            </div>
                            <div class="sec_03_item item">
                                <p class="item_number text--blue">2</p>
                                <p class="title_text">5 дней в Карпатах</p>
                                <p class="text"> в эко-гостинице;</p>
                            </div>
                            <div class="sec_03_item item">
                                <p class="item_number text--blue">3</p>
                                <p class="title_text">отказ от гаджетов, </p>
                                <p class="text"> вредных привычек <br> и денег;</p>
                            </div>
                        </div>
                        <div class="items_row desctop">
                            <div class="sec_03_item item">
                                <p class="item_number text--blue">4</p>
                                <p class="title_text">занятия йогой</p>
                                <p class="text"> с Дмитрием <br> и Ольгой Яценко;</p>
                            </div>
                            <div class="sec_03_item item">
                                <p class="item_number text--blue">5</p>
                                <p class="title_text">рефлексивные</p>
                                <p class="text"> упражнения, <br> ролевые игры;</p>
                            </div>
                            <div class="sec_03_item item">
                                <p class="item_number text--blue">6</p>
                                <p class="title_text">путешествия,</p>
                                <p class="text"> дыхательные практики,  <br>арт-терапия;</p>
                            </div>
                        </div>
                        <div class="sec_03_item item desctop">
                            <p class="item_number text--blue">7</p>
                            <p class="title_text">работа <br> с профессиональным <br> ментором</p>
                            <p class="text"> Юноной <br> Лотоцкой.</p>
                        </div>
                        <div class="mobile">
                                <div class="sec_03_item item">
                                    <p class="item_number text--blue">1</p>
                                    <p class="title_text">20 участников:</p>
                                    <p class="text"> собственники бизнеса <br> и лидеры мнений;</p>
                                </div>
                                <div class="sec_03_item item">
                                    <p class="item_number text--blue">2</p>
                                    <p class="title_text">5 дней в Карпатах</p>
                                    <p class="text"> в эко-гостинице;</p>
                                </div>
                                <div class="sec_03_item item">
                                    <p class="item_number text--blue">3</p>
                                    <p class="title_text">отказ от гаджетов, </p>
                                    <p class="text"> вредных привычек <br> и денег;</p>
                                </div>


                                <div class="sec_03_item item">
                                    <p class="item_number text--blue">4</p>
                                    <p class="title_text">занятия йогой</p>
                                    <p class="text"> с Дмитрием <br> и Ольгой Яценко;</p>
                                </div>
                                <div class="sec_03_item item">
                                    <p class="item_number text--blue">5</p>
                                    <p class="title_text">рефлексивные</p>
                                    <p class="text"> упражнения, <br> ролевые игры;</p>
                                </div>
                                <div class="sec_03_item item">
                                    <p class="item_number text--blue">6</p>
                                    <p class="title_text">путешествия,</p>
                                    <p class="text"> дыхательные практики,  <br> рт-терапия;</p>
                                </div>

                            <div class="sec_03_item item">
                                <p class="item_number text--blue">7</p>
                                <p class="title_text">работа <br> с профессиональным <br> ментором</p>
                                <p class="text"> Юноной <br> Лотоцкой.</p>
                            </div>
                        </div>
                        <img src="img/sec_03-img-2.png" alt="Горы" class="sec_img-1 desctop">
                    </div>
                </div>
                <div class="col-6 only_img_col">
                    <img src="img/sec_03-img-1.png" alt="Природа" class="sec_img-2">
                </div>
            </div>
        </div>
    </section>

    <section id="sec_04">
        <div class="container">
            <div class="row">
                <div class="col-7 only_img_col">
                    <img src="img/sec_04-img-1.png" alt="Поход в лес" class="sec_img">
                </div>
                <div class="col-5">
                    <h2 class="main_title section_title text--blue">Что такое BootCamp</h2>
                    <div class="item sec_04-item">
                        <p class="title_text item_text">BootCamp - это формат интенсивного обучения, <br> который помогает достичь быстрого результата <br> в краткий срок.</p>
                        <p class="text item_text">Суть метода проста - человек избавляется от лишнего и концентрируется только на одной цели. Формат обучения BootCamp активно используют в западных программах бизнес-образования.</p>
                    </div>
                    <div class="item sec_04-item">
                        <p class="item_text"><span class="title_text">Мы адаптировали эту методику и создали <br> пятидневную программу эмоциональной и физической <br> перезагрузки.</span> Ее участники отправятся в Карпаты, где будут работать над собой под руководством профессиональных менторов.</p>
                        <p class="item_text">Особенность программы - избавление от шума. Это <span class="title_text">полный отказ от вредных привычек, гаджетов, макияжа и других излишеств.</span> Стоит отсеять все поверхностное - чтобы поработать над глубинным.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="sec_05">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2 class="section_title main_title"><span class="text--blue">Вы хорошо знаете своих близких,</span> <br> их привычки и сильные стороны</h2>
                    <p class="sec_05-text text"> С легкостью расскажете о своем бизнесе или <br> увлечениях. Но так мало знаете о самом себе. </p>
                    <p class="sec_05-text title_text text--blue text--upper">Кто вы и ради чего находитесь на этой <br> планете? </p>
                    <p class="sec_05-text title_text">BootCamp — программа, которая поможет вам найти <br> ответ на этот вопрос.</p>
                </div>
                <div class="col-6 only_img_col">
                    <img src="img/sec_05-img-1.png" alt="Путишествие в горы" class="sec_img">
                </div>
            </div>
        </div>
    </section>

    <section id="sec_06">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section_title main_title text--blue">За пять дней BootCamp вы:</h2>
                </div>
            </div>
            <div class="row items_row">
                <div class="col-4">
                    <div class="item sec_06-item">
                        <div class="item_number_block number_block--arrow">
                            <p class="item_number">01</p>
                        </div>
                        <p class="item_text"><span class="title_text">Проработаете свою миссию,</span> визию, ценности и сфокусируетесь на истинных целях.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item sec_06-item">
                        <div class="item_number_block number_block--arrow">
                            <p class="item_number">02</p>
                        </div>
                        <p class="item_text"><span class="title_text">Избавитесь от шума,</span> сконцентрируетесь на важном, погрузитесь глубоко в себя.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item sec_06-item">
                        <div class="item_number_block">
                            <p class="item_number">03</p>
                        </div>
                        <p class="item_text"><span class="title_text">Сможете наконец “быть собой”, </span> определите собственные критерии и масштабы успешности, научитесь жить <br> по лично построенной модели жизни.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item sec_06-item">
                        <div class="item_number_block number_block--arrow">
                            <p class="item_number">04</p>
                        </div>
                        <p class="item_text"><span class="title_text">Приобретете навык <br> “self-coaching”,</span> который <br> поможет использовать свои силы <br> в кризисных ситуациях.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item sec_06-item">
                        <div class="item_number_block number_block--arrow">
                            <p class="item_number">05</p>
                        </div>
                        <p class="item_text"><span class="title_text">Создадите программу</span> <br> личностных изменений <br> "easy change".</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item sec_06-item">
                        <div class="item_number_block">
                            <p class="item_number">06</p>
                        </div>
                        <p class="item_text"><span class="title_text">Поймете, как вы влияете на окружающий мир</span> и как это делать более масштабно.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec_07">
        <div class="container">
            <div class="row">
                <div class="col-5 only_img_col">
                    <img src="img/sec_07-img-1.png" alt="Лес и горы" class="sec_img">
                </div>
                <div class="col-7 col--nopadding">
                    <h2 class="section_title main_title text--blue">Всю жизнь вы стремитесь <br> достичь цели</h2>
                    <div class="sec_07-item item">
                        <p class="text item_text">Вы много работаете и стараетесь стать лучше. <br> <span class="title_text">Времени на себя и близких - мало <br> или вовсе нет.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec_08">
        <div class="container">
            <div class="row">
                <div class="col-4 col-offset-3">
                    <h2 class="section_title main_title text--blue">Уверены, что выбрали <br> правильный путь?</h2>
                    <p class="text_block text">Точно знаете, что не захотите вернуться назад и прожить другую жизнь?</p>
                    <p class="text_block text">Остановитесь. Загляните в себя. <span class="title_text">Узнайте, <br> к чему стоит стремиться на самом деле.</span></p>
                    <a class="md-trigger btn flex sec_08-btn" data-modal="modal_callback_subscribe"><span class="text--upper btn_span main_title">Открой себя настоящего</span><img src="img/ar-1.png" alt="Указатель" class="btn_arrow"></a>
                </div>
                <div class="col-5 tr only_img_col">
                    <img src="img/sec_08-img-1.png" alt="Лес и горы" class="sec_img">
                </div>
            </div>
        </div>
    </section>

    <section id="sec_09">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h2 class="section_title main_title text--blue">ПРОГРАММА BOOT CAMP</h2>
                    <div class="program_period">
                        <p class="vertical_text rotate--plus main_title">День 1-2</p>
                        <div class="program_lists four--colums">
                            <p class="program_title text--upper title_text">Что я <span class="text--blue">ЗНАЮ</span> о себе</p>
                            <div class="program_lists_item">
                                <p class="lists_item_title title_text">Цели:</p>
                                <ul class="program_list">
                                   <li class="list_item">• Определить свой уровень реализации в каждой из 10 областей;
                                    <li class="list_item">• Получить навыки: 
                                    <ul><li>- понимания своих эмоций;</li>
                                    <li>- построения продуктивных отношений;</li>
                                    <li>- создания ресурсных состояний в сложных ситуациях.</li></ul></li>

                                </ul>
                            </div>
                            <div class="program_lists_item">
                                <p class="lists_item_title title_text">Теория 10 выборов </p>
                                <ul class="program_list">
                                    <li class="list_item">• Понимание успеха в каждой из десяти сфер;</li>
                                    <li class="list_item">• Куда я инвестирую свою энергию;</li>
                                    <li class="list_item">• Хватает ли мне сил заниматься тем, чем мне действительно хочется. Масштаб моего успеха.</li>
                                </ul>
                            </div>
                            <div class="program_lists_item">
                                <p class="lists_item_title title_text">Эмоциональный интеллект: </p>
                                <ul class="program_list">
                                   <li class="list_item">• Умение распознавать и интерпретировать свои эмоции и эмоции окружающих людей;</li>
                                   <li class="list_item">• Освоение навыков релаксации и повышения ресурсного состояния;</li>
                                </ul>
                            </div>
                            <div class="program_lists_item">
                                <p class="lists_item_title title_text">Коммуникационная карта: </p>
                                <ul class="program_list">
                                    <li class="list_item"> Анализ собственного окружения и его влияния,</li>
                                    <li class="list_item">• Личная успешность в коммуникациях</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="program_period">
                        <p class="vertical_text rotate--plus main_title"> День 3-4</p>
                        <div class="program_lists four--colums">
                            <p class="program_title text--upper title_text">Что я <span class="text--blue">ГОВОРЮ</span> миру, что мир говорит мне</p>
                            <div class="program_lists_item">
                                <p class="lists_item_title title_text">Цели:</p>
                                <ul class="program_list">
                                    <li class="list_item">• Определить внутренние препятствия</li>
                                    <li class="list_item">• Получить доступ к собственным глубинным ценностям</li>
                                    <li class="list_item">• Прописать собственную миссию</li>
                                </ul>
                            </div>
                            <div class="program_lists_item">
                                <p class="lists_item_title title_text">Сценарная карта:</p>
                                <ul class="program_list">
                                    <li class="list_item">• Определение внутренних препятствий. Работа с "драконами"</li>
                                    <li class="list_item">• Осознание запретов и разрешений.</li>
                                </ul>
                            </div>
                            <div class="program_lists_item">
                                <p class="lists_item_title title_text">Ценности: </p>
                                <ul class="program_list">
                                    <li class="list_item">• Идентификация псевдо- и истинных ценностей;</li>
                                    <li class="list_item">• Создание мотивационно-ценностной карты</li>
                                </ul>
                            </div>

                            <div class="program_lists_item">
                                <p class="lists_item_title title_text">Моя миссия:</p>
                                <ul class="program_list">
                                    <li class="list_item">• Проработка личной миссии исходя из своих истинных ценностей и желаний;</li>
                                    <li class="list_item">• Как я улучшаю мир в контексте своей миссии?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="program_period">
                        <p class="vertical_text rotate--plus main_title">День 5</p>
                        <div class="program_lists">
                            <p class="program_title text--upper title_text">Что я буду <span class="text--blue">ДЕЛАТЬ</span> дальше</p>
                            <div class="program_lists_item">
                                <p class="lists_item_title title_text">Цели:</p>
                                <ul class="program_list">
                                    <li class="list_item">• Создание личного видения желаемого будущего;</li>
                                    <li class="list_item">• Создание плана "Моя программа перемен".</li>
                                </ul>
                            </div>
                            <div class="program_lists_item">
                                <p class="lists_item_title title_text">Переход от знаний <br> к действиям:</p>
                                <ul class="program_list">
                                <li class="list_item">• Как начать делать то, <br>что постоянно откладываешь?</li>
                                <li class="list_item">• Создание проекта и программы поддержки личностных изменений.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec_10">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section_title main_title text--blue tc">ТРЕНЕРЫ BOOTCAMP</h2>
                </div>
            </div>
                <div class="row">
                    <div class="col-4">
                        <div class="coach_card">
                            <div class="coach_card_img_wrapper">
                                <img src="img/coach-1.png" alt="Тренер" class="coach_img">
                            </div>
                            <p class="coach_card_name title_text text--upper">Юнона Лотоцкая</p>
                            <div class="coach_card_description">
                                <p class="coach_card_text">Бизнес-консультант, более 20 лет опыта работы в корпоративном сегменте. Работала с топ-менеджерами Киевстар, Metlife, Mondelez International, УкрАгроКом. Докторант, учёный-экспериментатор, ведущий <p class="more_info">научный сотрудник лаборатории Новых информационных технологий обучения Института психологии им. Г.С.Костюка НАПН Украины. Автор трансформационного курса “Психология успеха”, член украинского сообщества психотерапевтов Европейской организации психотерапии. Автор-разработчик 23 обучающих программ. Основатель и руководитель центра инновационного менеджмента «Почерк». Тренер проекта “СОЛЬ”.</p> </p>
                            </div>
                            <button class="coach_accordion_trigger coach_card_button"><span class="main_title text--blue">читать полностью</span><img src="img/ar-3.png" alt="Указатель" class="coach_btn_arrow"></button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="coach_card">
                            <div class="coach_card_img_wrapper">
                                <img src="img/coach-2.png" alt="Тренер" class="coach_img">
                            </div>
                            <p class="coach_card_name title_text text--upper">Дима Яценко</p>
                            <div class="coach_card_description">
                                <p class="coach_card_text">Гимнастику йоги практикует с 2000 года. Занимался восточными единоборствами, в том числе айкидо, цигун, тай-цзи. Участник многочисленных ретритов по дзен, дзогчен и йоге. Преподает в нескольких киевских студиях <p class="more_info"> йоги, проводит ретриты и семинары. Прошел курс обучения в школе инструкторов Андрея Сидерского, сертифицированный преподаватель Европейского йога-альянса. Автор методики Yoga Balance Technology.</p></p>
                            </div>
                            <button class="coach_accordion_trigger coach_card_button"><span class="main_title text--blue">читать полностью</span><img src="img/ar-3.png" alt="Указатель" class="coach_btn_arrow"></button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="coach_card">
                            <div class="coach_card_img_wrapper">
                                <img src="img/coach-3.png" alt="Тренер" class="coach_img">
                            </div>
                            <p class="coach_card_name title_text text--upper">Ольга Яценко</p>
                            <div class="coach_card_description">
                                <p class="coach_card_text"> Журналист, переводчик, писатель, сценарист, лауреат Новой Пушкинской премии. Йогой занимается с 2010 года. Автор блога "Йога для жизни и жизнь с йогой". Многодетная (четырехкратная!) мама и адепт здорового <p class="more_info">образа жизни в условиях повседневного быта. </p></p>
                            </div>
                            <button class="coach_accordion_trigger coach_card_button"><span class="main_title text--blue">читать полностью</span><img src="img/ar-3.png" alt="Указатель" class="coach_btn_arrow"></button>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section id="sec_11">
        <div class="container">
            <div class="row sec_11-row_1">
                <div class="col-6 img_only_col">
                    <img class="sec_img-1" src="img/sec_10-img-1.png" alt="Природа">
                </div>
                <div class="col-6">
                    <h2 class="section_title main_title text--blue">КАК ПОПАСТЬ НА BOOTCAMP</h2>
                    <div class="sec_11-item item">
                        <p class="item_text text">Мы ограничили количество мест. <br> У нас нет задачи создать тусовку, чтобы <br> провести эти 5 дней громко и весело.</p>
                    </div>
                    <div class="sec_11-item item margined--left">
                        <p class="text item_text"><span class="title_text">Наша главная цель — </span>помочь каждому <br> участнику узнать себя.</p>
                    </div>
                </div>
            </div>
            <div class="row sec_11-row_2">
                <div class="col-4 col-offset-3">
                    <div class="sec_11-item item">
                        <p class="item_text title_text">Чтобы попасть на BootCamp в Карпатах, каждый участник проходит личное собеседование с командой проекта. </p>
                    </div>
                    <div class="sec_11-item item">
                        <p class="item_text text"><span class="title_text"></span>Нам важно ближе познакомиться с каждым из потенциальных участников, понять личную мотивацию и ценности, узнать об ожиданиях от проекта.&nbsp;<br></p>
                    </div>
                    <div class="sec_11-item item">
                        <p class="item_text text"><span class="title_text"></span><br></p>
                    </div>
                    <div class="sec_11-item item">
                        <p class="item_text text"></p>
                    </div>
                </div>
                <div class="col-5 img_only_col">
                    <img class="sec_img-2" src="img/sec_10-img-2.png" alt="Вечер у костра">
                </div>
            </div>
            <div class="row sec_11-row_3">
                <div class="col-4 img_only_col">
                    <img class="sec_img-3" src="img/sec_10-img-3.png" alt="Природа">
                </div>
                <div class="col-8">
                    <div class="sec_11-item item">
                        <p class="item_text text">Успех BootCamp зависит от мотивации <br> и настроения каждого участника. </p>
                    </div>
                    <div class="sec_11-item item">
                        <p class="item_text text">Именно поэтому <span class="title_text">в Карпаты поедет только 20 <br> человек, действительно готовых к работе <br> над собой.</span></p>
                    </div>
                    <p class="sec_11-cta title_text text--upper">Считаете, что вашей мотивации <br> достаточно?</p>
                    <a class="md-trigger btn flex sec_11-btn" data-modal="modal_callback_subscribe"><span class="text--upper btn_span main_title">записаться на собеседование</span><img src="img/ar-1.png" alt="Указатель" class="btn_arrow"></a>
                </div>
            </div>
        </div>
    </section>

    <section id="sec_14-1">
        <div class="container">
            <div class="row sec_14-row_1">
                <div class="col-7 only_img_col">
                <h2 class=" mobile section_title main_title text--blue">Наши результаты</h2>


                    <div class='tabs tabs_default'>
                      <ul class='tab_control'>
                        <li><a href="#tab-1" class="btn flex"><span class="text--upper btn_span main_title">BootCamp 1</span><img src="img/ar-1.png" alt="Указатель" class="btn_arrow"></a></li>
                        <li><a href="#tab-2" class="btn flex"><span class="text--upper btn_span main_title">BootCamp 2</span><img src="img/ar-1.png" alt="Указатель" class="btn_arrow"></a></li>
                        <div class="clear"></div>
                      </ul>
                      <div id='tab-1'>
                          <div class="photo_slider-1">
                              <a href="img/photo_s1/6.jpg" data-lightbox="gallery-set">
                              <img src="img/photo_s1/slider/6.png" alt=""></a>
                              <a href="img/photo_s1/1.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s1/slider/1.png" alt=""></a>
                              <a href="img/photo_s1/2.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s1/slider/2.png" alt=""></a>
                              <a href="img/photo_s1/3.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s1/slider/3.png" alt=""></a>
                              <a href="img/photo_s1/4.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s1/slider/4.png" alt=""></a>
                              <a href="img/photo_s1/5.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s1/slider/5.png" alt=""></a>
                              <a href="img/photo_s1/7.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s1/slider/7.png" alt=""></a>
                              <a href="img/photo_s1/8.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s1/slider/8.png" alt=""></a>
                              <a href="img/photo_s1/9.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s1/slider/9.png" alt=""></a>
                          </div>
                      </div>
                      <div id='tab-2'>
                          <div class="photo_slider-2">
                              <a href="img/photo_s2/1.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s2/slider/1.png" alt="">
                              </a>
                              <a href="img/photo_s2/2.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s2/slider/2.png" alt="">
                              </a>
                              <a href="img/photo_s2/3.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s2/slider/3.png" alt="">
                              </a>
                              <a href="img/photo_s2/4.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s2/slider/4.png" alt="">
                              </a>
                              <a href="img/photo_s2/5.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s2/slider/5.png" alt="">
                              </a>
                              <a href="img/photo_s2/6.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s2/slider/6.png" alt="">
                              </a>
                              <a href="img/photo_s2/7.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s2/slider/7.png" alt="">
                              </a>
                              <a href="img/photo_s2/8.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s2/slider/8.png" alt="">
                              </a>
                              <a href="img/photo_s2/9.jpg" data-lightbox="gallery-set">
                                  <img src="img/photo_s2/slider/9.png" alt="">
                              </a>
                              <a href="img/photo_s2/10.jpg" data-lightbox="gallery-set">
                                <img src="img/photo_s2/slider/10.png" alt="">
                            </a>
                            <a href="img/photo_s2/11.jpg" data-lightbox="gallery-set">
                                <img src="img/photo_s2/slider/11.png" alt="">
                            </a>
                            <a href="img/photo_s2/12.jpg" data-lightbox="gallery-set">
                                <img src="img/photo_s2/slider/12.png" alt="">
                            </a>
                            <a href="img/photo_s2/13.jpg" data-lightbox="gallery-set">
                                <img src="img/photo_s2/slider/13.png" alt="">
                            </a>
                        </div>
                      </div>

                    </div>

                </div>
                <div class="col-5 col--nopadding">
                    <h2 class="desctop section_title main_title text--blue">Наши результаты</h2>
                    <div class="item sec_14-item">
                        <p class="item_text title_text">2 буткемпа, 25 участников, регулярные встречи выпускников и личный коучинг в рамках 6 месяцев постподдержки.</p>
                    </div>
                    <div class="item sec_14-item">
                        <!-- <p class="item_text text"></p> -->
                        <p class="item_text text">NPS - 68%  <br> Полезность участия в буткемпе - 9.43 из 10 <br> Качество организации - 8.62 из 10 <br> Локация буткемпа - 9.31 из 10 <br> Атмосфера - 9.50 из 10</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec_12">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2 class="section_title main_title text--blue">ЛОКАЦИЯ</h2>
                    <div class="sec_12-item item">
                        <p class="item_text text">Мы долго искали спокойное и уютное место для релакса и активной саморефлексии. <br> <span class="title_text">И выбрали одну из лучших “зеленых” гостиниц Украины - Осоння Карпаты. </span></p>
                    </div>
                    <div class="sec_12-item item">
                        <p class="item_text text">Гостиница расположена в экологически чистой горной зоне на берегу реки Стрый.</p>
                    </div>
                    <div class="sec_12-item item">
                        <p class="item_text text">Осоння специализируется на настоящем эко-отдыхе: </p>
                    </div>
                    <div class="sec_12-item item">
                        <p class="item_text text title_text">- натуральные продукты <br> - эко-материалы интерьера <br> - вдохновляющие активности <br> на свежем воздухе.</p>
                    </div>
                    <div class="sec_12-item item">
                        <p class="item_text text">Ничего лишнего — но все необходимое.</p>
                    </div>
                </div>
                <div class="col-8 col--nopadding">
                    <div class="slider desctop">

                      <div class="slide">
                            <a href="img/hotels/hotels-big/1.jpg" data-lightbox="gallery-hotels_desctop"><img src="img/hotels/1.png" alt="Комфортный отель"></a>
                          <a href="img/hotels/hotels-big/2.jpg" data-lightbox="gallery-hotels_desctop"><img src="img/hotels/2.png" alt="Комфортный отель"></a>
                          <a href="img/hotels/hotels-big/3.jpg" data-lightbox="gallery-hotels_desctop"><img src="img/hotels/3.png" alt="Комфортный отель"></a>
                      </div>
                       <div class="slide">
                            <a href="img/hotels/hotels-big/4.jpg" data-lightbox="gallery-hotels_desctop"><img src="img/hotels/4.png" alt="Комфортный отель"></a>
                           <a href="img/hotels/hotels-big/5.jpg" data-lightbox="gallery-hotels_desctop"><img src="img/hotels/5.png" alt="Комфортный отель"></a>
                           <a href="img/hotels/hotels-big/6.jpg" data-lightbox="gallery-hotels_desctop"><img src="img/hotels/6.png" alt="Комфортный отель"></a>
                       </div>
                     <div class="slide">
                        <a href="img/hotels/hotels-big/7.jpg" data-lightbox="gallery-hotels_desctop"><img src="img/hotels/7.png" alt="Комфортный отель"></a>
                         <a href="img/hotels/hotels-big/8.jpg" data-lightbox="gallery-hotels_desctop"><img src="img/hotels/8.png" alt="Комфортный отель"></a>
                         <a href="img/hotels/hotels-big/9.jpg" data-lightbox="gallery-hotels_desctop"><img src="img/hotels/9.png" alt="Комфортный отель"></a>
                     </div>
                    </div>
                    <div class="slider mobile tc">
                        <div class="wrap">
                            <a href="img/hotels/hotels-big/1.jpg" data-lightbox="gallery-hotels_mob"><img src="img/hotels/1.png" alt="Комфортный отель"></a>
                        </div>
                        <div class="wrap">
                            <a href="img/hotels/hotels-big/2.jpg" data-lightbox="gallery-hotels_mob"><img src="img/hotels/2.png" alt="Комфортный отель"></a>
                        </div>
                        <div class="wrap">
                            <a href="img/hotels/hotels-big/3.jpg" data-lightbox="gallery-hotels_mob"><img src="img/hotels/3.png" alt="Комфортный отель"></a>
                        </div>
                        <div class="wrap">
                            <a href="img/hotels/hotels-big/4.jpg" data-lightbox="gallery-hotels_mob"><img src="img/hotels/4.png" alt="Комфортный отель"></a>
                        </div>
                        <div class="wrap">
                            <a href="img/hotels/hotels-big/5.jpg" data-lightbox="gallery-hotels_mob"><img src="img/hotels/5.png" alt="Комфортный отель"></a>
                        </div>
                        <div class="wrap">
                            <a href="img/hotels/hotels-big/6.jpg" data-lightbox="gallery-hotels_mob"><img src="img/hotels/6.png" alt="Комфортный отель"></a>
                        </div>
                        <div class="wrap">
                            <a href="img/hotels/hotels-big/7.jpg" data-lightbox="gallery-hotels_mob"><img src="img/hotels/7.png" alt="Комфортный отель"></a>
                        </div>
                        <div class="wrap">
                            <a href="img/hotels/hotels-big/8.jpg" data-lightbox="gallery-hotels_mob"><img src="img/hotels/8.png" alt="Комфортный отель"></a>
                        </div>
                        <div class="wrap">
                            <a href="img/hotels/hotels-big/9.jpg" data-lightbox="gallery-hotels_mob"><img src="img/hotels/9.png" alt="Комфортный отель"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec_13">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section_title main_title text--blue">ВАШ ДЕНЬ В BOOTCAMP</h2>
                </div>
            </div>
            <div class="row sec_13-row_1">
                <div class="col-2">
                    <div class="item schedule_item">
                        <p class="schedule_time text--blue main_title">6:30 – 7:30. </p>
                        <p class="schedule_text text">Утренняя йога. <br> Умное тело. <br> Энергетические практики</p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="item schedule_item">
                        <p class="schedule_time text--blue main_title">7:30 – 8:15. </p>
                        <p class="schedule_text text">Прогулка</p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="item schedule_item">
                        <p class="schedule_time text--blue main_title">8:15 – 9:00. </p>
                        <p class="schedule_text text">Завтрак</p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="item schedule_item">
                        <p class="schedule_time text--blue main_title">9:00 – 11:00.</p>
                        <p class="schedule_text text">Первый блок практики <br> и работы над собой</p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="item schedule_item">
                        <p class="schedule_time text--blue main_title">11:00 – 11:30.</p>
                        <p class="schedule_text text">Перерыв, чай <br> и фрукты</p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="item schedule_item">
                        <p class="schedule_time text--blue main_title">11:30 – 14:00.</p>
                        <p class="schedule_text text">Второй блок практики <br> и работы над собой</p>
                    </div>
                </div>
            </div>
            <div class="row sec_13-row_2">
                <div class="col-2">
                    <div class="item schedule_item">
                        <p class="schedule_time text--blue main_title">14:00 – 16:00.</p>
                        <p class="schedule_text text">Обед и прогулка (скандинавская ходьба, поход и т.д.)</p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="item schedule_item">
                        <p class="schedule_time text--blue main_title">16:00 – 18:30. </p>
                        <p class="schedule_text text">Третий блок практики и работы над собой</p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="item schedule_item">
                        <p class="schedule_time text--blue main_title">18:30 – 19:30.</p>
                        <p class="schedule_text text">Ужин</p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="item schedule_item">
                        <p class="schedule_time text--blue main_title">19:30 – 21:00.</p>
                        <p class="schedule_text text">Вечерние активности: баня, дыхательные практики, медитации</p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="item schedule_item">
                        <p class="schedule_time text--blue main_title">21:00 – 22:30.</p>
                        <p class="schedule_text text">Вечерний блок. Синемалогия\фильм + рефлексия</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec_14">
        <div class="container">
            <div class="row sec_14-row_1">
                <div class="col-7 only_img_col">
                    <img class="sec_img-1" src="img/sec_13-img-1.png" alt="Уеденение с природой">
                </div>
                <div class="col-5 col--nopadding">
                    <h2 class="section_title main_title text--blue">Про отказ от поверхностного</h2>
                    <div class="item sec_14-item">
                        <p class="item_text text">Отказ от привычной нам среды — упражнение сложное и неприятное. Многие из нас боятся одиночества, потому что им попросту не нравится компания.</p>
                    </div>
                    <div class="item sec_14-item">
                        <p class="item_text title_text">Остаться наедине с собой действительно трудно.</p>
                    </div>
                </div>
            </div>
            <div class="row sec_14-row_2">
                <div class="col-5 col-offset-1">
                    <h2 class="section_title main_title text--blue">Мир движется все быстрее</h2>
                    <div class="item sec_14-item">
                        <p class="item_text text">Посмотрели минутное видео, пролистнули ленту, вскользь улыбнулись случайному знакомому.</p>
                    </div>
                    <div class="item sec_14-item">
                        <p class="item_text text">Американский социолог Овертон предупреждал еще много лет назад: “лучший раб — тот, кто думает, что он свободен”.</p>
                    </div>
                    <div class="item sec_14-item">
                        <p class="item_text text"><span class="title_text">Наши действия поверхностны, в них нет глубины. Для работы над собой нужно избавиться от привычных действий,</span> которые помогают нам не думать. Убрать ненужные, бессмысленные связи и контакты. И тогда останется человек. Такой, как он есть. С его преимуществами и недостатками.</p>
                    </div>
                </div>
                <div class="col-6 only_img_col">
                    <img class="sec_img-2" src="img/sec_13-img-2.png" alt="Уеденение с природой">
                </div>
            </div>
        </div>
    </section>

    <section id="sec_15">
        <div class="container">
            <div class="row">
                <div class="col-7 only_img_col">
                    <img class="sec_img-1" src="img/sec_14-img-1.png" alt="Отношения">
                </div>
                <div class="col-5 col--nopadding">
                    <h2 class="section_title main_title text--blue">связь с родными</h2>
                    <p class=".sec_15-text text">Мы понимаем, что нельзя оставаться без связи с родными и коллегами. Поэтому <span class="title_text">перед поездкой каждый участник получит номер телефона, на который можно позвонить в случае необходимости.</span> Звонки будет принимать ответственный человек, который тут же <br> передаст вам всю информацию.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="sec_16">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2 class="section_title main_title text--blue">Это не мотивационный тренинг</h2>
                    <div class="item sec_16-item item">
                        <p class="item_text text">Мы начинаем работу с глубин — с ценностей, <br> с миссии участников. Наша задача — дать человеку возможность погрузиться в себя, лучше понять свои желания и потребности. <br> Ставить цели и вести ежедневник — этому может научить каждый. </p>
                    </div>
                    <div class="item sec_16-item item">
                        <p class="item_text title_text">Мы хотим добиться того, чтоб ваши цели совпадали с истинными желаниями.</p>
                    </div>
                    <div class="item sec_16-item item">
                        <p class="item_text text">BootCamp в Карпатах - это возможность за 5 дней узнать о себе больше, чем вы знали всю свою жизнь.</p>
                    </div>

                    <p class="sec_16-cta text--upper title_text">Убедитесь, что не тратите время зря.</p>
                </div>
                <div class="col-6">
                    <form  method="POST" class="form-inline db-form" action="javascript:void(null);">
                        <!-- Hidden DB Fields -->
                        <input type="hidden" name="registrationType" value="default_registration">
                        <input type="hidden" name="orderType" value="Zayavka">
                        <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                        <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                        <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                        <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                        <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                        <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                        <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                        <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                        <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                        <input type="hidden" name="city" value="<?php echo $data['city']; ?>">
                        <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                        <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                        <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                        <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                        <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                        <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">
                        <!-- Zoho -->
                        <input type="hidden" name="product_id" value="2167809000001718033">
                        <input type="hidden" name="product_name" value="EQ BootCamp 3 (10.05 - 14.05);">
                        <input type="hidden" name="lead_source" value="Landing:EQBootcamp">
                        <!-- Zoho -->

                        <!-- END Hidden DB Fields -->

                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="EQ Bootcamp">
                        <input type="hidden" name="admin_email" value="alien_202@mail.ru">
                        <input type="hidden" name="form_type" value="firstForm ">
                        <!-- END Hidden Required Fields -->

                        <span class="field">
                            <input type="text" class="form-control" name="entry.1005876579" required=""  placeholder="Ваше имя " />
                            <span class="bar"></span>
                        </span>


                        <span class="field">
                            <input placeholder="Ваш телефон" type="tel" class="form-control" name="entry.1707644685" required="">
                            <span class="bar"></span>
                        </span>

                        <span class="field">
                            <input type="email" required="" placeholder="Ваш E-Mail" name="entry.980115966" class="form-control">
                            <span class="bar"></span>
                        </span>


                        <button type="submit" name="send" class="btn flex sec_16-btn"><span class="text--upper btn_span main_title">найти себя</span><img src="img/ar-1.png" alt="Указатель" class="btn_arrow"></button>

                        <div class="clear"></div>


                    </form>

                </div>
            </div>
            <div class="row footer">
                <div class="col-2">
                    <a href="#sec_01" class="scroll"><img src="img/logo-footer.png" alt="Соль" class="logo logo-footer"></a>
                </div>
                <div class="col-10 col--nopadding">
                    <ul class="footer_navigation">
                        <li class="menu_navigation_item"><a href="#sec_04" class="scroll menu_navigation_link">Что такое BootCamp</a></li>
                        <li class="menu_navigation_item"><a href="#sec_09" class="scroll menu_navigation_link">Программа</a></li>
                        <li class="menu_navigation_item"><a href="#sec_10" class="scroll menu_navigation_link">Тренеры</a></li>
                        <li class="menu_navigation_item"><a href="#sec_11" class="scroll menu_navigation_link">Как попасть</a></li>
                        <li class="menu_navigation_item"><a href="#sec_12" class="scroll menu_navigation_link">Локации</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="politics">
                        <a class="md-trigger" data-modal="modal_politics_one">Политика  конфиденциальности</a>
                        <a class="md-trigger" data-modal="modal_politics_two">Отказ от  ответственности</a>
                        <a class="md-trigger" data-modal="modal_politics_three">Согласие с  рассылкой</a>
                    </div>
                </div>
                <div class="col-3">
                    <a class="logo_rezart" target="_blank" href="http://rezart.com.ua/"><img src="img/logo-rezart.png" alt="" ></a>
                    <a class="footer-fire" target="_blank" href="http://willcatchfire.com/"></a>
                </div>
            </div>
        </div>
    </footer>


    <div class="hidden">
        <div class="md-modal md-effect-1" id="modal_callback">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <div class="titlebox">
                    <h2 class="main_title text--blue">Заказ обратного звонка</h2>
                </div>
                <div>
                    <form  method="POST" class="form-inline db-form" action="javascript:void(null);">
                        <!-- Hidden DB Fields -->

                        <input type="hidden" name="registrationType" value="default_registration">
                        <input type="hidden" name="orderType" value="Zayavka">
                        <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                        <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                        <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                        <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                        <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                        <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                        <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                        <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                        <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                        <input type="hidden" name="city" value="<?php echo $data['city']; ?>">
                        <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                        <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                        <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                        <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                        <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                        <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                        <!-- Zoho -->
                        <input type="hidden" name="product_id" value="2167809000001718033">
                        <input type="hidden" name="product_name" value="EQ BootCamp 3 (10.05 - 14.05);">
                        <input type="hidden" name="lead_source" value="Landing:EQBootcamp">
                        <!-- Zoho -->

                        <!-- END Hidden DB Fields -->

                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="EQ Bootcamp">
                        <input type="hidden" name="admin_email" value="alien_202@mail.ru">
                        <input type="hidden" name="goal" value="conversion_1">
                        <input type="hidden" name="form_type" value="firstForm ">
                        <!-- END Hidden Required Fields -->

                        <span class="field">
                            <input type="text" class="form-control" name="entry.1005876579" required=""  placeholder="Ваше имя " />
                            <span class="bar"></span>
                        </span>


                        <span class="field">
                            <input placeholder="Ваш телефон" type="tel" class="form-control" name="entry.1707644685" required="">
                            <span class="bar"></span>
                        <!-- Если отправляем и на Гет РЕспонс тоже - меняем название поля name на то которое создали в компании ГетРЕспонса -->
                        </span>


                        <button type="submit" name="send" class="btn flex callbackPopup-btn"><span class="text--upper btn_span main_title">перезвоните мне</span><img src="img/ar-1.png" alt="Указатель" class="btn_arrow"></button>


                        <div class="clear"></div>


                    </form>


                </div>
            </div>
        </div>


        <div class="md-modal md-effect-1" id="modal_callback_subscribe">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <div class="titlebox">
                    <h2 class="main_title text--blue">Записаться на консультацию</h2>
                </div>
                <div>
                    <form  method="POST" class="form-inline db-form" action="javascript:void(null);">
                        <!-- Hidden DB Fields -->

                        <input type="hidden" name="registrationType" value="default_registration">
                        <input type="hidden" name="orderType" value="Zayavka">
                        <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                        <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                        <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                        <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                        <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                        <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                        <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                        <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                        <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                        <input type="hidden" name="city" value="<?php echo $data['city']; ?>">
                        <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                        <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                        <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                        <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                        <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                        <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                        <!-- Zoho -->
                        <input type="hidden" name="product_id" value="2167809000001718033">
                        <input type="hidden" name="product_name" value="EQ BootCamp 3 (10.05 - 14.05);">
                        <input type="hidden" name="lead_source" value="Landing:EQBootcamp">
                        <!-- Zoho -->

                        <!-- END Hidden DB Fields -->

                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="EQ Bootcamp">
                        <input type="hidden" name="admin_email" value="alien_202@mail.ru">
                        <input type="hidden" name="goal" value="conversion_1">
                        <input type="hidden" name="form_type" value="firstForm ">
                        <!-- END Hidden Required Fields -->

                        <span class="field">
                            <input type="text" class="form-control" name="entry.1005876579" required=""  placeholder="Ваше имя " />
                            <span class="bar"></span>
                        </span>


                        <span class="field">
                            <input placeholder="Ваш телефон" type="tel" class="form-control" name="entry.1707644685" required="">
                            <span class="bar"></span>
                        <!-- Если отправляем и на Гет РЕспонс тоже - меняем название поля name на то которое создали в компании ГетРЕспонса -->
                        </span>

                        <span class="field">
                            <input type="email" required="" placeholder="Ваш E-Mail" name="entry.980115966" class="form-control">
                            <span class="bar"></span>
                        </span>



                        <button type="submit" name="send" class="btn flex callbackPopup-btn"><span class="text--upper btn_span main_title">перезвоните мне</span><img src="img/ar-1.png" alt="Указатель" class="btn_arrow"></button>

                        <div class="clear"></div>

                    </form>

                </div>
            </div>
        </div>

        <div class="md-modal md-effect-8 md_large" id="modal_picture-1">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <img src="img/hotels/hotels-big/1.jpg" alt="Hotel">
            </div>
        </div>

        <div class="md-modal md-effect-8 md_large" id="modal_picture-2">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <img src="img/hotels/hotels-big/2.jpg" alt="Hotel">
            </div>
        </div>

        <div class="md-modal md-effect-8 md_large" id="modal_picture-3">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <img src="img/hotels/hotels-big/3.jpg" alt="Hotel">
            </div>
        </div>

        <div class="md-modal md-effect-8 md_large" id="modal_picture-4">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <img src="img/hotels/hotels-big/4.jpg" alt="Hotel">
            </div>
        </div>

        <div class="md-modal md-effect-8 md_large" id="modal_picture-5">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <img src="img/hotels/hotels-big/5.jpg" alt="Hotel">
            </div>
        </div>

        <div class="md-modal md-effect-8 md_large" id="modal_picture-6">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <img src="img/hotels/hotels-big/6.jpg" alt="Hotel">
            </div>
        </div>

        <div class="md-modal md-effect-8 md_large" id="modal_picture-7">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <img src="img/hotels/hotels-big/7.jpg" alt="Hotel">
            </div>
        </div>

        <div class="md-modal md-effect-8 md_large" id="modal_picture-8">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <img src="img/hotels/hotels-big/8.jpg" alt="Hotel">
            </div>
        </div>

        <div class="md-modal md-effect-8 md_large" id="modal_picture-9">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <img src="img/hotels/hotels-big/9.jpg" alt="Hotel">
            </div>
        </div>




        <div class="md-modal md-effect-8 md_large" id="modal_politics_one">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <div class="titlebox">
                    <h2 class="title tc">Политика конфиденциальности</h2>
                </div>
                <div class="md_content tl">
                    <p>Ваша конфиденциальность очень важна для нас. Мы хотим, чтобы Ваша работа в Интернет по возможности была максимально приятной и полезной, и Вы совершенно спокойно использовали широчайший спектр информации, инструментов и возможностей, которые предлагает Интернет.</p>
                    <p>Личная информация Членов, собранная при регистрации (или в любое другое время) преимущественно используется для подготовки Продуктов или Услуг в соответствии с Вашими потребностями. Ваша информация не будет передана или продана третьим сторонам. Однако мы можем частично раскрывать личную информацию в особых случаях, описанных в «Согласии с рассылкой»</p>
                    <p><strong>Какие данные собираются на сайте</strong></p>
                    <p>При добровольной регистрации на получение рассылки вы отправляете свое Имя и E-mail через форму регистрации.</p>
                    <p><strong>С какой целью собираются эти данные</strong></p>
                    <p>Имя используется для обращения лично к вам, а ваш e-mail для отправки вам писем рассылок, новостей, полезных материалов, коммерческих предложений.</p>
                    <p>Ваши имя и e-mail не передаются третьим лицам, ни при каких условиях кроме случаев, связанных с исполнением требований законодательства.</p>
                    <p>Вы можете отказаться от получения писем рассылки и удалить из базы данных свои контактные данные в любой момент, кликнув на ссылку для отписки, присутствующую в каждом письме.</p>
                    <p><strong>Как эти данные используются</strong></p>
                    <p>При помощи этих данных собирается информация о действиях посетителей на сайте с целью улучшения его содержания, улучшения функциональных возможностей сайта и, как следствие, создания качественного контента и сервисов для посетителей.</p>
                    <p>Вы можете в любой момент изменить настройки своего браузера так, чтобы браузер блокировал все файлы или оповещал об отправке этих файлов. Учтите при этом, что некоторые функции и сервисы не смогут работать должным образом.</p>
                    <p><strong>Как эти данные защищаются</strong></p>
                    <p>Для защиты Вашей личной информации мы используем разнообразные административные, управленческие и технические меры безопасности. Наша Компания придерживается различных международных стандартов контроля, направленных на операции с личной информацией, которые включают определенные меры контроля по защите информации, собранной в Интернет.</p>
                    <p>Наших сотрудников обучают понимать и выполнять эти меры контроля, они ознакомлены с нашим Уведомлением о конфиденциальности, нормами и инструкциями.</p>
                    <p>Тем не менее, несмотря на то, что мы стремимся обезопасить Вашу личную информацию, Вы тоже должны принимать меры, чтобы защитить ее.</p>
                    <p>Мы настоятельно рекомендуем Вам принимать все возможные меры предосторожности во время пребывания в Интернете. Организованные нами услуги и веб-сайты предусматривают меры по защите от утечки, несанкционированного использования и изменения информации, которую мы контролируем. Несмотря на то, что мы делаем все возможное, чтобы обеспечить целостность и безопасность своей сети и систем, мы не можем гарантировать, что наши меры безопасности предотвратят незаконный доступ к этой информации хакеров сторонних организаций.</p>
                    <p>В случае изменения данной политики конфиденциальности вы сможете прочитать об этих изменениях на этой странице или, в особых случаях, получить уведомление на свой e-mail.</p>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-8 md_large" id="modal_politics_two">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <div class="titlebox">
                    <h2 class="title tc">Отказ от ответственности</h2>
                </div>
                <div class="md_content tl">
                    <p><strong>В соответствии с действующим законодательством</strong>, Администрация отказывается от каких-либо заверений и гарантий, предоставление которых может иным образом подразумеваться, и отказывается от ответственности в отношении Сайта, Содержимого и их использования.</p>
                    <p>Ни при каких обстоятельствах Администрация Сайта не будет нести ответственности ни перед какой стороной за какой-либо прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется гиперссылка с нашего cайта, возникновение зависимости, снижения продуктивности, увольнения или прерывания трудовой активности, а равно и отчисления из учебных учреждений, за любую упущенную выгоду, приостановку хозяйственной деятельности, потерю программ или данных в Ваших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования Сайта, Содержимого или какого-либо связанного интернет-сайта, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в передаче, компьютерным вирусом или системным сбоем, даже если администрация будет явно поставлена в известность о возможности такого ущерба.</p>
                    <p>Пользователь соглашается с тем, что все возможные споры будут разрешаться по нормам права.</p>
                    <p>Пользователь соглашается с тем, что нормы и законы о защите прав потребителей не могут быть применимы к использованию им Сайта, поскольку он не оказывает возмездных услуг.</p>
                    <p>Используя данный Сайт, Вы выражаете свое согласие с «Отказом от ответственности» и установленными Правилами и принимаете всю ответственность, которая может быть на Вас возложена.</p>
                </div>
            </div>
        </div>

        <div class="md-modal md-effect-8 md_large" id="modal_politics_three">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><img src="img/close-btn.png" alt="Close"></a>
                </span>
                <div class="titlebox">
                    <h2 class="title tc">Согласие с рассылкой</h2>
                </div>
                <div class="md_content tl">
                    <p>Заполняя форму на нашем сайте — вы соглашаетесь с нашей политикой конфиденциальности. Также вы соглашаетесь с тем, что мы имеем право разглашать ваши личные данные в следующих случаях:</p>
                    <p><strong>1) С Вашего согласия:</strong>&nbsp;Во всех остальных случаях перед передачей информации о Вас третьим сторонам наша Компания обязуется получить Ваше явное согласие. Например, наша Компания может реализовывать совместное предложение или конкурс с третьей стороной, тогда мы попросим у Вас разрешение на совместное использование Вашей личной информации с третьей стороной.</p>
                    <p><strong>2) Компаниям, работающим от нашего лица:</strong>&nbsp;Мы сотрудничаем с другими компаниями, выполняющими от нашего лица функции бизнес поддержки, в связи с чем Ваша личная информация может быть частично раскрыта. Мы требуем, чтобы такие компании использовали информацию только в целях предоставления услуг по договору; им запрещается передавать данную информацию другим сторонам в ситуациях, отличных от случаев, когда это вызвано необходимостью предоставления оговоренных услуг. Примеры функций бизнес поддержки: выполнение заказов, реализация заявок, выдача призов и бонусов, проведение опросов среди клиентов и управление информационными системами. Мы также раскрываем обобщенную неперсонифицированную информацию при выборе поставщиков услуг.</p>
                    <p><strong>3) Дочерним и совместным предприятиям:</strong>&nbsp;Под дочерним или совместным предприятием понимается организация, не менее 50% долевого участия которой принадлежит Компании. При передаче Вашей информации партнеру по дочернему или совместному предприятию наша Компания требует не разглашать данную информацию другим сторонам в маркетинговых целях и не использовать Вашу информацию каким-либо путем, противоречащим Вашему выбору. Если Вы указали, что не хотите получать от нашей Компании какие-либо маркетинговые материалы, то мы не будем передавать Вашу информацию своим партнерам по дочерним и совместным предприятиям для маркетинговых целей.</p>
                    <p><strong>4) На совместно позиционируемых или партнерских страницах:</strong>&nbsp;Наша Компания может делиться информацией с компаниями-партнерами, вместе с которыми реализует специальные предложения и мероприятия по продвижению товара на совместно позиционируемых страницах нашего сайта. При запросе анкетных данных на таких страницах Вы получите предупреждение о передаче информации. Партнер использует любую предоставленную Вами информацию согласно собственному уведомлению о конфиденциальности, с которым Вы можете ознакомиться перед предоставлением информации о себе.</p>
                    <p><strong>5) При передаче контроля над предприятием:</strong>&nbsp;Наша Компания оставляет за собой право передавать Ваши анкетные данные в связи с полной или частичной продажей или трансфертом нашего предприятия или его активов. При продаже или трансферте бизнеса наша Компания предоставит Вам возможность отказаться от передачи информации о себе. В некоторых случаях это может означать, что новая организация не сможет далее предоставлять Вам услуги или продукты, ранее предоставляемые нашей Компанией.</p>
                    <p><strong>6)  При проведении мероприятий: </strong> Заполняя анкету участника на како-либо событие Компании, мы можем делиться Вашими данными с другими участниками. Это делается для удобства коммуникации между участниками мероприятия. Эти данные не будут переданы лицам, которые не являются участниками мероприятия, и которые не соответствуют пунктам в разделе «Согласие с рассылкой». </p>
                    <p><strong>7) Правоохранительным органам:</strong>&nbsp;Наша Компания может без Вашего на то согласия раскрывать персональную информацию третьим сторонам по любой из следующих причин: во избежание нарушений закона, нормативных правовых актов или постановлений суда; участие в правительственных расследованиях; помощь в предотвращении мошенничества; а также укрепление или защита прав Компании или ее дочерних предприятий.</p>
                    <p>Вся личная информация, которая передана Вами для регистрации на нашем сайте, может быть в любой момент изменена либо полностью удалена из нашей базы по Вашему запросу. Для этого Вам необходимо связаться с нами любым удобным для Вас способом, использую контактную информацию, размещенную в специальном разделе нашего сайта.</p>
                    <p>Если Вы захотите отказаться от получения писем нашей регулярной рассылки, вы можете это сделать в любой момент с помощью специальной ссылки, которая размещается в конце каждого письма.</p>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-4" id="modal_callback_ok">

            <div class="md-content">
                    <h2>Ваше сообщение успешно отправлено.</h2>
                    <div class="cb tc">
                        <a class="md-close btn flex" style="margin:0 auto;"><span>Вернуться на сайт</span></a>
                    </div>
                </div>
            </div>
            <a id="call_ok" class="md-trigger hidden" data-modal="modal_callback_ok"></a>
        <div class="md-overlay"></div>
      </div>
        <!-- All modals end -->



            <!--[if lt IE 9]>
            <script src="libs/html5shiv/es5-shim.min.js"></script>
            <script src="libs/html5shiv/html5shiv.min.js"></script>
            <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
            <script src="libs/respond/respond.min.js"></script>
            <![endif]-->

        <!--[if lt IE 9]>
        <script src="libs/html5shiv/es5-shim.min.js"></script>
        <script src="libs/html5shiv/html5shiv.min.js"></script>
        <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
        <script src="libs/respond/respond.min.js"></script>
        <![endif]-->

        <!-- Load Scripts Start -->
        <script>var scr = {"scripts":[
            {"src" : "js/libs.js", "async" : false},
            {"src" : "js/common.js", "async" : false}
            ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
        </script>
        <!-- Load Scripts End -->
    </div></body>
</html>
