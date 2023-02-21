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
    <title>AboutUS</title>
</head>
<body>
    
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

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
<section class=" bg-blueGray-200 -mt-24">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap">
      <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-1 shadow-lg rounded-lg">
          <div class="px-4 flex-auto">
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap items-center mt-16">
      <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
        <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
          <i class="fas fa-user-friends text-xl"></i>
        </div>
        <h3 class="text-3xl mb-2 font-semibold leading-normal">
          Working with us is a pleasure
        </h3>
        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
          Don't let your uses guess by attaching tooltips and popoves to
          any element. Just make sure you enable them first via
          JavaScript.
        </p>
        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-blueGray-600">
          The kit comes with three pre-built pages to help you get started
          faster. You can change the text and images and you're good to
          go. Just make sure you enable them first via JavaScript.
        </p>
        <a href="<?=URLROOT ;?>/pages/index" class="font-bold text-blueGray-700 mt-8">Check Notus JS!</a>
      </div>
      <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-2 shadow-lg rounded-lg bg-pink-500">
          <img alt="..." src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80" class="w-full align-middle rounded-t-lg">
          <blockquote class="relative p-8 mb-4">
          <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block h-95-px -top-94-px">
                    <polygon points="-30,95 583,95 583,65" class="text-pink-500 fill-current"></polygon>
                  </svg>
         
            <h4 class="text-xl font-bold text-white">
              Top Notch Services
            </h4>
            <p class="text-md font-light mt-2 text-white">
              The Arctic Ocean freezes every winter and much of the
              sea-ice then thaws every summer, and that process will
              continue whatever happens.
            </p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
  <footer class="relative pt-8 pb-6 mt-8">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap items-center md:justify-between justify-center">
        <div class="w-full md:w-6/12 px-4 mx-auto text-center">
          <div class="text-sm text-blueGray-500 font-semibold py-1">
            Made with <span class="text-blueGray-500 hover:text-gray-800" >Love  🔥</span> by <span class="text-blueGray-500 hover:text-blueGray-800" > Achchaimae khalaf</span>.
          </div>
        </div>
      </div>
    </div>
  </footer>
</section>
</body>
</html>