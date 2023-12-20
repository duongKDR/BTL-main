<?php

include('db/db.php');
include('functions.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/sky.png" type="image/x-icon" />
    <title>BULE SKY</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="fonts/fontawesome-free-6.2.0-web/css/all.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <header class="sticky">
        <section class="menu top">
            <nav class="menu left mg">
                <ul>
                    <li><a href="home.php" >Trang chủ ||</a></li>

                    <div class="dropdown">
                        <li><i class="fa-regular fa-circle-question"></i><a href="contact.php"  >Liên hệ</a></li>
                        <div class="hidden boder">
                            <!-- <?php
                            if (!isset($_SESSION['user_email'])) {
                                echo "Xin chào";
                            } else {
                                echo " Xin chào: " . $_SESSION['user_email'] . "";
                            }
                            ?> -->
                        </div>
                    </div>
                    <li><i class="fa-brands fa-facebook"></i><i class="fa-brands fa-instagram"></i></li>
                </ul>
            </nav>
            <nav class="menu right mg">
                <ul>
                 

                    </div>
                 
                    <div class="dropdown">
                        <li><i class="fa-solid fa-globe"></i><a href="">Tiếng Việt</a><i class="fa-sharp fa-solid fa-angle-down"></i></li>

                    </div>
                    </div>
                    <li><a href="dangki.html">Đăng kí |</a></li>
                    <li><?php
                        if (!isset($_SESSION['user_email'])) {
                            echo " <a href='login.php' class='header__link'>
                            Đăng nhập
                            </a>";
                        } else {
                            echo " <a href='user_logout.php' class='header__link'>
                            Đăng xuất
                            </a>";
                        }
                        ?></li>
                </ul>
            </nav>
        </section>
        <section class="menu bottom">
            <nav class="blue_font">
                <a href="index.html" style="text-decoration: none">
                    BULE SKY </a>
            </nav>
            <form class="search">
                <input type="text" placeholder="10.10 SĂN MÃ FREESHIP 0Đ">
                <button><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
            </form>
            <?php
            if (isset($_POST['search__submit'])) {
                $search = $_POST['search'];
                $_SESSION['search'] = $search;
                echo "<script>window.open('search.php','_self')</script>";
            }
            ?>
            <nav class="shopping">
                <div class="dropdown"><a href="giohang.html">
                        <i class="fa-solid fa-cart-shopping"></i></a>
                    <div class="hidden tamgiac three">
                        <img src="img/lg.jpg" alt="">
                        <a href="checkout.php">
                    <?php
                    $ip_add = getRealIpUser();
                    $sql = "select * from cart where ip_add='$ip_add'";
                    $res = mysqli_query($con, $sql);
                    $count = mysqli_num_rows($res);
                    echo $count;
                    ?>
                    mặt hàng trong giỏ hàng của bạn | Tổng giá:
                    <?php
                    $total = 0;
                    $ip_add = getRealIpUser();
                    $sql = "select * from cart where ip_add='$ip_add'";
                    $res = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($res)) {
                        $product_id = $row['p_id'];
                        $qty = $row['qty'];
                        $sql_2 = "select * from product where product_id='$product_id'";
                        $res_2 = mysqli_query($con, $sql_2);
                        while ($row_2 = mysqli_fetch_array($res_2)) {
                            $sub_total = $row_2['product_price'] * $qty;
                            $total += $sub_total;
                        }
                    }

                    echo $total;
                    ?>
                    VND
                </a>
                    </div>
                </div>
            </nav>
        </section>
        <section class="menu list">
            <ul>
                <!-- <li><a href="">Áo khoác</a> </li>
                <li> <a href="">Túi xách nữ</a></li>
                <li> <a href="">Áo croptop</a></li>
                <li> <a href="">Dép</a></li>
                <li> <a href="">Váy</a></li> -->

            </ul>
        </section>
    </header>