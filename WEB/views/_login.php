<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php require_once('_css.php')?>
    <?php require_once('_js.php')?>
    <title>Sign In</title>
</head>

<body>
    <!--TOP-->
    <?php require_once('_header.php') ?>

<!--MID-->

    <section class="Sx">
        <div class="Cx">
            <div class="user signinBx">
                <div class="imgBx">
                    <img class="Imx" src="../images/login.jpg" />
                </div>
                <div class="formBx">

                <!-- <?php if($error): ?>
                <div class="alert alert-danger"> <?php echo $error ?> </div>
                <?php endif; ?> -->

                    <form action="login.php" method = "post">
                    <h2 class="Hx">Sign in</h2>
                        <input class="Ipx" type="text" name = "username" placeholder="Username" />
                        <input class="Ipx" type="password" name = "password" placeholder="Password" />
                        <input class="Ipx Ix" type="submit" value="Log in" />
                        <p class="signup">
                            don`t have an account ? <a href="_register.php">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

<!--BOTTOM-->
<?php require_once('_footer.php') ?>
</body>
</html>