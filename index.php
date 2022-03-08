<?php

include 'header.php';

?>


    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/Riverside logo.jpg" alt="logo">
        <span class="screenreader">click to go to homepage</span>
    </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="#about">about</a>
        <a href="#menu">Player-Profile</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="contactsection.php">contact</a>
        <a href="#Player's Profiles">blogs</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/shirt.jpg" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/shirt1.jpg" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/shoes.jpg" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/socks.jpg" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
<div class="homeback-ground">

</div>
    <div class="content">
        <h3>Riverside Football Club</h3>
        <p>We believe in developing a first class football club that will provide the tools
            for everyone to succeed in the beautiful game.</p>
            <a href="login.php" class="btn btn_home">  <i class="fa-solid fa-arrow-right-to-bracket"></i> sign in</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/teamphoto1.jpeg" alt="">
        </div>

        <div class="content">
            <h3>All you need to know about Riverside football club</h3>
            <p>Riverside Football club has the aspiration of discovering, nurturing, developing and enhancing growth of potential talent in football .Hence, it exists with a sole of ensuring the development of all –rounded football professionals with the ability to keep the football game more vibrant than ever before. </p>
            <p>In order to achieve its objective and goals of producing best talents to professional league clubs within and abroad with young players, the club endeavours to develop an academy that accommodate categories starting from 3 – 19 years.</p>
            <a href="aboutus.php" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> Player <span>Profile</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/kibe.jpeg" alt="">
            <h3>collins kibenon</h3>
           
           

        </div>

        <div class="box">
            <img src="images/cedy.jpeg" alt="">
            <h3>cedrik kibet</h3>
           
      
        </div>

        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>Frank kabete</h3>
          
        
        </div>

        <div class="box">
            <img src="images/menu-4.png" alt="">
            <h3>charles njonjo</h3>
            
            
        </div>

        <div class="box">
            <img src="images/menu-5.png" alt="">
            <h3>jionicio githanje</h3>
          
           
        </div>

        <div class="box">
            <img src="images/chichi.jpeg" alt="">
            <h3>cecil kipchirchir</h3>
         
            
        </div>

        <div class="box">
            <img src="images/menu-6.png" alt="">
            <h3>Mutegi Jeff</h3>
          
            
        </div>

        <div class="box">
            <img src="images/shikuku.jpeg" alt="">
            <h3>shikuku</h3>
           
            
        </div>

        <div class="box">
            <img src="images/menu-6.png" alt="">
            <h3>joseph mwangi</h3>
          
           
        </div>

        <div class="box">
            <img src="images/lesley.jpeg" alt="">
            <h3>lesley kimutai</h3>
   
            
        </div>

        <div class="box">
            <img src="images/kibi.jpeg" alt="">
            <h3>kibiwot kosgei</h3>

            
        </div>

        <div class="box">
        <i class="fa-solid fa-user fa-10x"></i>
            <!-- <img src="images/menu-6.png" alt=""> -->
            <h3>john maingi</h3>
          
            
        </div>

        <div class="box">
            <img src="images/rafa.jpeg" alt="">
            <h3>Rafael Rafa</h3>
           
            
        </div>

        <div class="box">
            <img src="images/coach.jpeg" alt="">
            <h3>Coach David</h3>
        
           
        </div>


    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/shirt.jpg" alt="">
            </div>
            <div class="content">
                <h3>Team Shirt</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">300 Ksh <span>$20.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/shirt2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Training Jersey</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> 300 Ksh<span>500 Ksh</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/shoes.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Playing boots</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

      
            </div>

        
            </div>
        </div>

        
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/socks.jpg" alt="">
            </div>
            <div class="content">
                <h3>socks</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> 150 Ksh<span>200 Ksh</span></div>
            </div>
        </div>
    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/pic-1.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/pic-2.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/pic-3.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8284.569786696216!2d36.888439625060414!3d-1.1987643165119195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3e6789cb5147%3A0x18c12cf4d28268dd!2sKamiti%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1646486817896!5m2!1sen!2ske" allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <div class="inputBox">
            <span class="fas fa-envelope"></span>
                <input type="message" placeholder="message">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">tasty and refreshing coffee</a>
                <span>by admin / 21st may, 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">tasty and refreshing coffee</a>
                <span>by admin / 21st may, 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-4.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">The Kibenon Effect</a>
                <span>by Collins Kibiwot / 21st may, 2021</span>
                <p>I can clearly say that this boy is a definition of 'from grass to grace'.Collins Kibenon started playing grassroot football in the year 2018.You could say he had no talent but full of drive.He plays like Manchester United's Scott Mc Tominay but he hopes to one day play like Ngolo Kante despite their outstanding contrasting height......</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">tasty and refreshing coffee</a>
                <span>by admin / 21st may, 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="https://m.facebook.com/collins.kibiwot" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/KibiwotKosgei" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/kibi_the_great/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/kibiwot-kosgei-33838a224/" class="fab fa-linkedin"></a>
        <a href="https://www.pinterest.com/collinskibiwot/_saved/" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">menu</a>
        <a href="#">products</a>
        <a href="#">review</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
    </div>

    <div class="credit">created by <span>Kibiwot Kosgei</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

<?php

include 'footer.php';

?>










