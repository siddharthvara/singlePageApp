<?php
//$url = $_SERVER['APP_URL'].$_SERVER['REQUEST_URI'];
//$url = $_SERVER['REQUEST_URI'];
//echo $url;
//$url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
?>
<!DOCTYPE html>
<html lang="en" ng-app = "myModule">

<head>
<base href= "" >

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Angular Single page App</title>

    <!-- Bootstrap core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/simple-sidebar.css" rel="stylesheet">

    <script src="./Script/angular.min.js"></script>
    <script src="./Script/angular-route.min.js"></script>
    
    

</head>

<body>
        <div id="header">
            <h3>Singal Page Demo application</h3>
        </div>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            <!--    <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li> -->
                <li>
                    <a href="#/dashboard" class="side">Dashboard</a>
                </li>
                <li>
                    <a href="#/about" class="side">About</a>
                </li>
                <li>
                    <a href="#/contact" class="side">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
            <div class="container-fluid">
            <div ng-view></div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(".side").click(function(e) {
        //e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<script src="Script/Script.js"></script>
</body>

</html>
<style>
#header{
    border: 1px solid;
    height: 89px;
    background-color: rgba(0,123,255,.25);
}
</style>
