<?php require_once dirname(__FILE__).'/include/headerDashboard.php' ?>
<?php require_once dirname(__FILE__).'/include/navbar.php' ?>
<?php require_once dirname(__FILE__).'/include/constants.php' ?>



<?php
$domain = API_URL;
$endPoint = "users";
if (isset($_COOKIE['token'])) 
{
	$tokenCookie = $_COOKIE['token'];
}
$url = $domain.$endPoint;
$header[] = "token: $tokenCookie";
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$response = json_decode($response);
$users = $response->users;
curl_close($ch);
?>

<div class="mufazmi">

<!-- <?php print_r($response); ?> -->
      <table class="striped highlight">
        <thead>
          <tr>
          	  <th class="center">Sr.No</th>
              <th>Image</th>
              <th>Name</th>
              <th>Email</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $count = 1;
       		foreach ($users as $userList) 
       		{	
       			echo "<tr>";
       			 ?><td class="center"><?php echo $count."</td>";
       			 ?><td><img src="img/user.png" class="circle responsive-img " style="width: 70px; border: 3px solid gray;" alt=""></td><?php
       			echo "<td><b>".$userList->name."</b></td>";
       			echo "<td>".$userList->email."</td>";
       			echo "</tr>";	
       			$count++;
       		}	
        ?>
        </tbody>
      </table>
</div>



    <!-- right sidenav's profile pic dropdown -->
    <ul class="dropdown-content" id="dropdown">
            <li><a href="include/logout"><i class="material-icons">logout</i>Logout</a></li>       
    </ul>
<?php require_once dirname(__FILE__).'/include/sidenav.php' ?>
<?php require_once dirname(__FILE__).'/include/footer.php' ?>