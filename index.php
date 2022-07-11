<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1, user-scalable=no, viewport-fit=cover">
	<title>Title</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <?php // Thư viện dùng chung toàn website -- KHÔNG ĐƯỢC SỬA ?>
    <link href="css/vendor/normalize.css" rel="stylesheet" />
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="css/hitech/ht-base.css" rel="stylesheet" />
    <script src="js/vendor/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="js/hitech/ht-base.js" type="text/javascript"></script>

    <?php // Thư viện chỉ dùng cho trang này -- KHÔNG ĐƯỢC SỬA ?>
    <link rel="stylesheet" href="js/vendor/nivo-slider/nivo-slider.css">
    <script type="text/javascript" src="js/vendor/nivo-slider/nivo-slider.js"></script>

    <link rel="stylesheet" href="js/vendor/slick/slick.css">
    <script type="text/javascript" src="js/vendor/slick/slick.js"></script>

    <script src="js/vendor/watermark.js" type="text/javascript"></script>
    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
	<script src="js/style.js" type="text/javascript"></script>

	<?php // CSS, JS chỉ dùng cho trang này ?>
    <link href="css/home.css" rel="stylesheet" />
    <script src="js/home.js" type="text/javascript"></script>
</head>
<body>
    <!-- BEGIN HEADER -->
	<?php include('header.php'); ?>
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->
    <div class="s-slide-5">
        <div class="b-nslide-ratio">
            <div class="nivoSlider"> <!--1350x500-->
                <a href=""><img src="images/slide-1.png" alt="" /></a>
                <a href=""><img src="images/slide-2.png" alt="" /></a>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <div class="s-home-2">
        <div class="container">
            <div class="b-sslide-default">
                <div class="slick-slider">
                <?php for ($i = 1; $i <= 5; $i++){ ?>
                    <div class="item">
                        <a href="san-pham.php" class="b-card-7">
                            <div class="b_circle"> <!--330x330-->
                                <div class="b_thumb ht-ratio--100"><span class="ht-ratio__img"><img src="images/product/product-<?php echo $i ?>.png" class="watermark" alt="" /></span></div>
                                <h3 class="b_title">Keo dán gạch</h3>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="s-product-1">
        <div class="container">
            <div class="c-headline-11">
                <h2 class="c_name">Keo dán gạch</h2>
            </div>
            <div class="row row-flex">
                <?php for ($i = 1; $i <= 4; $i++){ ?>
                <div class="col-6 col-md-3">
                    <a href="san-pham-chi-tiet.php" class="b-card-58">
                        <div class="b_thumb ht-ratio--100"> <!--273x273-->
                            <img src="images/product/product-<?php echo $i ?>.png" alt="" class="ht-ratio__img" />
                        </div>
                        <div class="b_content">
                            <h3 class="b_title">Keo Dán Gạch bumatech Tile A3</h3>
                            <div class="b_sku"><span>Mã sản phẩm: </span> MH001</div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="s-product-1">
        <div class="container">
            <div class="c-headline-11">
                <h2 class="c_name">Keo chà ron</h2>
            </div>
            <div class="row row-flex">
                <?php for ($i = 5; $i <= 8; $i++){ ?>
                <div class="col-6 col-md-3">
                    <a href="san-pham-chi-tiet.php" class="b-card-58">
                        <div class="b_thumb ht-ratio--100">
                            <img src="images/product/product-<?php echo $i ?>.png" alt="" class="ht-ratio__img" />
                        </div>
                        <div class="b_content">
                            <h3 class="b_title">Keo Dán Gạch bumatech Tile A3</h3>
                            <div class="b_sku"><span>Mã sản phẩm: </span> MH001</div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="s-product-1">
        <div class="container">
            <div class="c-headline-11">
                <h2 class="c_name">Keo chống thấm</h2>
            </div>
            <div class="row row-flex">
                <?php for ($i = 6; $i <= 9; $i++){ ?>
                <div class="col-6 col-md-3">
                    <a href="san-pham-chi-tiet.php" class="b-card-58">
                        <div class="b_thumb ht-ratio--100">
                            <img src="images/product/product-<?php echo $i ?>.png" alt="" class="ht-ratio__img" />
                        </div>
                        <div class="b_content">
                            <h3 class="b_title">Keo Dán Gạch bumatech Tile A3</h3>
                            <div class="b_sku"><span>Mã sản phẩm: </span> MH001</div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="s-home-5">
        <div class="container">
            <div class="c-headline-11">
                <h2 class="c_name">Dự án nổi bật</h2>
            </div>
            <div class="b-sslide-default">
                <div class="slick-slider">
                    <?php for($i = 1; $i <= 6; $i++){ ?>
                    <div class="item">
                        <a href="du-an-chi-tiet.php" class="b-card-40">
                            <div class="b_thumb ht-ratio--75"> <!--427x320-->
                                <img src="images/duan/du-an-<?php echo $i ?>.png"alt="" class="ht-ratio__img" />
                            </div>
                            <div class="b_overlay">
                                <span class="b_line"></span>
                                <span class="b_line b_line-bottom"></span>
                            </div>
                            <div class="b_content">
                                <h3 class="b_title">Dự án Vinhomes Central Park</h3>
                                <div class="b_address">Nguyễn Hữu Cảnh, Phường 22, Quận Bình Thạnh, TP. Hồ Chí Minh</div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>

    <div class="s-why-1">
        <div class="container">
            <div class="c-headline-11">
                <h2 class="c_name">Tại sao chọn chúng tôi</h2>
            </div>
            <div class="row row-flex">
                <div class="col-12 col-xs-6 col-md-3">
                    <div class="b-card-37">
                        <div class="b_icon">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                        </div>
                        <h3 class="b_title">THƯƠNG HIỆU UY TÍN</h3>
                        <div class="b_desc">BUMATECH là thương hiệu đến từ Malaysia đã gặt hai được nhiều thương hiệu tại Việt Nam</div>
                    </div>
                </div>
                <div class="col-12 col-xs-6 col-md-3">
                    <div class="b-card-37">
                        <div class="b_icon">
                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                        </div>
                        <h3 class="b_title">QUY TRÌNH ĐƠN GIẢN</h3>
                        <div class="b_desc">Khách hàng dễ dàng tìm sản phẩm phù hợp với nhu cầu thi công của mình</div>
                    </div>
                </div>
                <div class="col-12 col-xs-6 col-md-3">
                    <div class="b-card-37">
                        <div class="b_icon">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </div>
                        <h3 class="b_title">THÔNG TIN MINH BẠCH</h3>
                        <div class="b_desc">Thương hiệu của chúng tôi đã hoạt động được 10 năm nên độ uy tín là rất tốt</div>
                    </div>
                </div>
                <div class="col-12 col-xs-6 col-md-3">
                    <div class="b-card-37">
                        <div class="b_icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <h3 class="b_title">SẢN PHẨM ĐA DẠNG</h3>
                        <div class="b_desc">Chúng tôi cung cấp đa dạng các loại sản phẩm có chất lượng tốt phù hợp với nhu cầu khách hàng</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-home-32">
        <div class="container">
            <div class="b-sslide-default">
                <div class="slick-slider"> <!-- 168x126-->

                    <div class="item"><a href=""><img src="images/slides/logo-1.jpg" alt="" /></a></div>

                    <div class="item"><a href=""><img src="images/slides/logo-2.jpg" alt="" /></a></div>

                    <div class="item"><a href=""><img src="images/slides/logo-3.jpg" alt="" /></a></div>

                    <div class="item"><a href=""><img src="images/slides/logo-4.jpg" alt="" /></a></div>

                    <div class="item"><a href=""><img src="images/slides/logo-5.jpg" alt="" /></a></div>

                    <div class="item"><a href=""><img src="images/slides/logo-6.jpg" alt="" /></a></div>

                    <div class="item"><a href=""><img src="images/slides/logo-7.jpg" alt="" /></a></div>

                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>