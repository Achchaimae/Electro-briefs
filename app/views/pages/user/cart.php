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
    <section class="cart-sec m-4 rounded p-4   flex-wrap">
        <div class="cart-info w-1/2 flex flex-col gap-4 justify-between">
            <div class="ship-info  ">
                <h1 class="font-bold text-2xl">Shipping Address</h1><br>
                <p></p>
                <p class="bg-blue-300 p-2 rounded "> <?= $data['name'] . ' ' . $data['prenom']; ?></p><br>
                <p class="bg-blue-300 p-2 rounded "><?= $data['telephone'] ?></p><br>
                <p class="bg-blue-300 p-2 rounded "><?= $data['adresse'] ?></p><br>
                <p class="bg-blue-300 p-2 rounded "> <?= $data['adresse'] . ', ' . $data['ville']; ?></p>
            </div>
            <div class="product-buy">
                <h2 class="font-bold ">My product :</h2>
                <form action="<?= URLROOT ;?>/Command/updateProductCart" method="POST" class="w-full">
                    <?php foreach ($data['cart'] as $cart) : ?>
                        <div class="items my-price bg-blue-300 justify-around mb-3">
                            <img src="<?= URLROOT . '/img/upload/' . $cart->image; ?>" alt="produit">
                            <div>
                                <h3><?= $cart->libelle ?></h3>
                                <div class="more-pro flex justify-around">
                                    <input type="text" name="id[]" class="id" value="<?= $cart->id ?>" hidden>
                                    <span><?= $cart->prix_achat ?> $</span>
                                    <input type="text" name="prix_achat" class="price w-12" value="<?= $cart->prix_achat ?>" hidden>
                                    <button class="minus bg-blue-800 text-white" >-</button>
                                    <input type="text" name="qte[]" class="quantite w-12" value="<?= $cart->quantite_c ?>">
                                    <button class="plus bg-blue-800 text-white" >+</button>
                                    <div onclick="deletecheck()">
                                        <button id="deleteBtn">
                                            <i class="fa-solid fa-trash text-red-500"></i>
                                        </button>
                                
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <button class="bg-blue-200 p-2 px-4 border-solid border-2 relative right-0 border-white w-24 mx-auto text-white drop-shadow-sm shadow-md  rounded-3xl">
                            Update
                    </button>
                </form>
            </div>
        </div>
        <div class="cart-recep border-black">
            <form action="<?= URLROOT . '/Command/sendCommande' ; ?>" method="POST">
                <div>
                    <h3 class="font-bold text-2xl">Summary</h3>
                    <p class="font-semibold ">total iteam costs : </p>
                    <div class="flex flex-col items-center" id="summary">
                        <!-- items -->
                    </div>
                    <hr>
                    <div class="my-price">
                        <p id="total">Total : </p>
                    </div>
                </div>

                <button id="orderNow" class="bg-blue-800 rounded-lg p-2 justify-center text-white" onclick="Swal.fire({ position: 'center ', icon: 'success', title: 'Your order has been saved', showConfirmButton: false, timer: 1000})">
                Place Order
                </button>
            </form>
        </div>

    </section>
    <section class="flex  justify-center">
        <button  class="bg-blue-200 p-2 px-4 border-solid border-2 border-white text-white drop-shadow-sm shadow-md  rounded-3xl">
            <a href="<?= URLROOT ;?>/products/user">
            back to shop
            </a>
        </button>
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

    let deleteBtn = document.getElementById('deleteBtn');
    deleteBtn.addEventListener('click', (e) => {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                );
                delet = setTimeout(() => {
                    window.location.href = "<?= URLROOT . '/products/deleteFromCart/' . $cart->id; ?>";
                }, 1000);
            }
            })
    });
    // function deletecheck() {
    //         Swal.fire({
    //                 title: 'Are you sure?',
    //                 text: "You won't be able to revert this!",
    //                 icon: 'warning',
    //                 showCancelButton: true,
    //                 confirmButtonColor: '#3085d6',
    //                 cancelButtonColor: '#d33',
    //                 confirmButtonText: 'Yes, delete it!'
    //                 }).then((result) => {
    //                 if (result.isConfirmed) {
    //                     Swal.fire(
    //                     'Deleted!',
    //                     'Your file has been deleted.',
    //                     'success'
    //                     )
    //                 }
    //                 })
    //     }
    
</script>
<script type="text/javascript">
    // //add more or less
    // let plus = document.querySelectorAll('.plus');
    // let minus = document.querySelectorAll('.minus');
    // let quantite = document.querySelectorAll('.quantite');

    // //function click to add more
    // plus.forEach((plus) => {
    //     plus.addEventListener('click', () => {
    //         let input = plus.previousElementSibling;
    //         let value = parseInt(input.value);
    //         value = isNaN(value) ? 0 : value;
    //         value++;
    //         input.value = value;
    //     });
    // });
    // //function click to add less
    // minus.forEach((minus) => {
    //     minus.addEventListener('click', () => {
    //         let input = minus.nextElementSibling;
    //         let value = parseInt(input.value);
    //         value = isNaN(value) ? 0 : value;
    //         value < 1 ? value = 1 : '';
    //         value--;
    //         input.value = value;
    //     });
    // });
    
</script>

<script>

    let summary = document.getElementById('summary');
    let items = document.querySelectorAll('.items');
    let total = document.getElementById('total');
    let totalPrix = 0;

    for (let i = 0; i < items.length; i++) {
        let quantite = items[i].querySelector('.quantite').value;
        let id = items[i].querySelector('.id').value;
        let price = items[i].querySelector('.price').value;
        let plus = items[i].querySelector('.plus');
        let minus = items[i].querySelector('.minus');
        let totalPrice = quantite * price;
        totalPrix += totalPrice;

        minus.addEventListener('click', e => {
            e.preventDefault();
            minus.nextElementSibling.value--;
            if (minus.nextElementSibling.value < 1) {
                minus.nextElementSibling.value = 1;
            }
        });

        plus.addEventListener('click', e => {
            e.preventDefault();
            plus.previousElementSibling.value++;
            quantite++;
        });
        
        summary.innerHTML += `
                            <p>${quantite} qty x ${price}</p> <br>
                            <input type="text" name="products[]" value="${id}" hidden>
                            <input type="text" name="quantity[]" value="${quantite}" hidden>
                        `;

        total.textContent = `Total : ${totalPrix}`; 

    }

    // //function click to add more
    // plus.forEach((plus) => {
    //     plus.addEventListener('click', () => {
    //         let input = plus.previousElementSibling;
    //         let value = parseInt(input.value);
    //         value = isNaN(value) ? 0 : value;
    //         value++;
    //         input.value = value;
    //     });
    // });
    // //function click to add less
    // minus.forEach((minus) => {
    //     minus.addEventListener('click', () => {
    //         let input = minus.nextElementSibling;
    //         let value = parseInt(input.value);
    //         value = isNaN(value) ? 0 : value;
    //         value < 1 ? value = 1 : '';
    //         value--;
    //         input.value = value;
    //     });
    // });
    

</script>

</html>