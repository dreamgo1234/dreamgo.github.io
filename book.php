<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-eqiv="x-ua-compatible" content=-IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>book</title>
    <!-- swiper css link -->

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file  -->

    <link rel="stylesheet" href="css\style.css">
</head>

<body>

    <!-- header section starts -->

    <section class="header">
        <a href="home.php" class="logo">Dream Go travel</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header section ends -->

    <div class="heading" style="background:url(images/header-bg-3.png.jpg)  no-repeat">
        <h3>Book now</h3>
    </div>




   
    <!-- booking section starts -->

    <section class="booking">

        <h1 class="heading-title">book your trip</h1>
        <form action="book_form.php" methot="post" class="book-form">

            <div class="flex">

                <div class="inputbox">

                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">

                </div>

                <div class="inputbox">

                    <span>email:</span>
                    <input type="email" placeholder="enter your email" name="email">

                </div>

                <div class="inputbox">

                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">

                </div>

                <div class="inputbox">

                    <span>address:</span>
                    <input type="text" placeholder="enter your address" name="address">

                </div>

                <div class="inputbox">

                    <span>where to:</span>
                    <input type="text" placeholder="place you want to visit" name="location">

                </div>

                <div class="inputbox">

                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">

                </div>

                <div class="inputbox">

                    <span>arrivals:</span>
                    <input type="date" name="arrivals">

                </div>

                <div class="inputbox">

                    <span>leaving:</span>
                    <input type="date" name="leaving">

                </div>

            </div>

            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>

    <!-- booking section ends -->




    <!-- footer section starts -->

    <section class="footer">



        <div class="box-container">

            <div class="box">

                <h3>Quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>

            </div>

            <div class="box">

                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> About us </a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy Policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>

            </div>

            <div class="box">

                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-956-8977</a>
                <a href="#"> <i class="fas fa-phone"></i> +111-955-8977</a>
                <a href="#"> <i class="fas fa-envelope"></i> # gamail id dalni h </a>
                <a href="#"> <i class="fas fa-map"></i> Kanpur,U.P 208017</a>

            </div>

            <div class="box">

                <h3>Follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>

            </div>

        </div>

        <div class="credit">created by<span>mr.web designer</span>|all rights are reserved!</div>

    </section>

    <!-- footer section end -->




    <!-- swiper js link -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link -->

    <script src="js\script.js"></Script>



</body>

</html>