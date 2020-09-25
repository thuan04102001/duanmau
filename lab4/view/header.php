<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Kodinger">
    <meta name="keyword" content="Kodinger, template, html5, css3, bootstrap4">
    <meta name="description" content="HTML5 and CSS3 Template Based on Bootstrap 4">
    <title>Blog Maketing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/../view/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="../view/css/style.css">
    <link rel="stylesheet" href="../view/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../view/js/jquery-3.5.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(document).scrollTop() > 0) {
                    $(".header").addClass("test");
                } else {
                    $(".header").removeClass("test");
                }
            });
        });
        </script> -->
</head>

<body>
    <header>
        <div class="allheader">
            <div class="row header" id="header">
                <div class="all80">
                    <div id="trangchu" class="h1">
                        <a href="index.php"><img src="../view/images/avt1.jpg" alt=""></a>
                    </div>
                    <div class="h2">
                    <form>
                        <input type="search" placeholder="Search">
                    </form>
                    </div>
                    <div class="h3 menutop">
                        <a href="index.php" id="home" onclick="backhome()">Home</a>
                        <a href="index.php?act=product" id="product" onclick="toproduct()">Product</a>
                        <!-- <a  id="service" onclick="toservice()">Service</a>
                        <a  id="project" onclick="toproject()">Project</a> -->
                        <a href="index.php?act=help" id="help" onclick="tohelp()">Need help?</a>
                    </div>
                    <?php
                        if(isset($_SESSION['sessionid'])&&($_SESSION['sessionid']>0)){
                    ?>
                        <div class="h4 menutop1">
                            <a  href="#" class="checkuser">
                            <i class='far'>&#xf2bd;</i>
                            <span ><?=$_SESSION['suser']?></span>
                            </a>
                            <a class="hover" href="index.php?act=user&&logout=1" id="login" >Đăng xuất</a>
                        </div>
                    <?php
                        }else{
                    ?>
                        <div class="h4 menutop1">
                            <ul>
                                <li><a class="hover">Tài khoản</a>
                                    <ul>
                                        <li>
                                            <a href="login.php" id="login">Đăng nhập</a>
                                        </li>
                                        <hr class="ml">
                                        <li>
                                            <a href="regis.php" id="regis">Đăng ký</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>                        
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
</header>