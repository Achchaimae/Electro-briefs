<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/cart.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link href="<?= URLROOT; ?>/css/mystyle.css" rel="stylesheet">
    <!-- link tailwind css -->
    <link href="<?= URLROOT; ?>/dist/output.css" rel="stylesheet">

    <!-- link to font awesome -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>

    <title>about product</title>
</head>

<body>
<section class="hero">
        <div class="flex flex-row gap-4 items-center">
            <div class="logo ">
                <a href="<?= URLROOT ; ?>/pages/index"><img src="<?= URLROOT; ?>/img/mobile logo.png" alt="logo"></a>
            </div>
            <div class="flex flex-row gap-4">
                <div>
                    <b><a href="<?= URLROOT; ?>/products/user">categorie</a></b>
                </div>
                <div>
                    <b><a href="View/Contact.php">Contact Us</a></b>
                </div>
                <div>
                    <b><a href="<?= URLROOT; ?>/pages/AboutUs">About Us</a></b>
                </div>
            </div>

        </div>
        <div class="icons">
            <div class="icon-item">
                <a href="<?= URLROOT; ?>/autho/login">
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
    <section class="product-p mt-8">
        <div class="product">
            <div class="about-product">
                <div>
                    <div>
                        <img src="<?= URLROOT . '/img/upload/' . $data['image']?>" alt="headset" class="rounded bg-gray-300 m-2 w-60 p-4">
                    </div>
                    <div class="product-img">
                        <img src="<?= URLROOT . '/img/upload/' . $data['image']?>" alt="headset" class="rounded bg-gray-300 m-2 w-16 p-2">
                        <img src="<?= URLROOT . '/img/upload/' . $data['image']?>" alt="headset" class="rounded bg-gray-300 m-2 w-16 p-2">
                        <img src="<?= URLROOT . '/img/upload/' . $data['image']?>" alt="headset" class="rounded bg-gray-300 m-2 w-16 p-2">
                    </div>
                </div>
                   
                    <div class="info-product bg-gray-200 flex flex-wrap flex-start gap-4 h-96 justify-between rounded w-[70%]">
                        <div class="flex flex-col gap-2 justify-between p-4 w-full ">
                            <div class="flex flex-col  justify-between items-start ml-6 mt-4">
                                <h3 class="font-bold"><?php echo $data['name'] ?></h3>
                                <div class="tobuy  w-[100%]">
                                <div class="text-red flex-row justify-between items-start">

                                    <i class="fa-solid fa-star text-yellow-500"></i>
                                    <i class="fa-solid fa-star  text-yellow-500"></i>
                                    <i class="fa-solid fa-star  text-yellow-500"></i>
                                    <i class="fa-solid fa-star  text-yellow-500"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <button class="price-btn bg-blue-700 rounded-md p-2 text-white font-bold"><span class="text-red-600"> -10% </span> <?= $data['prix_achat']; ?> $</button>
                                </div>
                            </div>
                            <div class="flex flex-col justify-center items-center w-full ">
                                <h3 class="font-semibold text-green-500 ml-2 mb-2">Free Shipping</h3>
                                <p class="border-2 border-gray-400 bg-gray-300 rounded p-2 w-11/12 h-44"><?php echo $data['description'] ?></p>
                            </div>
                       
                    </div>
                    </div>
            </div>
            
            <div class="receipt rounded p-2 ">
                <p class="font-5/16 font-bold text-6xl border-2 border-green-500 rounded p-1"><?= $data['prix_achat']; ?> $</p>
                <p class="text-white font-medium bg-green-500 p-1  rounded ">In stock</p>
                <p class="text-base">delevery December 21 - 28</p>
                <form action="<?php echo URLROOT . '/products/addToCart/'. $data['id']; ?>" method="POST">
                    <select name="quantite" value="quantite" class="text-center border-blue-800 rounded p-1 text-black">
                        <?php for($i = 1; $i < $data['quantite']; $i++) { ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php } ?>
                    </select>
                    <button class="border-solid border-2 border-blue-800 p-2 rounded-lg bg-blue-700 hover:bg-blue-900 text-white"> add to cart</button>
                </form>
                
            </div>
        </div>
        
    </section>
    <section>
        <footer class="footer">
            <div class="footer__addr">
                <h1 class="footer__logo">
                    <img src="../assets/image/mobile logo.png" alt="">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>