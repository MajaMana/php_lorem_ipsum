<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorum Ipsum</title>
    <link rel="icon" type="favicon" href="images/favicon_lorem.ico">
    <link href='https://css.gg/arrow-right-o.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="page">
        <div class="button-container">
            <label class="button" id="btnnl">
                <input type="checkbox" checked="checked">
                <span class="checkmark">NL</span>
            </label>
            <label class="button" id="btnen">
                <input type="checkbox">
                <span class="checkmark">EN</span>
            </label>
        </div>
git
        <div class="navbar-container" id="navbar-container">
            <nav class="navbar">
                <ul class="nav navbar-nav menu">
                    <li class="active nav-links menuItem">
                        <a href="/php_exercises/php_lorem_ipsum/index.php">Homepage</a>
                    </li>
                    <li class="nav-links menuItem">
                        <a href="https://www.maxserv.com/">Over ons</a>
                    </li>
                    <li class="nav-links menuItem">
                        <a href="https://www.maxserv.com/">Producten</a>
                    </li>
                    <li class="nav-links menuItem">
                        <a href="https://www.maxserv.com/">Contact</a>
                    </li>
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
                <h1 class="heading heading-first-half">Ontdek al</h1>
                <h1 class="heading heading-second-half">onze producten</h1>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores odit et dignissimos
                aliquam sed ut praesentium facere sapiente. Excepturi sequi dolores hic doloribus ducimus possimus
                voluptas labore! Ducimus corrupti omnis quod id iusto quibusdam, officiis voluptatibus deserunt quos
                deleniti reprehenderit consequuntur sequi laborum delectus provident unde adipisci maxime asperiores
                esse. </p>
        </div>

        <div class="logo-container">
            <img class="logo" src="images/lorem-logo.png"  alt="Lorem Ipsum logo">
        </div>

        <div class="img-gallery">
            <div class="grid-container">
                <div class="img-grids">
                    <img class="img-grid" src="images/BlackPastel.jpeg" alt="Black Pastel Ball Python">
                    <div class="overlay">
                        <ul>
                            <li class="product-link"><a href="https://www.maxserv.com/">Black Pastel<i
                                        class="gg-arrow-right-o"></i></a></li>
                        </ul>
                    </div>
                    <div class="price-tag">
                        <span class="price-title">PRIJS</span>
                        <span class="price">625,-</span>
                        <span class="price-triangle"></span>
                    </div>
                </div>
                <div class="img-grids">
                    <img class="img-grid" src="images/BEL.jpeg" alt="Blue Eyed Leucistic Ball Python">
                    <div class="overlay overlay-flex-second">
                        <ul>
                            <li class="product-link"><a href="https://www.maxserv.com/">Blue Eyed Leucistic<i
                                        class="gg-arrow-right-o"></i></a></li>
                        </ul>
                    </div>
                    <div class="price-tag">
                        <span class="price-title">PRIJS</span>
                        <span class="price">800,-</span>
                        <span class="price-triangle"></span>
                    </div>
                </div>
                <div class="img-grids">
                    <img class="img-grid" src="images/LightningPied.jpeg" alt="Lightning Pied Ball Python">
                    <div class="overlay overlay-middle overlay-flex-third">
                        <ul>
                            <li class="product-link"><a href="https://www.maxserv.com/">Lightning Pied<i
                                        class="gg-arrow-right-o"></i></a></li>
                        </ul>
                    </div>
                    <div class="price-tag">
                        <span class="price-title">PRIJS</span>
                        <span class="price">950,-</span>
                        <span class="price-triangle"></span>
                    </div>
                </div>
                <div class="img-grids">
                    <img class="img-grid img-banana" src="images/PastelBanana.jpeg" alt="Pastel Banana Ball Python">
                    <div class="overlay overlay-middle overlay-flex-fourth">
                        <ul>
                            <li class="product-link"><a href="https://www.maxserv.com/">Pastel Banana<i
                                        class="gg-arrow-right-o"></i></a></li>
                        </ul>
                    </div>
                    <div class="price-tag">
                        <span class="price-title">PRIJS</span>
                        <span class="price">425,-</span>
                        <span class="price-triangle"></span>
                    </div>
                </div>
                <div class="img-grids">
                    <img class="img-grid" src="images/PastelVPIAxanthic.jpeg" alt="Pastel VPI Axanthic Ball Python">
                    <div class="overlay overlay-bottom overlay-flex-fifth">
                        <ul>
                            <li class="product-link"><a href="https://www.maxserv.com/">Pastel VPI Axanthic<i
                                        class="gg-arrow-right-o"></i></a></li>
                        </ul>
                    </div>
                    <div class="price-tag">
                        <span class="price-title">PRIJS</span>
                        <span class="price">775,-</span>
                        <span class="price-triangle"></span>
                    </div>
                </div>
                <div class="img-grids">
                    <img class="img-grid" src="images/SuperChocolatePinstripe.jpeg"
                        alt="Super Chocolate Pinstripe Ball Python">
                    <div class="overlay overlay-bottom overlay-flex-sixth">
                        <ul>
                            <li class="product-link"><a href="https://www.maxserv.com/">Super Chocolate Pinstripe<i
                                        class="gg-arrow-right-o"></i></a></li>
                        </ul>
                    </div>
                    <div class="price-tag">
                        <span class="price-title">PRIJS</span>
                        <span class="price">545,-</span>
                        <span class="price-triangle"></span>
                    </div>
                </div>
            </div>

            <div class="grid-btn">
                <button class="product-btn">MEER PRODUCTEN TONEN</button>
            </div>
        </div>

        <div class="text-section-second">
            <h1 class="general-header">Meer informatie nodig?</h1>
            <p class="general-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, excepturi. Quod amet
                aut fuga veritatis vitae labore molestias atque ipsam cupiditate exercitationem doloribus velit dolore
                dignissimos, impedit voluptate voluptas ut inventore ullam dolores dolorum molestiae odio vero numquam
                laborum. Eligendi aut, rerum commodi eos animi veritatis consequuntur. Voluptates quas quam numquam
                harum, vel, sint doloremque, in neque dolor laborum dicta ex! Sit atque, consequatur rerum dolore nulla
                deserunt hic aperiam labore ullam modi nam molestiae cumque qui, doloribus sunt quam, fugiat optio!
                Officia quis reprehenderit fuga laboriosam vero et libero totam. Libero mollitia vero reprehenderit
                optio voluptas, quia nisi recusandae.</p>
        </div>

        <div class="three-text-section">
            <div class="wauw-section">
                <h1 class="general-header">Het WAUW effect</h1>
                <p class="general-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis cupiditate
                    doloremque saepe facere velit vitae eius commodi illo ad labore. Sed, inventore velit! Facilis saepe
                    quod ratione provident officia iste, libero placeat pariatur earum quisquam, quae cupiditate
                    accusamus laudantium, perspiciatis fugit officiis nihil voluptates vero mollitia perferendis non.
                    In, veritatis.</p>
            </div>
            <div class="snelle-section">
                <h1 class="general-header">Snelle en kwaliteitsvolle producten</h1>
                <p class="general-text middle-section">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis,
                    blanditiis nemo
                    dolorum culpa velit consequatur repudiandae tempora id delectus officia veniam hic. Magni est illum
                    dignissimos tempora nostrum odit amet voluptatum neque odio! Minima amet vero error dicta accusamus
                    impedit, illo quam. In deserunt repellendus quas pariatur nulla. Maxime, unde.</p>
                <h1 class="general-header">Op zoek naar ideeën voor uw website?</h1>
                <p class="general-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident fugiat
                    similique neque dolor doloribus? Nostrum voluptate accusantium reprehenderit? Eum temporibus
                    asperiores provident corporis maxime consectetur vitae ad animi, molestiae sunt.</p>
            </div>
        </div>

        <div class="footer">
            <div class="inspiratie-section">
                <p class="footer-titles">Inspiratie</p>
                <ul class="footer_ul">
                    <li class="footer-links">
                        <a href="https://www.maxserv.com/">Medium</a>
                    </li>
                    <li class="footer-links">
                        <a href="https://www.maxserv.com/">Designerdepot</a>
                    </li>
                    <li class="footer-links">
                        <a href="https://www.maxserv.com/">Portfolio</a>
                    </li>
                </ul>
            </div>
            <div class="service-section">
                <p class="footer-titles">Service</p>
                <ul class="footer_ul">
                    <li class="footer-links">
                        <a href="https://www.maxserv.com/">Over ons</a>
                    </li>
                    <li class="footer-links">
                        <a href="https://www.maxserv.com/">Contact</a>
                    </li>
                    <li class="footer-links">
                        <a href="https://www.maxserv.com/">Servicepunten</a>
                </ul>
            </div>
            <div class="informatie-section">
                <p class="footer-titles">Informatie</p>
                <ul class="footer_ul">
                    <li class="footer-links">
                        <a href="https://www.maxserv.com/">Github</a>
                    </li>
                    <li class="footer-links">
                        <a href="https://www.maxserv.com/">Atlassian</a>
                    </li>
                    <li class="footer-links">
                        <a href="https://www.maxserv.com/">Slack</a>
                    </li>
                </ul>
            </div>
        </div>

        <script>
            const menu = document.querySelector(".menu");
            const menuItems = document.querySelectorAll(".menuItem");
            const hamburger = document.querySelector(".hamburger");

            function toggleMenu() {
                if (menu.classList.contains("showMenu")) {
                    menu.classList.remove("showMenu");
                    menu.style.display = "none";
                } else {
                    menu.classList.add("showMenu");
                    menu.style.display = "flex";
                }
            }

            hamburger.addEventListener("click", toggleMenu);
            function myFunction(x) {
                x.classList.toggle("change");
            }
        </script>
    </div>
</body>

</html>