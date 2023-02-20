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

<body class="bg-blue-100 overflow-x-hidden">
    <section >
        <nav class="flex justify-between  m-2 items-center ">
            <div class=" w-24">
                <a href="#"><img src="<?= URLROOT; ?>/img/mobile logo.png" alt="logo"></a>
            </div>
            <div class="">
                <a href="<?php echo URLROOT; ?>/Autho/logout">
                    <i class="fa-solid fa-right-from-bracket text-xl"></i>
                </a>
            </div>
                
             
        </nav>
    </section>
    <section class="cart-sec m-4 rounded p-4  ">
        <div class="cart-info w-1/2 flex flex-col gap-4 justify-between">
            <div class="ship-info ">
                <h1 class="font-bold text-2xl">Shipping Address</h1><br>
                <p><?= $data['name'] . ' ' . $data['prenom']; ?></p><br>
                <p><?= $data['telephone'] ?></p><br>
                <p><?= $data['adresse'] ?></p><br>
                <p> <?= $data['adresse'] . ', ' . $data['ville']; ?></p>
            </div>
            <div class="product-buy">
                <?php foreach ($data['cart'] as $cart) : ?>
                    <div class="my-price">
                        <img src="<?= URLROOT . '/img/upload/' . $cart->image; ?>" alt="produit">
                        <div>
                            <h3><?= $cart->libelle ?></h3>
                            <div class="more-pro">
                                <button class="minus bg-blue-800 text-white" >-</button>
                                <input type="text" class="quantite w-12" readonly disabled value="<?= $cart->quantite_c ?>">
                                <button class="plus bg-blue-800 text-white" >+</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                
            </div>
        </div>
        <div class="cart-recep border-black">
            <form action="<?= URLROOT . '/Command/sendCommande' ; ?>" method="POST">
                <div>
                    <h3 class="font-bold text-2xl">Summary</h3>
                    <p class="font-semibold ">total iteam costs : </p>
                    <div class="flex flex-col items-center">
                            <?php foreach ($data['cart'] as $cart) : ?>
                                <p><?= $cart->quantite_c; ?> qty x <?= $cart->prix_final; ?></p> <br>
                                <input type="text" name="products[]" value="<?= $cart->id; ?>" hidden>
                                <input type="text" name="quantity[]" value="<?= $cart->quantite_c; ?>" hidden>
                            <?php endforeach ?>
                        
                    </div>
                    <hr>
                    <div class="my-price">
                        <p>total</p>
                        <p><?= $data['total_price']; ?></p>
                    </div>
                </div>


                <button id="orderNow" class="bg-blue-800 rounded-lg p-2 justify-center text-white" onclick="Swal.fire({ position: 'center ', icon: 'success', title: 'Your order has been saved', showConfirmButton: false, timer: 1000})">
                Place Order
                </button>
            </form>
        </div>

    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let order = document.getElementById('orderNow');
    let test;
    order.addEventListener('click', () => {
        test = setTimeout(() => {
            window.location.href = "<?= URLROOT; ?>/products/user";
        }, 1200);
    });
    
</script>
<script type="text/javascript">
    //add more or less
    let plus = document.querySelectorAll('.plus');
    let minus = document.querySelectorAll('.minus');
    let quantite = document.querySelectorAll('.quantite');

    //function click to add more
    plus.forEach((plus) => {
        plus.addEventListener('click', () => {
            let input = plus.previousElementSibling;
            let value = parseInt(input.value);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
        });
    });
    //function click to add less
    minus.forEach((minus) => {
        minus.addEventListener('click', () => {
            let input = minus.nextElementSibling;
            let value = parseInt(input.value);
            value = isNaN(value) ? 0 : value;
            value < 1 ? value = 1 : '';
            value--;
            input.value = value;
        });
    });
    
</script>

</html>