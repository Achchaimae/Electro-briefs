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

                <div class="info-product">
                    <h3 class="font-bold"><?php echo $data['name'] ?></h3>
                    <div class="tobuy">
                        <div class="text-red flex-row justify-between">

                            <i class="fa-solid fa-star text-yellow-500"></i>
                            <i class="fa-solid fa-star  text-yellow-500"></i>
                            <i class="fa-solid fa-star  text-yellow-500"></i>
                            <i class="fa-solid fa-star  text-yellow-500"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <button class="price-btn bg-blue-700 rounded-md p-2 text-white font-bold"><span class="text-red-600"> -10% </span> <?= $data['prix_achat']; ?> $</button>
                        <h3 class="font-semibold">Free Shipping</h3>
                        <p><?php echo $data['description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="receipt rounded p-2 ">
                <p class="font-5/16 font-bold text-6xl"><?= $data['prix_achat']; ?> $</p>
                <p class="text-green-600 font-medium ">In stock</p>
                <p class="text-base">delevery December 21 - 28</p>
                <select name="quantite" value="quantite" class="text-center border-blue-800 rounded p-1 text-black">
                    <?php for($i = 1; $i < $data['quantite']; $i++) { ?>
                        <option value="<?= $i; ?>"><?= $i; ?></option>
                    <?php } ?>
                </select>
                <button class="border-solid border-2 border-blue-800 p-2 rounded-lg hover:bg-blue-700 hover:text-white"> <a href="<?php echo URLROOT . '/products/cart/'. $data['id']; ?>">add to cart</a></button>
                <button class="bg-blue-700 text-white rounded p-2 hover:bg-blue-700 " onclick="Swal.fire({
  position: 'center ',
  icon: 'success',
  title: 'Your order has been saved',
  showConfirmButton: false,
  timer: 1500
})"> Buy Now </button>
            </div>
        </div>
        <div class=" w-8/12 m-6 ">
            <p>About this item <br></p>
            <div class="w-8/12 m-4 font-medium">
                <li>
                    IMPRESSIVE SOUND QUALITY: Riwbox XBT-80 is a bluetooth headphone features with a 50mm large diameter aperture drivers and bliit-in high detail microphone. Wide frequency range reproduces precise deep base and high clarity sound. You can expect comf
                </li>
                <li>
                    BUILT TO STAY COMFORTABLE:The Memory-protein ear cushion simliate human skin texture, ensuring lasting comfort. The stainless steel slider and softly padded headband allows you to find the perfect fit without constraint and provide excellent durability.
                </li>
                <li>
                    NEVER POWER OFF, BOTH WIRELESS & WIRED: 1. The wireless mode: A built-in 420mAh battery provides up to 13-hr music time/15-hr talking time in a single charge; 2. The Wired mode: you can also use it as a wired headphone with the provided audio cable so the headphones will never power off.
                </li>
                <li>
                    TAKE YOUR TUNES TO GO: Space-saving foldable design not only saves space but also makes it portable. Best choice to take it study, out
                </li>
                <li>
                    Riwbox Bluetooth headphones XBT-80 fit the modern city lifestyle for everybody, no matter you are office worker or student, teenager or girls.Devices with all sorts of smart phones, tablets, computer or music player.
                </li>
            </div>
            <b>Note: Products with electrical plugs are designed for use in the US. Outlets and voltage differ internationally and this product may require an adapter or converter for use in your destination. Please check compatibility before purchasing.</b>
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