<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign up HealthHeroes.</title>
	<link rel="stylesheet" href="./assets/css/ryan.css">
</head>
<body>
	<div class="container signcontainer">
        <div class="box signbox">
            <div class="inner-box">
                <div class="left-sign">
					<form method="post" id="signup-form" action="proses.php">
                        <div class="heading-right">
                            <h1>Sign up</h1>
                            <h6>
                                Already have an account?
                                <a href="./page/login.html">Log in</a>
                            </h6>
                        </div>
                        <div class="input-wrap">
                            <label>Full Name</label>
                            <input type="text" name="fullname" id="fullname" placeholder="John Doe" class="input-field" autocomplete="off" required/>
                            <span class="error-msg"></span>
                        </div>
                        <div class="input-wrap">
                            <label>Username</label>
                            <input type="text" name="username" id="username" minlength="4" placeholder="johnD" class="input-field" autocomplete="off" required/>
                            <span class="error-msg"></span>
                        </div>
                        <div class="input-wrap">
                            <label>Email</label>
                            <input type="email" name="email" id="email" placeholder="example@test.com" class="input-field" autocomplete="off" required/>
                            <span class="error-msg"></span>
                        </div>
						<div class="input-wrap">
                            <label>Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="input-field" autocomplete="off" required/>
                            <span class="error-msg"></span>
                        </div>
                        <div class="input-wrap">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="input-field" autocomplete="off" required/>
                            <span class="error-msg"></span>
                        </div>

                        <div class="input-wrap">
                            <button type="submit" value="signup" class="btn-signup">Sign up</button>
                        </div>
                    </form>
                </div>
                <div class="right-sign">
                    <div class="logo">
                        <h4>HealthHeroes.</h4>
                    </div>
                    <div class="heading-left">
                        <img src="./assets/img/img-2.png" alt="our-community">
                        <h1>Create your account to contribute in our community</h1>
                        <h6>
                            Get the information about donation and volunteer event through our channel
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="./assets/js/User.js"></script> -->
</body>
</html>