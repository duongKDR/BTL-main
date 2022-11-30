<footer>
    <section class="shop-footer">
        <div class="heading ">
            <h1 class="shop-footer-heading">BULE SKY </h1>
            <p class="shop-footer-content">BULE SKY - ứng dụng mua sắm trực tuyến thú vị,
                tin cậy, an toàn và miễn phí! </p>
            <h1 class="shop-footer-heading">MUA SẮM VÀ BÁN HÀNG ONLINE ĐƠN GIẢN, NHANH CHÓNG VÀ AN TOÀN</h1>
            <p class="shop-footer-content">
                Nếu bạn đang tìm kiếm một trang web để mua hàng trực tuyến thì BULE SKY là một sự lựa chọn
                tuyệt vời dành cho bạn.
            </p>
            <h5 class="view-more">Xem thêm<i class="fa-regular fa-chevron-right"></i>
            </h5>
        </div>
    </section>
    <section class="category heading">
        <div class="dm">
            <h5>Danh Mục</h5>
            <div class="text" style="display:flex; ">
                <?php

                $sql = "select * from product_categories";

                $res = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_array($res)) {

                    $p_cat_id = $row['p_cat_id'];

                    $p_cat_title = $row['p_cat_title'];
                    echo "
        <li class='footer__item'>
            <a href='shop.php?p_cat=$p_cat_id' class='footer__link'>
                $p_cat_title
            </a>
        </li>
    
    ";
                }

                ?>
            </div>
        </div>

    </section>
    <section class="footer-category heading">
        <div class="text">
            <h5>CHĂM SÓC KHÁCH HÀNG</h5>
            <li><a href="lienhe.html">Liên hệ</a></li>





        </div>
        <div class="text">
            <h5>VỀ BLUE SKY</h5>
            <li><a href="">Giới Thiệu Về Blue Sky Việt Nam</a></li>


        </div>
        <div class="pay">
            <h5>THANH TOÁN</h5>
            <div class="cate text">
                <a href="" class="boder"><img src="img/37.png" alt=""></a>
                <a href="" class="boder"><img src="img/38.png" alt=""></a>
                <a href="" class="boder"><img src="img/39.png" alt=""></a>
                <a href="" class="boder"><img src="	img/40.png" alt=""></a>

            </div>

        </div>
        <div class="text follow">
            <h5>THEO DÕI CHÚNG TÔI TRÊN</h5>
            <li class="facebook"><a href=""><img src="img/41.png" alt=""><span>Facebook</span></a>
            </li>
            <li><a href=""><img src="img/42.png" alt=""><span>Instagram</span>
                </a></li>
            <li><a href=""><img src="img/43.png" alt=""><span>LinkedIn</span></a>
            </li>
        </div>
        <div class="">
            <h5>ĐƠN VỊ VẬN CHUYỂN</h5>
            <div class="cate text">
                <a href="" class="boder"><img src="img/44.png" alt=""></a>
                <a href="" class="boder"><img src="img/45.png" alt=""></a>
                <a href="" class="boder"><img src="img/46.png" alt=""></a>
                <a href="" class="boder"><img src="img/47.png" alt=""></a>
                <a href="" class="boder"><img src="img/48.png" alt=""></a>
                <a href="" class="boder"><img src="img/49.png" alt=""></a>

            </div>
    </section>
    <section class="with world">
        <div>Về chúng tôi:

        </div>
        <div>
            <p class="www">

                Đào Thùy Dương-2021050159<span>|</span>
                Phương Lâm-<span>|</span>
                Trần Hoàng Diệu-<span>|</span>
                Lưu Tiến Đạt-2021050174<span></span></p>
        </div>

    </section>
    <section class="end">
        <div class="four">
            <p>CHÍNH SÁCH BẢO MẬT</p>
            <p>QUY CHẾ HOẠT ĐỘNG</p>
            <p>CHÍNH SÁCH VẬN CHUYỂN</p>
            <p>CHÍNH SÁCH TRẢ HÀNG VÀ HOÀN TIỀN</p>
        </div>
        <div class="photo">
            <img src="img/dk.jpg" alt="">
            <p>Công ty BLUE SKY</p>
        </div>
        <div class="end-game photo">

        </div>
    </section>
    <script src="js/slideshow.js">
    </script>
    <script src="js/countdown.js"></script>
    <script src="js/scroll_top.js"></script>
</footer>
</body>

</html>