<?php
if (!defined('_GNUBOARD_')) {
    exit;
}
// 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once G5_THEME_MOBILE_PATH . '/tail.php';
    return;
}
?>

    <!-- </div> -->
    <!-- <div id="aside"> -->
        <?php // echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        <?php // echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  ?>
    <!-- </div> -->
<!-- </div> -->

</div>
<!-- end: Body Inner -->

</div>
<!-- end: Wrapper -->
<!-- } 콘텐츠 끝 -->

<!-- <hr> -->

<!-- 하단 시작 { -->
<!-- Footer -->
<footer id="footer">
    <div class="footer-content">
        <div class="container">
        <div class="row">
            <div class="col-lg-5">
            <div class="widget">
                <div class="widget-title">Polo HTML5 Template</div>
                <p class="mb-5">
                Built with love in Fort Worth, Texas, USA<br />
                All rights reserved. Copyright © 2019. INSPIRO.
                </p>
                <a
                href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923"
                class="btn btn-inverted"
                >Purchase Now</a
                >
            </div>
            </div>
            <div class="col-lg-7">
            <div class="row">
                <div class="col-lg-3">
                <div class="widget">
                    <div class="widget-title">Discover</div>
                    <ul class="list">
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Layouts</a></li>
                    <li><a href="#">Corporate</a></li>
                    <li><a href="#">Updates</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Customers</a></li>
                    </ul>
                </div>
                </div>

                <div class="col-lg-3">
                <div class="widget">
                    <div class="widget-title">Features</div>
                    <ul class="list">
                    <li><a href="#">Layouts</a></li>
                    <li><a href="#">Headers</a></li>
                    <li><a href="#">Widgets</a></li>
                    <li><a href="#">Footers</a></li>
                    </ul>
                </div>
                </div>

                <div class="col-lg-3">
                <div class="widget">
                    <div class="widget-title">Pages</div>
                    <ul class="list">
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Shop</a></li>
                    </ul>
                </div>
                </div>
                <div class="col-lg-3">
                <div class="widget">
                    <div class="widget-title">Support</div>
                    <ul class="list">
                    <li><a href="#">Help Desk</a></li>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="copyright-content">
        <div class="container">
        <div class="copyright-text text-center">
            &copy; 2019 POLO - Responsive Multi-Purpose HTML5 Template. All
            Rights Reserved.<a
            href="http://www.inspiro-media.com"
            target="_blank"
            >
            INSPIRO</a
            >
        </div>
        </div>
    </div>
</footer>
<!-- end: Footer -->
<?php
if (G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) {?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>
<!--Plugins-->
<script src="../../js/jquery.js"></script>
<script src="../../js/polo/js/plugins.js"></script>

<!--Template functions-->
<script src="../../js/polo/js/functions.js"></script>
<?php
include_once G5_THEME_PATH . "/tail.sub.php";
?>