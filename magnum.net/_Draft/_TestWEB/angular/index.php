<!DOCTYPE html>
<html ng-app>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js"></script>
    <script src="./js/todo.js"></script>
    <link rel="stylesheet" href="./css/todo.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-zF4BRsG/fLiTGfR9QL82DrilZxrwgY/+du4p/c7J72zZj+FLYq4zY00RylP9ZjiT" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-default">

</nav>
<div class="container">
    <div class="jumbotron">
        <?php
        print_r($_GET);
        ?>
    </div>
</div>
</body>
</html>