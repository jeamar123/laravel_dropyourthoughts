<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DropYourThoughts</title>
    <link rel="shortcut icon" href="{{ asset('img/logo/jl-logo-blue.png') }}" type="image/ico">

    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="../assets/main/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/main/css/header.css">
    <link rel="stylesheet" type="text/css" href="../assets/main/css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../assets/main/css/responsive.css">
  </head>
  <body ng-controller="mainController">

    <div id="main-content">
      <div ui-view="header"></div>
      <div ui-view="main"></div>
    </div>

    <div id="loader-content">
      <div class="main-body-loader">
        <div class="loader"></div>
      </div>
    </div>
    
  </body>

  <script type="text/javascript" src="<?php echo $server; ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo $server; ?>/js/Chart.min.js"></script>
  <script type="text/javascript" src="<?php echo $server; ?>/js/angular.min.js"></script>
  <script type="text/javascript" src="<?php echo $server; ?>/js/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo $server; ?>/js/angular-chart.js"></script>
  <script type="text/javascript" src="<?php echo $server; ?>/js/angular-ui-router.min.js"></script>
  <script type="text/javascript" src="<?php echo $server; ?>/js/angular-local-storage.min.js"></script>
  <script type="text/javascript" src="<?php echo $server; ?>/js/sweetalert.min.js"></script>
  
  
  <script type="text/javascript" src="<?php echo $server; ?>/assets/main/process/app.js"></script>


  <script type="text/javascript" src="<?php echo $server; ?>/assets/main/process/controllers/mainController.js"></script>

  <script type="text/javascript" src="<?php echo $server; ?>/assets/main/process/factories/factories.js"></script>

  <script type="text/javascript" src="<?php echo $server; ?>/assets/main/process/directives/authDirective.js"></script>


  <script type="text/javascript" src="<?php echo $server; ?>/assets/main/process/services/services.js"></script>

  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOzaOYgvdwnATwVIvSpYixj32rTLbVF3k"></script> -->
</html>