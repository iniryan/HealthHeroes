<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in HealthHeroes.</title>
    <link rel="stylesheet" href="../../assets/css/ryan.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="inner-box">
                <div class="left">
                    <div class="logo">
                        <h4>HealthHeroes.</h4>
                    </div>
                    <div class="heading-left">
                        <img src="../../assets/img/img-1.png" alt="our-family">
                        <h1>Save your beloved person with us.</h1>
                        <h6>
                            Discovers Indonesia's best community of organ donors and our hospital partners.
                        </h6>
                    </div>
                </div>
                <div class="right">
                    <form method="post" id="login-form" action="./process/prosesLogin.php">
                        <div class="heading-right">
                            <h1>Log in</h1>
                            <h6>
                                Don't have an account?
                                <a href="../../index.php">Sign up</a>
                            </h6>
                        </div>
                        <div class="input-wrap">
                            <label>Email</label>
                            <input type="email" name="email" id="email" minlength="4" placeholder="example@test.com" class="input-field" autocomplete="off" required/>
                            <span class="error-msg"></span>
                        </div>
                        <div class="input-wrap">
                            <label>Password</label>
                            <input type="password" name="password" id="password" minlength="4" placeholder="••••••••" class="input-field" autocomplete="off" required/>
                            <span class="error-msg"></span>
                        </div>

                        <div class="input-wrap">
                            <button type="submit" value="login" class="btn-login">Log in</button>
                        </div>

                        <p class="text">
                            Forgotten your password? <br>
                            <a href="#">Get help</a> signing in
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="../assets/js/User.js"></script> -->
</body>    
</html>