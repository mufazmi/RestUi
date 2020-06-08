<?php require_once dirname(__FILE__).'/include/header.php' ?>
<?php require_once dirname(__FILE__).'/include/api.php' ?>

    <div class="row">
        <div class="col l4 offset-l4 m6 offset-m3 s8 offset-s2" >
            <div class="card bg" style=" margin-top: 40%; margin-right: 30px; margin-left: 30px; opacity: 0.9; border-radius: 35px;">
                <div class="card-content">
                    <div class="card-title center ">Admin Panel</div>
                    <b><p class="red-text center">
                            <?php
                                if(isset($error) && $error==1 || isset($error) && $error==0)
                                {
                                        echo $message;
                                }
                            ?>
                     </p></b>
                    <form action="" method="post">
                        <div class="input-field">
                            <i class="material-icons prefix">person</i>
                            <input type="text" name="email" value="SocialCodia@gmail.com" id="email">
                            <label for="email">Email Address</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" value="farooqui" name="password" id="password">
                            <label for="password">Password</label>
                        <p class="right" style="margin-bottom:13px"><a href="forgotPassword" class="center"> Forgot Password?</a></p>
                        </div>
                        <div class="input-field">
                            <input type="submit"  name="login" value="Login" class="btn" id="login" style="width: 100%; border-radius: 15px;">
                        </div>
                        <p class="center">Don't have an account?<a href="register" class="center"> Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once dirname(__FILE__).'/include/footer.php' ?>

