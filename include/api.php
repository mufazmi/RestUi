<?php

require_once dirname(__FILE__).'/Constants.php';
$apiUrl = API_URL;

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $endPoint = '/createUser';
    $url = $apiUrl.$endPoint;
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,"name=$name&email=$email&password=$password");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($response);
    $error = $response->error;
    $message = $response->message;
}

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $endPoint = '/login';
    $url = $apiUrl.$endPoint;
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,"email=$email&password=$password");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($response);
    $error = $response->error;
    $message = $response->message;
    if($error==false)
    {
        $user= $response->user;
        $name = $user->name;
        $email = $user->email;
        $id = $user->id;
        $token = $user->token;
        setcookie("token",$token);
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
        header("LOCATION:dashboard");
    }
}


if(isset($_POST['forgotPassword']))
{
    $email = $_POST['email'];
    $endPoint = '/forgotPassword';
    $url = $apiUrl.$endPoint;
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,"email=$email");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($response);
    $error = $response->error;
    $message = $response->message;
    if($error==false)
    {
        $_SESSION['resetEmail'] = $email;
        header("LOCATION:resetPassword");
    }
}

if(isset($_POST['changePassword']))
{
    if (is_string($_COOKIE['token'])) 
    {
        $token = $_COOKIE['token'];
    }
    $header[] = "token: $token";
    $email = $_SESSION['email'];
    $password = $_POST['password'];
    $newpassword = $_POST['newPassword'];
    $endPoint = '/updatePassword';
    $url = $apiUrl.$endPoint;
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,"email=$email&password=$password&newpassword=$newpassword");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response);
    $error = $response->error;
    $message = $response->message;
}

if(isset($_POST['resetPassword']))
{
    $email = $_SESSION['resetEmail'];
    $otp = $_POST['otp'];
    $otp = str_replace(' ','',$otp);
    $newPassword = $_POST['newPassword'];
    $endPoint = '/resetPassword';
    $url = $apiUrl.$endPoint;
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,"email=$email&otp=$otp&newPassword=$newPassword");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response);
    $error = $response->error;
    $message = $response->message;
}
?>

