<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <style>
        header, .mufazmi, footer {
        padding-left: 300px;
      }
  
      @media only screen and (max-width : 992px) {
        header, .mufazmi, footer {
          padding-left: 0;
        }
      }
    </style>
  <body bgcolor="#ececec">
  
<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("LOCATION:index.php");
}
?>