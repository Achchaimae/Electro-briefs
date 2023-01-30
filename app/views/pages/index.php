<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link href="<?= URLROOT; ?>/css/mystyle.css" rel="stylesheet">
    <!-- link tailwind css -->
    <link href="<?= URLROOT; ?>/dist/output.css" rel="stylesheet">
    <!-- link to font awesome -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
    <title>home</title>
</head>

<body>
    <section class="hero">
        <div class="flex flex-row gap-4 items-center">
            <div class="logo ">
                <a href="#"><img src="<?= URLROOT; ?>/img/mobile logo.png" alt="logo"></a>
            </div>
            <div class="flex flex-row gap-4">
                <div>
                    <b><a href="View/allproduct.php">categorie</a></b>
                </div>
                <div>
                    <b><a href="View/Contact.php">Contact Us</a></b>
                </div>
                <div>
                    <b><a href="View/AboutUs.php">About Us</a></b>
                </div>
            </div>

        </div>
        <div class="icons">
            <div class="icon-item">
                <a href="<?php echo URLROOT; ?>/login.php">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>
            <div>
                <a href="View/cart.php">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
    </section>
    </section>
    <section class="news">
        <div class="mini-sold">
            <div class="bg-gray-700 rounded w-36 h-36">
                <img src="<?= URLROOT; ?>/img/annonce2.png" alt="annonce">
                <p class="bg-gray-800 text-white text-center rounded">JBL Tour One </p>
            </div>
            <div class=" bg-teal-500 rounded w-36 h-36">
                <img src="<?= URLROOT; ?>/img/annonce3.png" alt="annonce">
                <p class="bg-teal-900 text-white text-center rounded">boat Rockerz 255 </p>

            </div>
        </div>
        <div class="big-sold">
            <img src="<?= URLROOT; ?>/img/annonce.png" alt="annonce">
            <div>
                <p>LG GRAM I7 </p><br>
                <p>12th Gen Core i7 / Win11 / Microsoft 365</p><br>
                <p>Starting at 499 $</p><br>
                <a href="#" class="bg-green-500 p-2 rounded text-white">SHOP NOW</a>
            </div>
        </div>
    </section>
    <section>
        <div class="gide">
            <div class="title m-2">
                <p>Today's deals</p>
            </div>
            <div class="indicator m-2">
                <a href="View/allproduct.php">View all</a>
            </div>
        </div>

        <div class="new-deals">
            <div class="deals">
                <div class="deal-comp">
                    <img src="<?= URLROOT; ?>/img/deal1.png" alt="deal 1">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <div class="deal-price">
                        <p>259 $</p>
                        <p><del>399 $</del></p>
                    </div>
                </div>
            </div>
            <div class="deals">
                <div class="deal-comp">
                    <img src="<?= URLROOT; ?>/img/cameraDeal.png" alt="deal 1">
                    <p>Sony Alpha ILCE 6600M 24.2 MP Mirrorless Digital SLR Camera with 18-135 mm Zoom Lens</p>
                    <div class="deal-price">
                        <p>259 $</p>
                        <p><del>399 $</del></p>
                    </div>
                    <div class="deals-sides">
                        <div class="sides">
                            <img src="<?= URLROOT; ?>/img/camera3.png" alt="camera deal">
                        </div>
                        <div class="sides">
                            <img src="<?= URLROOT; ?>/img/camera4.png" alt="camera deal">
                        </div>
                        <div class="sides">
                            <img src="<?= URLROOT; ?>/img/camera2.png" alt="camera deal">
                        </div>
                    </div>
                </div>
            </div>
            <div class="deals">
                <div class="deal-comp">
                    <img src="<?= URLROOT; ?>/img/tvdeal.png" alt="deal 1" style="width: 9rem;">
                    <p>OnePlus 80 cm (32 inches) Y Series HD Ready LED Smart Android TV 32Y1</p>
                    <div class="deal-price">
                        <p>399 $</p>
                        <p><del>499 $</del></p>
                    </div>
                    <div class="deals-sides">
                        <div class="sides">
                            <img src="<?= URLROOT; ?>/img/tvdeal2.png" alt="camera deal">
                        </div>
                        <div class="sides">
                            <img src="<?= URLROOT; ?>/img/tvdeal3.png" alt="camera deal">
                        </div>
                        <div class="sides">
                            <img src="<?= URLROOT; ?>/img/remote.png" alt="camera deal">
                        </div>
                    </div>
                </div>
            </div>
            <div class="deals">
                <div class="deal-comp">
                    <img src="<?= URLROOT; ?>/img/laptopdeal.png" alt="deal 1">
                    <p>Lenovo Legion 5 11th Gen Intel Core i7 15.6"(39.62cm) FHD IPS Gaming Laptop</p>
                    <div class="deal-price">
                        <p>599 $</p>
                        <p><del>799 $</del></p>
                    </div>
                    <div class="deals-sides">
                        <div class="sides">
                            <img src="<?= URLROOT; ?>/img/pcdeal1.png" alt="camera deal">
                        </div>
                        <div class="sides">
                            <img src="<?= URLROOT; ?>/img/pcdeal2.png" alt="camera deal">
                        </div>
                        <div class="sides">
                            <img src="<?= URLROOT; ?>/img/pcdeal3.png" alt="camera deal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="headset">
            <div class="gide">
                <div class="title m-2">
                    <p>headphones</p>
                </div>
                <div class="indicator m-2">
                    <a href="View/allproduct.php">View all</a>
                </div>
            </div>
            <div class="headset-cat">
                <div class="headset-comp">
                    <img src="<?= URLROOT; ?>/img/headset1.png" alt="headset">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>559 $</p>
                </div>
                <div class="headset-comp">
                    <img src="<?= URLROOT; ?>/img/headset2.png" alt="headset">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>59 $</p>
                </div>
                <div class="headset-comp">
                    <img src="<?= URLROOT; ?>/img/headset3.png" alt="headset">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>259 $</p>
                </div>
                <div class="headset-comp">
                    <img src="<?= URLROOT; ?>/img/headset4.png" alt="headset">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>159 $</p>
                </div>
            </div>
        </div>
        <div class="headset">
            <div class="gide">
                <div class="title m-2">
                    <p>Accessories</p>
                </div>
                <div class="indicator m-2">
                    <a href="allproduct.php">View all</a>
                </div>
            </div>
            <div class="headset-cat">
                <div class="headset-comp">
                    <img src="<?= URLROOT; ?>/img/accessorie1.png" alt="accessorie">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>559 $</p>
                </div>
                <div class="headset-comp">
                    <img src="<?= URLROOT; ?>/img/accessorie2.png" alt="accessorie">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>59 $</p>
                </div>
                <div class="headset-comp">
                    <img src="<?= URLROOT; ?>/img/accessorie3.png" alt="accessorie">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>259 $</p>
                </div>
                <div class="headset-comp">
                    <img src="<?= URLROOT; ?>/img/accessorie4.png" alt="accessorie">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>159 $</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <footer class="footer">
            <div class="footer__addr">
                <h1 class="footer__logo">
                    <img src="<?= URLROOT; ?>/img/mobile logo.png" alt="">
                </h1>

                <h2><b>Contact</b></h2>

                <address>
                    5534 Somewhere In. The World 22193-10212<br>

                    <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
                </address>
            </div>

            <ul class="footer__nav">
                <li class="nav__item">
                    <h2 class="nav__title"><b>Know Us</b></h2>

                    <ul class="nav__ul">
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Press
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Careers
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Elexo Earn
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav__item nav__item--extra">
                    <h2 class="nav__title"><b>Policy</b></h2>

                    <ul class="nav__ul nav__ul--extra">
                        <li>
                            <a href="#">
                                Security
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Privacy
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Term of use
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Return policy
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Complience
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav__item">
                    <h2 class="nav__title"><b>Social</b></h2>

                    <ul class="nav__ul">
                        <li>
                            <a href="#">Facebbok</a>
                        </li>
                        <li>
                            <a href="#">Instagram</a>
                        </li>
                        <li>
                            <a href="#">Twitter</a>
                        </li>
                        <li>
                            <a href="#">Youtube</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="legal">
                <p>&copy; 2019 Something. All rights reserved.</p>

                <div class="legal__links">
                    <span>Made with <span class="heart">♥</span> by Achchcaimae Khalaf</span>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>