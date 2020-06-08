<?php require_once dirname(__FILE__).'/include/headerDashboard.php' ?>
<?php require_once dirname(__FILE__).'/include/navbar.php' ?>
<?php require_once dirname(__FILE__).'/include/api.php' ?>

<div class="mufazmi container">
    <div class="row">
        <div class="col s12 m8 offset-m2 l6 offset-l3"><br><br><br><br><br><br>
            <div class="card-panel z-depth-0 center">
                <span class="card-title center">Change Password</span>
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
                        <i class="material-icons prefix">lock</i><input type="password" name="password" id="password">
                        <label for="password">Enter Current Password</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i><input type="password" name="newPassword" id="newPassword">
                        <label for="newPassword">Enter New Password</label>
                    </div>
                    <div class="input-field">
                        <input type="submit" name="changePassword" id="changePassword" value="Change Password" class="btn" style="width:100%">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



    <!-- right sidenav's profile pic dropdown -->
    <ul class="dropdown-content" id="dropdown">
            <li><a href="include/logout"><i class="material-icons">logout</i>Logout</a></li>       
    </ul>
<?php require_once dirname(__FILE__).'/include/sidenav.php' ?>
<?php require_once dirname(__FILE__).'/include/footer.php' ?>
