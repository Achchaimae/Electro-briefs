<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
  <!-- link tailwind css -->
  <link href="<?= URLROOT; ?>/css/mystyle.css" rel="stylesheet">
  <!-- link tailwind css -->
  <link href="<?= URLROOT; ?>/dist/output.css" rel="stylesheet">
  <!-- link to font awesome -->
  <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script> 
    <title>Contact US</title>
</head>
<body>
<section class="hero">
        <div class="flex flex-row gap-4 items-center">
            <div class="logo ">
                <a href="<?= URLROOT ?>/pages/index"><img src="<?= URLROOT; ?>/img/mobile logo.png" alt="logo"></a>
            </div>
            <div class="flex flex-row gap-4">
                <div>
                    <b><a href="<?= URLROOT ;?>/products/user">categorie</a></b>
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
                <a href=" <?= URLROOT; ?>/autho/login">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>
            <div>
                <a href="<?=URLROOT ;?>/Products/cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
</section>
<section class="p-6 dark:text-gray-100">
	<form novalidate="" class="container w-full max-w-xl p-8 mx-auto space-y-6 rounded-md shadow dark:bg-gray-900 ng-untouched ng-pristine ng-valid">
		<h2 class="w-full text-3xl font-bold leading-tight">Contact us</h2>
		<div>
			<label for="name" class="block mb-1 ml-1">Name</label>
			<input id="name" type="text" placeholder="Your name" required="" class="block w-full p-2 rounded focus:outline-none focus:ring focus:ring-opacity-25 focus:ring-violet-400 dark:bg-gray-800">
		</div>
		<div>
			<label for="email" class="block mb-1 ml-1">Email</label>
			<input id="email" type="email" placeholder="Your email" required="" class="block w-full p-2 rounded focus:outline-none focus:ring focus:ring-opacity-25 focus:ring-violet-400 dark:bg-gray-800">
		</div>
		<div>
			<label for="message" class="block mb-1 ml-1">Message</label>
			<textarea id="message" type="text" placeholder="Message..." class="block w-full p-2 rounded autoexpand focus:outline-none focus:ring focus:ring-opacity-25 focus:ring-violet-400 dark:bg-gray-800"></textarea>
		</div>
		<div>
			<button type="submit" class="w-full px-4 py-2 font-bold rounded shadow focus:outline-none focus:ring hover:ring focus:ring-opacity-50 dark:bg-violet-400 focus:ring-violet-400 hover:ring-violet-400 dark:text-gray-900">Send</button>
		</div>
	</form>
</section>
</body>
</html>