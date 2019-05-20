<body>
<div class="page login-page">
    <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                    <div class="info d-flex align-items-center">
                        <div class="content">
                            <div class="logo">
                                <h1>Dashboard</h1>
                            </div>
                            <p>Welcome back to GGH Gbagada General Hospital <h4>File Tracking System </h4> </p>
                            <p>Note: All staff are Advice to Keep In Mind that Nutrition is a Key fact as food description to our patient </p>
                            <h4>Login Detail:</h4>

                            <p> Password is Case Sensitive</br>Username: Email or Patient ID </br>Password: Surname</p>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <?=form_open('login/process-login', array('class' => 'form-validate'))?>
                                <div class="form-group">
                                    <input id="login-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                                    <label for="login-username" class="label-material">User Name</label>
                                </div>
                                <div class="form-group">
                                    <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                                    <label for="login-password" class="label-material">Password</label>

                                </div><!-- <a id="login" href="login.inc.php" class="btn btn-primary">Login</a> -->
                                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                                <button id="Submit" type="Submit" name="Submit" class="btn btn-primary">Login</button>
                            <?=form_close()?>
                            <a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="signup.php" class="signup">Signup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights text-center">
        <p>Design by <a href="https://codeholla.com" class="external" >Gbagada General Hospital</a>
        </p>
    </div>
</div>