<ul id="slide-out" class="sidenav sidenav-fixed ">
        <li class="user-view">
            <div class="background">
                <img src="img/dash_bg.jpg" class="responsive-img" alt="">
            </div>
            <img src="img/user.png" alt="" class="responsive-img circle" style=" border: 1px solid black;">
            <span class="name white-text"><?php echo $_SESSION['name']; ?></span>
            <span class="email white-text"><?php echo $_SESSION['email']; ?></span>
        </li>
        <li><a href="dashboard"><i class="material-icons">dashboard</i> Dashboard</a></li>
        <li><a href="users"><i class="material-icons">group</i> Users</a></li>
        <li><a href=""><i class="material-icons">dashboard</i> Dashboard</a></li>
        <li><a href=""><i class="material-icons">dashboard</i> Dashboard</a></li>
        <li><a href="settings"><i class="material-icons">settings</i> Settings</a></li>
        <div class="divider"></div>
        <li><a href="logout"><i class="material-icons">logout</i>Logout</a></li>
        <li><a href=""><i class="material-icons">info</i>About Us</a></li>
    </ul>