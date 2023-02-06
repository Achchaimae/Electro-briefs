<?php
    print_r($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/cart.css">
    <!-- link tailwind css -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/build/output.css">
    <!-- link to font awesome -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/cart.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link href="<?= URLROOT; ?>/css/cart.css" rel="stylesheet">
    <!-- link tailwind css -->
    <link href="<?= URLROOT; ?>/dist/output.css" rel="stylesheet">

    <!-- link to font awesome -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>

    <title>home</title>
</head>

<body class="bg-blue-100">
    <section class="cart-sec m-4 rounded p-4">
        <div class="cart-info">
            <div class="ship-info ">
                <h1 class="font-bold text-2xl">Shipping Address</h1><br>
                <p>Achchaimae khalaf</p><br>
                <p> +212 682751559</p><br>
                <p>Lots wiaam 2 rue 33 n 2</p><br>
                <p> SAFI, Marrakech - Safi, Morocco, 40060</p>
            </div>
            <div class="product-buy">
                <div class="my-price">
                    <img src="../assets/image/headset4.png" alt="produit">
                    <div>
                        <h3><?= $data['libelle'] ?></h3>
                        <div class="more-pro">
                            <button class=" bg-blue-800 text-white">-</button>
                            <p> <?= $data['quantite'] ?></p>
                            <button class=" bg-blue-800 text-white">+</button>
                        </div>
                    </div>

                </div>
                <div class="my-price">
                    <img src="../assets/image/headset1.png" alt="produit">
                    <div>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                        <div class="more-pro">
                            <button class=" bg-blue-800 text-white"> - </button>
                            <p> 1</p>
                            <button class=" bg-blue-800 text-white"> + </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="cart-recep border-black">
            <div>
                <h3 class="font-bold text-2xl">Summary</h3>
                <div class="my-pric">
                    <p>total iteam costs </p>
                    <p>1 qty x 59</p>
                </div>
                <div class="my-price">
                    <p>total Shipping</p>
                    <p>Free</p>
                </div>
                <hr>
                <div class="my-price">
                    <p>total</p>
                    <p>59</p>
                </div>
            </div>


            <button class="bg-blue-800 rounded-lg p-2 justify-center text-white" onclick="Swal.fire({
  position: 'center ',
  icon: 'success',
  title: 'Your order has been saved',
  showConfirmButton: false,
  timer: 1500
})">Place Order</button>

        </div>

    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>