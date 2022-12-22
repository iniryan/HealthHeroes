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
					<form method="post" id="signup-form" action="./page/php/process/prosesUser.php">
                        <div class="heading-right">
                            <h1>Sign up</h1>
                            <h6>
                                Already have an account?
                                <a href="./page/php/login.php">Log in</a>
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
    <?php 
        require './page/php/class/User.php';

        // require './page/php/class/Administrator.php';
    ?>
    <div class="container">
        <table style="border: 1px solid black; padding: 12px; margin-right: 12px; text-align: center;">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>dateCreated</th>
                </tr>
            </thead>
            <tbody>
                <!-- looping data from database -->
                
                <?php 
                // var_dump(User::getUser());
                foreach(User::getUser() as $me): ?>
                <tr>
                    <td id="fullname"><?= $me['fullname']; ?></td>
                    <td id="username"><?= $me['username']; ?></td>
                    <td id="email"><?= $me['email']; ?></td>
                    <td id="password"><?= $me['password']; ?></td>
                    <td id="role"><?= $me['role']; ?></td>
                    <td id="dateCreated"><?= $me['dateCreated']; ?></td>
                </tr>
                <?php endforeach; ?>
        </table>
    </div>
    <!-- <script src="./assets/js/User.js"></script> -->
</body>
</html>
