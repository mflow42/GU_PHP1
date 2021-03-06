<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Singlepage</title>
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/cart.js"></script>
    <script src="js/product.js"></script>
    <script src="js/comments.js"></script>
    <script src="js/comment.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/script.min.js"></script>
</head>

<body>
<div class="mob-header">
    <div class="mob-header-block">
        <div class="mob-header-block__wrapper mob-header-block__wrapper_dark mob-header-block__wrapper_hover-gray">
            <img class="" src="img/icon-brand-mobile.png" width="44" height="37">
        </div>
        <div class="mob-header-block__wrapper mob-header-block__wrapper_hover-gray">
            <img class="mob-header-block__search" src="img/Forma5.png" width="26" height="27">
        </div>
    </div>
    <div class="mob-header-block">
        <div class="mob-header-block__wrapper mob-header-block__menu">
            <i class="fas fa-bars"></i>
        </div>
        <div class="mob-header-block__wrapper">
            <img src="img/Forma4.png" alt="">
        </div>
        <div class="mob-header-block__wrapper mob-header-block__wrapper_dark mob-header-block__wrapper_cart">
            <div id="cart-mobile" class="cart">
                <a href="#" class="cart__icon">
                    <span class="cart__icon_badge">5</span>
                </a>
            </div>
        </div>
    </div>
    <nav class="mob-navbar">
        <ul class="navbar__ul">
            <li class="navbar__li">
                <a href="index.html" class="navbar__item">home</a>
            </li>
            <li class="navbar__li">
                <a href="#" class="navbar__item">man</a>
            </li>
            <li class="navbar__li">
                <a href="checkout.html" class="navbar__item">woman</a>
            </li>
            <li class="navbar__li">
                <a href="#" class="navbar__item">kids</a>
            </li>
            <li class="navbar__li">
                <a href="#" class="navbar__item">accessories</a>
            </li>
            <li class="navbar__li">
                <a href="#" class="navbar__item">featured</a>
            </li>
            <li class="navbar__li">
                <a href="#" class="navbar__item">hot deals</a>
            </li>
        </ul>
    </nav>
</div>

<header class="header">
    <div class="header-bar">
        <div class="header-bar-first">
            <div class="logo">
                <a href="index.html" class="logo__link">
                    <img src="img/icon-brand.jpg" alt="icon-brand" class="logo__img">
                    <p class="logo__name">bran
                        <span class="logo__d">d</span>
                    </p>
                </a>
            </div>
            <div class="search-form">
                <button class="search-form__browse">Browse&nbsp;&nbsp;
                    <i class="fas fa-caret-down"></i>
                </button>
                <input type="text" name="search-form__input" id="search-form__input" class="search-form__input"
                       placeholder="Search for item...">
                <button class="search-form__submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <div class="header-bar-second">
            <div id="cart" class="cart">
                <a href="#" class="cart__icon"></a>
                <span class="cart__icon_badge">5</span>
            </div>
            <button class="my-acc-btn">my account&nbsp;&nbsp;
                <i class="fas fa-caret-down"></i>
            </button>
        </div>
    </div>
    <nav class="navbar">
        <ul class="navbar__ul">
            <li class="navbar__li">
                <a href="index.html" class="navbar__item">home</a>
            </li>
            <li class="navbar__li">
                <a href="#" class="navbar__item">man</a>
            </li>
            <li class="navbar__li">
                <a href="checkout.html" class="navbar__item">woman</a>
            </li>
            <li class="navbar__li">
                <a href="#" class="navbar__item">kids</a>
            </li>
            <li class="navbar__li">
                <a href="#" class="navbar__item">accessories</a>
            </li>
            <li class="navbar__li">
                <a href="#" class="navbar__item">featured</a>
            </li>
            <li class="navbar__li">
                <a href="#" class="navbar__item">hot deals</a>
            </li>
        </ul>
    </nav>
</header>

<main class="main">
    <div class="filling_pink">
        <div class="heading">
            <h1 class="heading__title">new arrivals</h1>
            <div class="breadcrumbs">
                <a href="index.html" class="breadcrumbs__a">home</a> &nbsp;/&nbsp;
                <a href="#" class="breadcrumbs__a">men</a> &nbsp;/&nbsp;
                <a href="#" class="breadcrumbs__a">
                    <span class="breadcrumbs_active">new arrivals</span>
                </a>
            </div>
        </div>
    </div>

    <section id="carousel" class="carousel"></section>

    <section class="product-info">
        <div class="product-info__container">
            <div class="product-info__title_wrapper">
                <span class="product-info__title">women collection</span>
                <h1 class="product-info__header">moschino cheap and chic</h1>
            </div>
            <p class="product-info__text">Compellingly actualize fully researched before proactive outsourcing.
                Progressively syndicate collaborative architectures
                before cutting-edge services. Completey visualize parallel core competencies rather than exceptional
                portals.</p>
            <div class="product-info__wrapper">
                <p class="product-info__material">material:
                    <span class="material__text">cotton</span>
                </p>
                <p class="product-info__designer">designer:
                    <span class="designer__text">binburhan</span>
                </p>
            </div>
            <div class="product-info__price">
                <span class="currency">$</span><span class="amount">561</span>
            </div>
        </div>
        <form action="" class="product-info__form">
            <div class="product-form__selection_wrapper">
                <div class="product-form__selection">
                    <label for="color" class="product-info__label product-info__label_first">choose color
                        <div class="color__chosen"></div>
                        <select name="color" id="color" class="product-info__choose-color">
                            <option value="red" class="choose-color">red</option>
                            <option value="green" class="choose-color">green</option>
                            <option value="blue" class="choose-color">blue</option>
                        </select>
                    </label>
                    <label for="size" class="product-info__label">choose size
                        <select name="size" id="size" class="product-info__choose-size">
                            <option value="xs" class="choose-size">xs</option>
                            <option value="s" class="choose-size">s</option>
                            <option value="m" class="choose-size">m</option>
                            <option value="l" class="choose-size">l</option>
                            <option value="xl" class="choose-size">xl</option>
                            <option value="xxl" class="choose-size">xxl</option>
                            <option value="xxxl" class="choose-size">xxxl</option>
                        </select>
                    </label>
                    <label for="number" class="product-info__label">quantity
                        <input type="number" name="number" id="number" class="product-info__choose-qty" placeholder="1">
                    </label>
                </div>
            </div>
            <button type="submit" class="product-info__submit">
                <i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;add to cart
            </button>
        </form>
    </section>
    <?php
    include_once "render.php";
    include_once 'kint.php';

    $conn = mysqli_connect("localhost", "root", "", "php1-lesson6");


    getConnection();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $content = $_POST['content'];
        execute("INSERT INTO comments (name, content) VALUES ('{$name}', '{$content}')");
    }

    $comments = getComments($conn);
    $goods = getGoods($conn);
    ?>

    <section id="comments" class="comments"></section>

    <?php include "comments.php"; ?>

    <br><br>
    <form class="comments" action="" method="post">
        Имя: <input type="text" name="name" id=""/>
        <br>
        Комментарий:
        <br>
        <textarea name="content" id="" cols="60" rows="10"></textarea>
        <br>
        <input type="submit" value="Отправить">
    </form>

    <section class="items items-one-row">
        <h1 class="see-also">you may also like</h1>
        <?php include "goods.php"; ?>
        <div class="product" data-id="0011" data-imgPath="img/Layer44.jpg" data-name="blaze leggins" data-rating="5"
             data-price="51">
            <div class="product__buttons">
                <div class="product__add">
                    <i class="fas fa-shopping-cart color-white"></i>&nbsp;&nbsp;Add to cart
                </div>
                <div class="product__browse">
                    <a href="singlepage.php" class="product__link">Browse more</a>
                </div>
            </div>
            <img src="img/Layer44.jpg" alt="mango people t-shirt" class="product__image">
            <h2 class="product__name">blaze leggins</h2>
            <p class="product__price">$ 51.00</p>
        </div>
        <div class="product" data-id="0012" data-imgPath="img/Layer45.jpg" data-name="alexa sweater" data-rating="5"
             data-price="52">
            <div class="product__buttons">
                <div class="product__add">
                    <i class="fas fa-shopping-cart color-white"></i>&nbsp;&nbsp;Add to cart
                </div>
                <div class="product__browse">
                    <a href="singlepage.php" class="product__link">Browse more</a>
                </div>
            </div>
            <img src="img/Layer45.jpg" alt="mango people t-shirt" class="product__image">
            <h2 class="product__name">alexa sweater</h2>
            <p class="product__price">$ 52.00</p>
        </div>
        <div class="product" data-id="0013" data-imgPath="img/Layer46.jpg" data-name="agnes top" data-rating="3"
             data-price="53">
            <div class="product__buttons">
                <div class="product__add">
                    <i class="fas fa-shopping-cart color-white"></i>&nbsp;&nbsp;Add to cart
                </div>
                <div class="product__browse">
                    <a href="singlepage.php" class="product__link">Browse more</a>
                </div>
            </div>
            <img src="img/Layer46.jpg" alt="mango people t-shirt" class="product__image">
            <h2 class="product__name">agnes top</h2>
            <p class="product__price">$ 53.00</p>
        </div>
        <div class="product" data-id="0014" data-imgPath="img/Layer47.jpg" data-name="sylva sweater" data-rating="4"
             data-price="54">
            <div class="product__buttons">
                <div class="product__add">
                    <i class="fas fa-shopping-cart color-white"></i>&nbsp;&nbsp;Add to cart
                </div>
                <div class="product__browse">
                    <a href="singlepage.php" class="product__link">Browse more</a>
                </div>
            </div>
            <img src="img/Layer47.jpg" alt="mango people t-shirt" class="product__image">
            <h2 class="product__name">sylva sweater</h2>
            <p class="product__price">$ 54.00</p>
        </div>
    </section>

    <aside class="subscribe">
        <div class="subscribe-brands">
            <a href="#" class="subscribe-brands__link">
                <img src="img/Layer11.png" alt="" class="subscribe-brands__img">
            </a>
            <a href="#" class="subscribe-brands__link">
                <img src="img/Layer12.png" alt="" class="subscribe-brands__img">
            </a>
            <a href="#" class="subscribe-brands__link">
                <img src="img/Layer13.png" alt="" class="subscribe-brands__img">
            </a>
            <a href="#" class="subscribe-brands__link">
                <img src="img/Layer14.png" alt="" class="subscribe-brands__img">
            </a>
        </div>
        <div class="subscribe-slider">
            <div class="quote-block">
                <img class="quote-block__img" src="img/Layer100.png" alt="">
                <div class="quote-block__quote">"Vestibulum quis portitor dui! Quisque viverra nunc mi, a pulvinar purus
                    condimentum a. Aliquam condimentum mattis
                    neque sed pretium"
                </div>
                <div class="quote-block__name">bin burhan</div>
                <div class="quote-block__address">dhaka, bd</div>
                <ul class="subscribe-slider__list">
                    <li class="subscribe-slider__item"></li>
                    <li class="subscribe-slider__item"></li>
                    <li class="subscribe-slider__item"></li>
                </ul>
            </div>
        </div>
        <form action="#" method="get" class="subscribe__form">
            <p class="subscribe__info-title">subscribe</p>
            <p class="subscribe__info-text">for our newsletter and promotion</p>
            <div class="subscribe__input-wrapper">
                <input class="subscribe__input" type="email" placeholder="Enter Your Email" name="subscribe-input"
                       id="subscribe-input">
                <input class="subscribe__submit" type="submit" value="Subscribe">
            </div>
        </form>
    </aside>
</main>

<footer class="footer">
    <div class="line about">
        <div class="about__brand">
            <div class="logo">
                <a href="index.html" class="logo__link">
                    <img src="img/icon-brand.png" alt="icon-brand" class="logo__img">
                    <p class="logo__name">bran
                        <span class="logo__d">d</span>
                    </p>
                </a>
            </div>
            <p class="about__text">Objectively transition extensive data rather that cross functional solutions.
                Monotonectally syndycate multidisciplinary
                materials before go&nbsp;forward benefits. Intrinsicly syndicate an&nbsp;expanded array of&nbsp;processes
                and
                cross-unit partnerships.
            </p>
            <p class="about__text">Efficiently plagiarize 24/365 action items and focused informediaries.
                Distinctively seize superior initiatives
                for wireless technologies. Dynamically optimize.</p>
        </div>
        <ul class="sitemap-list">
            <li class="sitemap-list__item">
                <a href="#" class="sitemap-list__a-heading">company</a>
                <ul class="sitemap-list__item sitemap-list__column">
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">home</a>
                    </li>
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">shop</a>
                    </li>
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">about</a>
                    </li>
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">how it works</a>
                    </li>
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">contact</a>
                    </li>
                </ul>
            </li>
            <li class="sitemap-list__item">
                <a href="#" class="sitemap-list__a-heading">information</a>
                <ul class="sitemap-list__item sitemap-list__column">
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">terms &amp; conditions</a>
                    </li>
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">privacy policy</a>
                    </li>
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">how to buy</a>
                    </li>
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">how to sell</a>
                    </li>
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">promotion</a>
                    </li>
                </ul>
            </li>
            <li class="sitemap-list__item">
                <a href="#" class="sitemap-list__a-heading">shop category</a>
                <ul class="sitemap-list__item sitemap-list__column">
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">men</a>
                    </li>
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">women</a>
                    </li>
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">child</a>
                    </li>
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">apparel</a>
                    </li>
                    <li class="sitemap-list__item sitemap-list__row">
                        <a href="#" class="sitemap-list__a">browse all</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="footer__wrapper">
        <div class="footer__copy-and-icons">
            <div class="footer__text">&copy; 2018 Brand All Rights Reserved.</div>
            <ul class="footer__social-icons_ul">
                <li class="footer__social-icons_li">
                    <div class="footer__icon-wrapper">
                        <a href="#" class="footer__icon-cube">
                  <span class="footer__social-icon-side1">
                    <i class="fab fa-facebook-f"></i>
                  </span>
                            <span class="footer__social-icon-side2">
                    <i class="fab fa-facebook-f"></i>
                  </span>
                            <span class="footer__social-icon-side3">
                    <i class="fab fa-facebook-f"></i>
                  </span>
                            <span class="footer__social-icon-side4">
                    <i class="fab fa-facebook-f"></i>
                  </span>
                            <span class="footer__social-icon-side5">
                    <i class="fab fa-facebook-f"></i>
                  </span>
                            <span class="footer__social-icon-side6">
                    <i class="fab fa-facebook-f"></i>
                  </span>
                        </a>
                    </div>
                </li>
                <li class="footer__social-icons_li">
                    <div class="footer__icon-wrapper">
                        <a href="#" class="footer__icon-cube">
                  <span class="footer__social-icon-side1">
                    <i class="fab fab fa-twitter"></i>
                  </span>
                            <span class="footer__social-icon-side2">
                    <i class="fab fab fa-twitter"></i>
                  </span>
                            <span class="footer__social-icon-side3">
                    <i class="fab fab fa-twitter"></i>
                  </span>
                            <span class="footer__social-icon-side4">
                    <i class="fab fab fa-twitter"></i>
                  </span>
                            <span class="footer__social-icon-side5">
                    <i class="fab fab fa-twitter"></i>
                  </span>
                            <span class="footer__social-icon-side6">
                    <i class="fab fab fa-twitter"></i>
                  </span>
                        </a>
                    </div>
                </li>
                <li class="footer__social-icons_li">
                    <div class="footer__icon-wrapper">
                        <a href="#" class="footer__icon-cube">
                  <span class="footer__social-icon-side1">
                    <i class="fab fa-linkedin-in"></i>
                  </span>
                            <span class="footer__social-icon-side2">
                    <i class="fab fa-linkedin-in"></i>
                  </span>
                            <span class="footer__social-icon-side3">
                    <i class="fab fa-linkedin-in"></i>
                  </span>
                            <span class="footer__social-icon-side4">
                    <i class="fab fa-linkedin-in"></i>
                  </span>
                            <span class="footer__social-icon-side5">
                    <i class="fab fa-linkedin-in"></i>
                  </span>
                            <span class="footer__social-icon-side6">
                    <i class="fab fa-linkedin-in"></i>
                  </span>
                        </a>
                    </div>
                </li>
                <li class="footer__social-icons_li">
                    <div class="footer__icon-wrapper">
                        <a href="#" class="footer__icon-cube">
                  <span class="footer__social-icon-side1">
                    <i class="fab fa-pinterest-p"></i>
                  </span>
                            <span class="footer__social-icon-side2">
                    <i class="fab fa-pinterest-p"></i>
                  </span>
                            <span class="footer__social-icon-side3">
                    <i class="fab fa-pinterest-p"></i>
                  </span>
                            <span class="footer__social-icon-side4">
                    <i class="fab fa-pinterest-p"></i>
                  </span>
                            <span class="footer__social-icon-side5">
                    <i class="fab fa-pinterest-p"></i>
                  </span>
                            <span class="footer__social-icon-side6">
                    <i class="fab fa-pinterest-p"></i>
                  </span>
                        </a>
                    </div>
                </li>
                <li class="footer__social-icons_li">
                    <div class="footer__icon-wrapper">
                        <a href="#" class="footer__icon-cube">
                  <span class="footer__social-icon-side1">
                    <i class="fab fa-google-plus-g"></i>
                  </span>
                            <span class="footer__social-icon-side2">
                    <i class="fab fa-google-plus-g"></i>
                  </span>
                            <span class="footer__social-icon-side3">
                    <i class="fab fa-google-plus-g"></i>
                  </span>
                            <span class="footer__social-icon-side4">
                    <i class="fab fa-google-plus-g"></i>
                  </span>
                            <span class="footer__social-icon-side5">
                    <i class="fab fa-google-plus-g"></i>
                  </span>
                            <span class="footer__social-icon-side6">
                    <i class="fab fa-google-plus-g"></i>
                  </span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</footer>

</body>