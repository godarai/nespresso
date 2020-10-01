<?php 
require __DIR__ . '/app/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <link href="css/jquery.fancybox.min.css" type="text/css" rel="stylesheet">
        <title>Nespresso</title>
        <script src="https://kit.fontawesome.com/3843618a4d.js" crossorigin="anonymous"></script>
        <script>
            function myFunction() {

                var x = document.getElementById("mMenu");

                if (x.style.display === "block") {

                    x.style.display = "none";

                } else {

                    x.style.display = "block";

                }

            }
        </script>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header class="site-header">
            <div class="container flex-container">
                <div class="logo">
                    <img src="images/nespressologo.png" alt="logo">
                </div>
                <nav class="main-nav">
                    <ul class="flex-container">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#our-story">Our Story</a></li>
                        <li><a href="#gallery1">Gallery</a></li>
                        <li><a href="#contact-us">Contact Us</a></li>
                    </ul>
                </nav>
            </div>

            <nav class="mobile-nav">                
                <ul id="mMenu" class="flex-container">                     
                    <li><a href="home">Home</a></li>                   
                    <li><a href="#about-us">About Us</a></li>
                    <li><a href="#our-story">Our Story</a></li>
                    <li><a href="#gallery1">Gallery</a></li>  
                    <li><a href="#contact-us">Contact Us</a></li>               
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars" style="font-size: 2em"></i>
                </a>
            </nav>



        </header>
        <!--  END HEADER    -->

        <!--   SLIDES       -->
        <div class="my-slidesmob">
            <img src="images/nesspresso2.jpg" height="auto" width="100%">
        </div>
        <section class="slideshow-container" id="home">
            <div class="my-slides image1">
                <img src="images/nesspresso2.jpg" height="880px" width="100%">
                <div class="text">
                    <div class="boxed">
                        <p style="font-size: 3rem">NESPRESSO</p>
                        <p style="letter-spacing: 10px; font-size: 1.7rem">ENJOY COFFEE MOMENTS!</p>
                        <a href="#contact-us"><button class="btn" id="slides-btn" type="button">Register</button></a>
                    </div>
                </div>
            </div>
            <div class="my-slides image2">
                <img src="images/nesspresso3.jpg" height="880px" width="100%">
                <div class="text">
                    <div class="boxed">
                        <p style="font-size: 3rem">Barista Creations</p>
                        <p style="letter-spacing: 10px; font-size: 1.7rem">FLAVOURS OF INDULGENS!</p>
                        <a href="https://www.nespresso.com/uk/en/barista-iced-coffee" target="_blank"><button class="btn" id="slides-btn" type="button" style="font-size: 1rem">More</button></a>
                    </div>
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentslide(1)"></span>
                <span class="dot" onclick="currentslide(2)"></span>
            </div>
        </section>

        <!--    END SLIDES-->

        <!-- CUPS -->

        <section class="cups" id="about-us">
            <div class="cups-all">
                <a href="https://nespresso.lt/lt/?gclid=Cj0KCQjw1qL6BRCmARIsADV9JtZiZ4tkt33kvlx_71nnSlhsE13yPwbuMj6F_GSwrH2HDkq4Z6MtY2oaAqXbEALw_wcB" target="_blank"><input type="image" name="imgbtn" src="images/cup1.png" class="rotate linear once" border="0" height="300px" width="300px" alt="cup"><p>Click ME</p></a>
                <a href="https://nespresso.lt/lt/?gclid=Cj0KCQjw1qL6BRCmARIsADV9JtZiZ4tkt33kvlx_71nnSlhsE13yPwbuMj6F_GSwrH2HDkq4Z6MtY2oaAqXbEALw_wcB" target="_blank"><input type="image" name="imgbtn" src="images/cup2.png" class="rotate linear once" border="0" height="300px" width="300px" alt="cup"><p>Click ME</p></a>
                <a href="https://nespresso.lt/lt/?gclid=Cj0KCQjw1qL6BRCmARIsADV9JtZiZ4tkt33kvlx_71nnSlhsE13yPwbuMj6F_GSwrH2HDkq4Z6MtY2oaAqXbEALw_wcB" target="_blank"><input type="image" name="imgbtn" src="images/cup3.png" class="rotate linear once" border="0" height="300px" width="300px" alt="cup"><p style="color: black">Click ME</p></a>
            </div>
            <div class="image">
                <h1>WE BELIEVE IN COFFEE THAT TASTES INCREDIBLE</h1>
                <img src="images/backg.jpg" height="900px" width="100%">
            </div>
        </section>
        <!--    END OF CUPS-->

        <!--    OUR STORY-->
        <section class="our-story" id="our-story">
            <div class="backgroundpic" style="background-image: url(images/correctbckgr.jpg)">
            </div>
            <div class="our-storytxt">
                <h1>DOING IS EVERYTHING</h1>
                <p><strong>Nespresso</strong> removes over <i>99.9%</i> of the caffeine from green coffee by using two different methods. In the water decaffeination process, green coffee beans are soaked in hot water in order to dissolve the caffeine. In the carbon dioxide method, the green coffee is soaked in water after which carbon dioxide (one of the key constituents of air) is used to extract the caffeine.</p>
                <p>Both methods are completely safe for coffee drinkers. The processes respect the environment and the coffee bean’s true nature, allowing us to maintain the strength, variety, and richness of the aromas. The decaffeinated <strong>Nespresso</strong> varieties undergo the same quality controls applied to all Nespresso Coffees.</p>
                <button> <a data-fancybox data-type="iframe" iframe href="https://www.youtube.com/embed" frameborder="0" allowfullscreen ng-show="showvideo" class="btn btn-primary fancybox"><strong>Watch Our Story</strong></a> </button> 
            </div>
            <div class="coffee">
                <img src="images/machine.png" width="600px" height="420px">
            </div>
        </section>

        <!--        END OUR STORY-->
        <!--        GALLERY-->
        <div class="mobpic">
            <img class="mobpic1" src="images/macaroons1.jpg" width="300px" height="500px">
            <img class="mobpic2" src="images/coffeee.jpg" width="300px" height="500px">
            <img class="mobpic3" src="images/capsules.jpg" width="300px" height="500px">
            <img class="mobpic4" src="images/beans1.jpg" width="300px" height="500px">
        </div>
        <section class="gallery" id="gallery1">
            <div style="background-color: black">
                <div class="pic">
                    <a href="images/macaroons1.jpg" data-fancybox="gallery">
                        <img src="images/macaroons1.jpg" height="700px" width="auto">
                    </a>
                    <a href="images/coffeee.jpg" data-fancybox="gallery">
                        <img src="images/coffeee.jpg" height="700px" width="auto">
                    </a>
                    <a href="images/capsules.jpg" data-fancybox="gallery">
                        <img src="images/capsules.jpg">
                    </a>
                    <a href="images/beans1.jpg" data-fancybox="gallery">
                        <img src="images/beans1.jpg" height="700px" width="auto">
                    </a>
                </div>
            </div>

        </section>

        <!--        END OF GALLERY-->

        <!--        CONTACT US-->
        <section class="contact-us" id="contact-us">
            <div style="background-color: black">
                <div class="contact">
                    <div class="come">
                        <h1>COME ON IN</h1>
                        <hr>
                        <h3><i>WEEKDAYS</i></h3>
                        <p>8 AM - 8 PM</p>
                        <h3><i>WEEKENDS</i></h3>
                        <p>8 AM - 6 PM</p>

                        <h3>CONTACT PHONE</h3>

                        <p><a href="tel:+(000) 111 222 333">+(000) 111 222 333</a></p>
                        <h3>ADDRESS</h3>
                        <p><a href="https://www.google.co.uk/maps/place/Nespresso+Boutique+Vilnius/@54.6872438,25.2796528,17z/data=!3m1!4b1!4m5!3m4!1s0x46dd958aec4981d9:0xe9ddcb491f336e39!8m2!3d54.6872407!4d25.2818468" target="_blank">543 TN, doula street NY, New York</a></p>
                    </div>
                    <div class="contactimg">
                        <img src="images/contactuscoffee.jpg" height="700px" width="130%">
                    </div>
                    <div class="form">
                        <form action="index.php" method="post">

                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Your Full Name.." required>

                            <label for="email">Your Email</label>
                            <input type="text" id="email" name="email" placeholder="Your Email.." required>

                            <label for="country">Country</label>
                            <select id="country" name="country" required>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Canada">Canada</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                                <option value="Australia">Australia</option>
                                <option value="New zeland">New Zeland</option>
                                <option value="Philippines">Philippines</option>
                            </select>

                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Write something.." style="height:100px" required></textarea>

                            <input type="submit" value="submit" name="submit">

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!--        END CONTACT-US-->
        <!--        FOOTER-->

        <footer class="footer">
            <div style="background-color: black">
                <hr class="footerhr">
                <div class="all-footer">
                    <div class="footerlogo">
                        <img src="images/nespressologo.png" height="40px" width="130px">
                    </div>
                    <div class="copyright">
                        <p> &copy; COPYRIGHT 2020 <a href="https://www.nespresso.com/uk/en/home" target="_blank">NESPRESSO.COM</a> ALL RIGHTS RESERVED.</p>
                    </div>
                    <div class="social-icons">
                        <a href="https://www.snapchat.com/" target="_blank"><i class="fab fa-snapchat"></i></a>
                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest"></i></a>
                        <a href="https://en.wikipedia.org/wiki/Google%2B" target="_blank"><i class="fab fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/custom.js"></script>
        <script scr="js/jquery.fancybox.min.js"></script>
    </body>
</html>
