<!DOCTYPE html>
<html lang="en" ng-app="commentApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comment App</title>
    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <link rel="stylesheet" href="css/style.css"> <!-- load fontawesome -->
    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
    <script src="js/angular-ui-router.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <script src="js/controllers/mainCtrl.js"></script>
    <script src="js/services/commentService.js"></script>
    <script src="js/app.js"></script>
  </head>
    <body class="container">
      <div class="col-md-8 col-md-offset-2">
        <div ui-view="nav"></div>
        <div class="page-header">
          <h2>Laravel and Angular Single Page Application</h2>
          <h4>Commenting System</h4>
        </div>
        <div ui-view="form"></div>
          <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
        </div>
    </body>
</html>
