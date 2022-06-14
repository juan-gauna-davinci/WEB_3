<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="images/b1.jpg" />
    <?php require_once('_css.php')?>
    <?php require_once('_js.php')?>
    <title>Home</title>
</head>

<body>
    <!--TOP-->
    <?php require_once('_header.php') ?>

    <!--MID-->
    <section>
        <!-- Slideshow container -->
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="../images/ba1.jpg" style="width: 100%"  />
            </div>

            <div class="mySlides fade">
                <img src="../images/ba2.jpg" style="width: 100%" />
            </div>

            <div class="mySlides fade">
                <img src="../images/ba3.png" style="width: 100%" />
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br />

        <!-- The dots/circles -->
        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>
    
    <section id="pro">
        <div class="container">
            <div class="card">
                <div class="card_header">
                    <img src="../images/play4.jpg" alt="" />
                </div>
                <div class="card_body">
                    <h4 class="title">Playstation 4</h4>
                    <h4 class="sub_title">$45000</h4>
                </div>
                <div class="card_footer">
                    <a href="#">Agregar al carrito</a>
                </div>
            </div>

            <div class="card">
                <div class="card_header">
                    <img src="../images/play5.jpg" alt="" />
                </div>
                <div class="card_body">
                    <h4 class="title">Playstation 5</h4>
                    <h4 class="sub_title">$175000</h4>
                </div>
                <div class="card_footer">
                    <a href="#">Agregar al carrito</a>
                </div>
            </div>

            <div class="card">
                <div class="card_header">
                    <img src="../images/xbox.jpg" alt="" />
                </div>
                <div class="card_body">
                    <h4 class="title">Xbox one</h4>
                    <h4 class="sub_title">$43000</h4>
                </div>
                <div class="card_footer">
                    <a href="#">Agregar al carrito</a>
                </div>
            </div>

            <a href="#">
                <div class="card">
                    <div class="card_header">
                        <img src="../images/seriex.jpg" alt="" />
                    </div>
                    <div class="card_body">
                        <h4 class="title">Xbox Serie X</h4>
                        <h4 class="sub_title">$145000</h4>
                    </div>
                    <div class="card_footer">
                        <a href="#">Agregar al carrito</a>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!--BOTTOM-->
    <?php require_once('_footer.php') ?>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides((slideIndex += n));
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides((slideIndex = n));
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</body>

</html>