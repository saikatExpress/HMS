<?php
include_once 'library/session.php';
Session::checkSession();
?>
<?php include_once 'library/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Hospital Management System</title>

    <!--Font famile of google font link--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Kanit:wght@300&family=Libre+Baskerville&family=Lobster&family=Oswald:wght@500&family=Pacifico&family=Satisfy&family=Space+Mono:ital,wght@1,400;1,700&family=Vollkorn:ital@1&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali&display=swap" rel="stylesheet">
    <!--Font famile of google font link--->

    <link rel="shortcut icon" type="image/png" href="images/help-line.png" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>



    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />


    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>


    <header>
        <div class="row customRow">

            <div class="admin_side_bar">

                <div class="side_bar_images">
                    <img src="logos/images.png" alt="no images">
                </div>

                <div class="side_menu_item">

                    <div class="side_menu">
                        <a href="">View Pateint</a>
                    </div>

                    <div class="side_menu">
                        <a href="">View Appointment</a>
                    </div>

                    <div class="side_menu">
                        <a href="doctor.php">Add Doctor</a>
                    </div>

                    <div class="side_menu">
                        <a href="">View Doctor List</a>
                    </div>

                    <div class="side_menu">
                        <a href="">Add Stuff</a>
                    </div>

                    <div class="side_menu">
                        <a href="">View Stuff List</a>
                    </div>

                    <div class="side_menu">
                        <a href="">Delete Doctor</a>
                    </div>


                </div>

            </div>

            <div class="admin_header">

                <div class="admin_head_flex">
                    <div class="amdin_header_block">
                        <h4>Admin Panel</h4>
                    </div>

                    <div class="admin_info">
                        <h2>Shakawat Hosen Saikat</h2>
                        <img src="images/saikat.jpg" alt="no images">
                        <a href="logout.php">Log out</a>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <div class="main_body">