<?php require_once dirname(__FILE__).'/include/header.php' ?>
<?php require_once dirname(__FILE__).'/include/api.php' ?>

    <div class="row">
        <div class="col l4 offset-l4 m6 offset-m3 s8 offset-s2" >
            <div class="card bg" style=" margin-top: 40%; margin-right: 30px; margin-left: 30px; opacity: 0.9; border-radius: 35px;">
                <div class="card-content">
                    <div class="card-title center ">Forgot Password</div>
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
                            <input type="submit"  name="forgotPassword" value="Forgot Password" class="btn" id="forgotPassword" style="width: 100%; border-radius: 15px;">
                        </div>
                        <p class="center">Back to<a href="login" class="center"> Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once dirname(__FILE__).'/include/footer.php' ?>
