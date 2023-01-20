<?php
session_start();

require "variables/general/Variables.php";

// default website language
if (!isset($_SESSION["lang"])) {
    $_SESSION["lang"] = "NL";
}
//

// available languages
if (isset($_POST["lang"])) {
    $_SESSION["lang"] = $_POST["lang"];
}
//

require "variables/languages/Lang-" . $_SESSION["lang"] . ".php";

// hide or show language buttons
if (isset($_POST["hideButton"])) {
    $hiddenButton = true;
    $showingButton = false;
} else {
    $hiddenButton = false;
    $showingButton = true;
}
//
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorum Ipsum</title>
    <link rel="icon" type="favicon" href="images/favicon_lorem.ico">
    <link href='https://css.gg/arrow-right-o.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body lang="<?= $_SESSION["lang"] ?>">
<div class="page">
    <section class="language-section">
        <form method="post" class="button-container <?php if ($hiddenButton === true) {
            echo 'hidden-section';
        } ?>" id="my-form">
            <input type="submit" name="lang" class="button <?php if ($_SESSION["lang"] == 'NL') {
                echo 'btn-active';
            } ?>" id="btnnl" value="NL">
            <input type="submit" name="lang" class="button <?php if ($_SESSION["lang"] == 'EN') {
                echo 'btn-active';
            } ?>" id="btnen" value="EN">
        </form>
        <form method="post" class="hide-button-form">
            <input type="submit" name="hideButton" class="hide-button <?php if ($hiddenButton === true) {
                echo 'hidden-section';
            } ?>" value="<?= $showingButtonTitle ?>">
            <input type="submit" name="showButton" class="hide-button <?php if ($showingButton === true) {
                echo 'hidden-section';
            } ?>" value="<?= $hiddenButtonTitle ?>">
        </form>
    </section>

    <div class="navbar-container" id="navbar-container">
        <nav class="navbar">
            <ul class="nav navbar-nav menu">
                <?php foreach ($navItems as $name => $link): ?>
                    <li class="nav-links menuItem <?php if ($name === "Homepage") {
                        echo "active";
                    } ?>">
                        <a href="<?= $link ?>"><?= $name ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="mobile-nav">
                <div class="hamburger" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
        </nav>
    </div>

    <div class="text-section-first">
        <div class="text-header">
            <h1 class="heading heading-first-half"><?= $discoverTitleFirst ?></h1>
            <h1 class="heading heading-second-half"><?= $discoverTitleSecond ?></h1>
        </div>
        <p class="text"><?= $discoverText ?></p>
    </div>

    <div class="logo-container">
        <img class="logo" src="<?= $logo ?>" alt="Lorem Ipsum logo">
    </div>

    <div class="img-gallery">
        <div class="grid-container">
            <?php if (isset($_GET["showMore"])): ?>
                <?php foreach ($productCards as $productCard => $productcard_value): ?>
                    <div class="img-grids">
                        <img class="img-grid"
                             src=<?= $productcard_value->getImage(); ?> alt=<?= $productcard_value->getName(); ?>>
                        <div class="overlay">
                            <ul>
                                <li class="product-link"><a
                                            href=<?= $productcard_value->getLink(); ?>><?= $productcard_value->getName(); ?>
                                        <i
                                                class=<?= $productcard_value->getIcon(); ?>></i></a></li>
                            </ul>
                        </div>
                        <div class="price-tag">
                            <span class="price-title"><?= $title; ?></span>
                            <span class="price"><?= $productcard_value->getPrice(); ?>,-</span>
                            <span class="price-triangle"></span>
                        </div>
                    </div>
                <?php endforeach; ?>

            <?php else: ?>
                <?php foreach ($productCards as $productCard => $productcard_value): ?>
                    <?php if ($productCard > 5) {
                        continue;
                    } ?>
                    <div class="img-grids">
                        <img class="img-grid"
                             src=<?= $productcard_value->getImage(); ?> alt=<?= $productcard_value->getName(); ?>>
                        <div class="overlay">
                            <ul>
                                <li class="product-link"><a
                                            href=<?= $productcard_value->getLink(); ?>><?= $productcard_value->getName(); ?>
                                        <i
                                                class=<?= $productcard_value->getIcon(); ?>></i></a></li>
                            </ul>
                        </div>
                        <div class="price-tag">
                            <span class="price-title"><?= $title; ?></span>
                            <span class="price"><?= $productcard_value->getPrice(); ?>,-</span>
                            <span class="price-triangle"></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <form method="get" class="grid-btn">
            <input type="submit" name="showMore" class="product-btn" value="<?= $productButton ?>">
        </form>
    </div>

    <div class="text-section-second">
        <h1 class="general-header"><?= $moreInformationTitle ?></h1>
        <p class="general-text"><?= $moreInformationText ?></p>
    </div>

    <div class="three-text-section">
        <div class="wauw-section">
            <h1 class="general-header"><?= $wowTitle ?></h1>
            <p class="general-text"><?= $wowText ?></p>
        </div>
        <div class="snelle-section">
            <h1 class="general-header"><?= $quickProductsTitle ?></h1>
            <p class="general-text middle-section"><?= $quickProductsText ?></p>
            <h1 class="general-header"><?= $ideasTitle ?></h1>
            <section class="general-text">
                <p class="test-text"><?= $ideasText . ' ' ?><a
                            href="<?= $link ?>"><?= $takeTestLink ?></a><?= ' ' . $takeTestText ?></p>
            </section>
        </div>
    </div>

    <div class="footer">
        <section class="footer-navigation">
            <?php foreach ($footerArray as $array => $array_value): ?>
                <div class="footer-section">
                    <p class="footer-titles"><?= $array ?></p>
                    <ul class="footer_ul">
                        <?php foreach ($array_value as $arrayItem => $arrayItem_value): ?>
                            <li class="footer-links">
                                <a href="<?= $arrayItem_value ?>"><?= $arrayItem ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </section>
        <section class="footer-logo-container">
            <img class="footer-logo" src="<?= $logo ?>" alt="Lorem Ipsum logo">
        </section>
    </div>

    <section class="copyright-section">
        <p class="copyright copyright-start"><?=$copyright?></p>
        <p class="copyright copyright-end"><?=$allRightsText?></p>
    </section>

    <section class="bottom-page-section">
        <ul class="bottom-page">
            <?php foreach ($bottomPageLinks as $name => $link): ?>
                <li class="bottom-page-link">
                    <a href="<?= $link ?>"><?= $name ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <script src="js/myscript.js"></script>
</div>
</body>

</html>