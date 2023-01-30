<
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
<body >
     <section class="hero ">
        <div class="left-nav">
             <div class="logo">
                <a href="../index.php"><img src="../assets/image/mobile logo.png" alt="logo"></a>
             </div>
        <!-- <div>
            <a href="home.php"><i class="fa-solid fa-house"></i></a>
        </div> -->
        </div>
       
        <div class="search-bar">
            <input type="search" class="search" name="search" placeholder="search your item">
            <i class="fa-solid fa-search"></i>
        </div>
        <div class="icons"> 
            <div class="icon-item">
                <i class="fa-solid fa-user"></i>
            </div>
            <div>
              <a href="cart.php">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            </div>
        </div>
    </section>
    <section class="login-sec">
        <div class="login-img max-lg:hidden">
            <img src="../assets/image/logo.png" alt="">
            <p><h1><span class="text-blue-800">Log</span>in</h1></p>
           
            <p class="font-bold">Shop the best of electronic, Grab the deals, offers and more.</p>
        </div>
        <div class="login">
            <form action="../index.php" class="login-form" method="POST">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="login" value="Login" class="w-fit hover:bg-blue-800 hover:text-white">
             </form>
             <div  class="sm-btn" class="flex-col justify-around ">
                <button><i class="fa-brands fa-google"></i></button>
                <button><i class="fa-brands fa-facebook"></i></button>
                <button><i class="fa-brands fa-linkedin"></i></button>
            </div>
            <div class="login-method" class="flex-col">
                <p class="text-gray-500">------------------------or--------------------------</p>
                <p class="text-gray-500">New? create an account? </p>
                <a href="signup.php" class="bg-blue-800 p-1 rounded text-white">Sign Up</a>
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
</html>