<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GoodTech</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



    <!-- ===================================== 
||     PLUGINS FOR CSS                   ||
 =======================================-->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="views/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <!-- ===================================== 
||     PLUGINS FOR JAVASCRIPT            ||
 =======================================-->
    <!-- jQuery 3 -->
    <script src="views/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="views/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="views/dist/js/adminlte.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">


    <?php
    if (isset($_SESSION["user-Session"]) && $_SESSION["user-Session"] == "valid") {
        echo '<div class="wrapper">';

        include "modules/header.php";
        // <!-- =============================================== -->
        // <!-- =============================================== -->
        include "modules/side-bar.php";
        // <!-- =============================================== -->
        if (isset($_GET["redirect"])) {
            if (
                $_GET["redirect"] == "home" ||
                $_GET["redirect"] == "users" ||
                $_GET["redirect"] == "categories" ||
                $_GET["redirect"] == "products" ||
                $_GET["redirect"] == "clients" ||
                $_GET["redirect"] == "sales" ||
                $_GET["redirect"] == "create-sales" ||
                $_GET["redirect"] == "reports" ||
                $_GET["redirect"] == "logout"
            ) {
                include "modules/" . $_GET["redirect"] . ".php";
            } else {
                include "modules/404.php";
            }
        } else {
            include "modules/home.php";
        }
        // <!-- =============================================== -->
        include "modules/footer.php";

        echo '</div>';
    } else {
        include "modules/login.php";
    }
    ?>


    <script src="views/js/templates.js"></script>
</body>

</html>