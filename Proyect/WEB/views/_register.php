<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php require_once("_css.php")?>
    <?php require_once('_js.php')?>
    <title>Sign Up</title>
</head>

<body>
    <!--TOP-->
    <?php require_once('_header.php') ?>

<!--MID-->

    <section class="Sx">
        <div class="Cx">
            <div class="user signinBx">
                <div class="imgCx">
                    <img class="Imx" src="images/register.jpg" />
                </div>
                <div class="formCx">
                    <form>
                        <h2 class="Hz">Create an account</h2>
                        <input class="Ipz" type="text" placeholder="Username" />
                        <input class="Ipz" type="text" placeholder="Emial Address" />
                        <input class="Ipz" type="password" placeholder="Create Password" />
                        <input class="Ipz" type="password" placeholder="Confirm Password" />
                        <input class="Ipz Iz" type="submit" value="Sign Up" />
                        <p class="signup">
                            Already have an account ? <a href="login.php">Sign in</a>
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