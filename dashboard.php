<?php require_once dirname(__FILE__).'/include/headerDashboard.php' ?>
<?php require_once dirname(__FILE__).'/include/navbar.php' ?>
<?php require_once dirname(__FILE__).'/include/sidenav.php' ?>
    <div class="row mufazmi">
        <div class="col s12 m12 l3">
            <div class="card-panel z-depth-0" style="padding: 15px">
                <div class="card-image center">
                    <img src="img/user.png" class="circle responsive-img " style="width: 120px; border: 3px solid gray;" alt="">
                    <h5 class="center"><?php echo $_SESSION['name']; ?></h5>
                    <div class="divider"></div>
                    <table >
                        <thead>
                            <tr>
                                <th>Addmission</th>
                                <td class="blue-text">18001</td>
                            </tr>
                            <tr>
                                <th>Roll Number</th>
                                <td class="blue-text">101</td>
                            </tr>
                            <tr>
                                <th>class</th>
                                <td class="blue-text">Class 1</td>
                            </tr>
                            <tr>
                                <th>Section</th>
                                <td class="blue-text">A</td>
                            </tr>

                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col s12 m12 l9">
            <div class="card z-depth-0">
                <ul class="tabs">
                    <li class="tab"><a href="#profile" class="">Profile</a></li>
                    <li class="tab"><a href="#images" class="">Images</a></li>
                    <li class="tab"><a href="#videos" class="">Videos</a></li>
                    <li class="tab"><a href="#documents" class="">Documents</a></li>
                </ul>
                <div id="profile" class="col s12 white " >
                        <div class="card"  style="padding-left:10px; padding-right: 10px; ">
                            <table >
                                <tbody>  
                                    <tr>
                                        <th>Date Of Birth</th>
                                        <td>04/07/2000</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <td>
                                            General  
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Mobile Number</th>
                                        <td>9867503256</td>
                                    </tr>
                                    <tr>
                                        <th>Caste</th>
                                        <td>Farooqui</td>
                                    </tr>
                                    <tr>
                                        <th>Religion</th>
                                        <td>Hidden</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>socialcodia@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card"  style="padding-left:10px; padding-right: 10px; ">
                            <div class="left">
                                <h5>Address</h5>
                            </div>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Current Address</th>
                                        <td>Social Codia, Kausa, Mumbra, Thane, Maharashtra, 400612</td>
                                    </tr>
                                    <tr>
                                        <th>Permanent Address</th>
                                        <td>Social Codia, Kausa, Mumbra, Thane, Maharashtra, 400612</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                </div>
                <div id="images" class="col s12">Images Images Images Images Images Images Images Images Images</div>
                <div id="videos" class="col s12">Video Video Video Video Video Video Video Video Video Video Video Video </div>
                <div id="documents" class="col s12">Document Document Document Document Document Document Document Document Document </div> 
            
            </div>
        </div>
    </div>

    <!-- right sidenav's profile pic dropdown -->
    <ul class="dropdown-content" id="dropdown">
            <li><a href="logout"><i class="material-icons">logout</i>Logout</a></li>       
    </ul>
<?php require_once dirname(__FILE__).'/include/footer.php' ?>
