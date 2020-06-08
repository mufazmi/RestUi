<?php require_once dirname(__FILE__).'/include/header.php' ?>
<?php require_once dirname(__FILE__).'/include/api.php' ?>
<?php
if(!isset($_SESSION['resetEmail']))
{
    header("LOCATION:forgotPassword");
}
?>

    <div class="row">
        <div class="col l4 offset-l4 m6 offset-m3 s8 offset-s2" >
            <div class="card bg" style=" margin-top: 32%; margin-right: 30px; margin-left: 30px; opacity: 0.9; border-radius: 35px;">
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
                            <input type="text" name="email" value="<?php echo $_SESSION['resetEmail']; ?>" id="email" readonly>
                            <label for="email">Email Address</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" name="otp" id="otp">
                            <label for="otp">Enter OTP</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" value="farooqui" name="newPassword" id="newPassword">
                            <label for="newPassword">Enter New Password</label>
                        </div>
                        <div class="input-field">
                            <input type="submit"  name="resetPassword" value="Reset Password" class="btn" id="resetPassword" style="width: 100%; border-radius: 15px;">
                        </div>
                        <p class="center">Back to<a href="login" class="center"> Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once dirname(__FILE__).'/include/footer.php' ?>

