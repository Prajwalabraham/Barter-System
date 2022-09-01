<?php
include('login.php'); // Includes Login Script

//checking session is available
if (isset($_SESSION['login_user'])) {
    header("location: profile.php"); //redirect Prifile page
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barter Store | Exchange Cashless</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Licorice&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,100;1,600;1,700&family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>    
    </head>
    <body>
        <div class="header">
            <div class="contain">
                <div class="navbar">
                    <div class="barter" style="width: 60%;">
                        <h3 style="font-family: 'Licorice', cursive; font-size: 30pt;">BARTER SYSTEM</h3>
                    </div>
                    <div class="nav">
                        <nav>
                            <ul>
                                <li><a href="index.html">Home</a></li>                       
                                <li><a href="explore.html">Explore</a></li>
                                <li><a href="categories.html">Categories</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="support.html">Support</a></li>
                                <a href=""><img src="shopping-cart.png" width="30px" height="30px" style="margin-right: 20px;"></a>
                                <a href=""><img src="like.png" width="30px" height="30px" style="margin-right: 20px;"></a>
                                <a href=""><img src="search.png" width="30px" height="30px" style="margin-right: 20px;"></a>
                            </ul>
                        </nav>
                    </div>
               </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <h1 style="font-family: 'Poppins', sans-serif;">Let's do it the<br>Old Fashioned Way!</h1>
                    <p style="font-family: 'Poppins', sans-serif;">Exchange goods for goods without cash. Find people who need your stuff and stuffs that you need from other people.
                    Let's find someone who has things you need.</p>
                    <a href="explore.html" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="logo.png" width="750">
                </div>
            </div>
        <div class="smallcontainer">
        <div class="row-1">
            <div class="col-3">
                <a href=""><img src="clothing.jpg" width="100%"></a>
                <h3 style="font-size: 25px;
                color: rgb(39, 3, 3);
                font-family: 'Poppins', sans-serif;
                margin-left: 35%;   ">CLOTHING</h3>
            </div>
            <div class="col-3">
                <a href=""><img src="furniture.jpg" width="100%"></a>
                <h3 style="    font-size: 25px;
                font-family: 'Poppins', sans-serif;
                color: rgb(39, 3, 3);
                margin-left: 40%; ">FURNITURE</h3>
            </div>
            <div class="col-3">
                <a href=""><img src="gadgets.jpg" width="100%"></a>
                <h3 style="    font-size: 25px;
                font-family: 'Poppins', sans-serif;
                color: rgb(39, 3, 3);
                margin-left: 40%;    ">GADGETS</h3>
            </div>
        </div>
        </div>
        <br>
        <br>
    </div>
        <div class="featured">
            <h2>Featured Products</h2>
        </div>
        <div class="products">        
            <div class="row">
            <div class="col4">
                <a href=""><img src="cloth1.jpg" width="70%"></a>
                <h2>White Sweat Shirt</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <h4>Exchange: Black jeans</h4>
                <h3>Seller: Abraham</h3>

            </div>
            <div class="col4">
                <a href=""><img src="cloth2.jpg" width="70%"></a>
                <h2>White Sweat Shirt</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <h4>Exchange: Blue Gown</h4>
                <h3>Seller: Prajwal</h3>
                
            </div>
            <div class="col4">
                <a href=""><img src="cloth3.jpg" width="70%"></a>
                <h2>White Sweat Shirt</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <h4>Exchange: Black Top</h4>
                <h3>Seller: Spider Man</h3>
                
            </div>
            <div class="col4">
                <a href=""><img src="cloth4.jpg" width="70%"></a>
                <h2>White Sweat Shirt</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <h4>Exchange: Red Sweat shirt</h4>
                <h3>Seller: Peter Parker</h3>
                
            </div>
        </div>
    </div>
    <header>
        <!-- Content -->
      </header>
      
      <main>
        <!-- Content -->
      </main>
      
      <footer class="footer">
        <div class="footer__addr">
          <h1 class="footer__logo">BARTER</h1>
              
          <h2>Contact</h2>
          
          <address>
            256 Somewhere In The World 22193-10212<br>
                
            <a class="footer__btn" href="prajwalabraham.21@gmail.com">Email Us</a>
          </address>
        </div>
        
        <ul class="footer__nav">
          <li class="nav__item">
            <h2 class="nav__title">Media</h2>
      
            <ul class="nav__ul">
              <li>
                <a href="#">Online</a>
              </li>
      
              <li>
                <a href="#">Print</a>
              </li>
                  
              <li>
                <a href="#">Alternative Ads</a>
              </li>
            </ul>
          </li>
          
          <li class="nav__item nav__item--extra">
            <h2 class="nav__title">Concept</h2>
            
            <ul class="nav__ul nav__ul--extra">
              <li>
                <a href="#">Exchange</a>
              </li>
              
              <li>
                <a href="#">Cashless</a>
              </li>
              
              <li>
                <a href="#">Authenticity</a>
              </li>
              
              <li>
                <a href="#">Reliability</a>
              </li>
              
              <li>
                <a href="#">Credibility</a>
              </li>
              
              <li>
                <a href="#">Blog</a>
              </li>
            </ul>
          </li>
          
          <li class="nav__item">
            <h2 class="nav__title">Legal</h2>
            
            <ul class="nav__ul">
              <li>
                <a href="#">Privacy Policy</a>
              </li>
              
              <li>
                <a href="#">Terms of Use</a>
              </li>
              
              <li>
                <a href="#">Sitemap</a>
              </li>
            </ul>
          </li>
        </ul>
        
        <div class="legal">
          <p>&copy; 2022 In my Name All rights reserved.</p>
          
          <div class="legal__links">
            <span>Made with <span class="heart">♥</span> Dare you to copy my code</span>
          </div>
        </div>
      </footer>

    </body>
</html>