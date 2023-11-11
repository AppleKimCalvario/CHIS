<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login | CHIS</title>

        <!-- CSS file -->
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <!--<section>
            <div class="imgbx">
                <img src="images/mho-logo.png">
            </div>
            <div class="contentbx">
                <div class="formbx">
                    <h2>Login</h2>
                    <form>
                        <div class="inputbx">
                            <span>Username</span>
                            <input type="text" name="">
                        </div>
                        <div class="inputbx">
                            <span>Password</span>
                            <input type="text" name="">
                        </div>
                        <div class="inputbx">
                            <input type="submit" value="Login" name="">
                        </div>
                    </form>
                </div>
            </div>
        </section>-->

        <section class="container forms">
            <div class="imgbx">
                <img src="images/mho-logo.png">
            </div>
            <div class="form login">
                <div class="form-content">
                    <h1 class="Hr">LOG-IN</h1>
                    <form method="POST" action="php/signup.php">
                        <div class="field input-field">
                            <input type="username" placeholder="Username" class="input" name="username">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password" name="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button name="login_user">Login</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </body>

    </html>