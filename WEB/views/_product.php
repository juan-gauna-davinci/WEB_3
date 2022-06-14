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


</body>

</html>