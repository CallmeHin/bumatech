<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Title</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <?php // Thư viện dùng chung toàn website -- KHÔNG ĐƯỢC SỬA ?>
    <link href="css/vendor/normalize.css" rel="stylesheet" />
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="css/hitech/ht-base.css" rel="stylesheet" />
    <script src="js/vendor/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="js/hitech/ht-base.js" type="text/javascript"></script>

    <?php // Thư viện chỉ dùng cho trang này -- KHÔNG ĐƯỢC SỬA ?>

    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>

</head>
<body>
    <!-- BEGIN HEADER -->
	<?php include('header.php'); ?>
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->
    <div class="container ht-mrt30 ht-mrb30">
        <div class="c-headline-11">
            <h2 class="c_name">Giải pháp</h2>
        </div>
        <div class="row row-flex">
            <?php for($i = 1; $i <= 10; $i++){ ?>
            <div class="col-6 col-md-3">
                <a href="tin-tuc-chi-tiet.php" class="b-card-47">
                    <div class="b_top">
                        <div class="b_thumb ht-ratio--75"><!-- 270x200-->
                            <img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                        </div>
                    </div>
                    <div class="b_content">
                        <h3 class="b_title">Tiêu đề bài viết của doanh nghiệp</h3>
                        <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp.</h4>
                    </div>
                </a>
            </div>
            <?php } ?>
            <?php for($i = 1; $i <= 2; $i++){ ?>
            <div class="col-6 col-md-3">
                <a href="tin-tuc-chi-tiet.php" class="b-card-47">
                    <div class="b_top">
                        <div class="b_thumb ht-ratio--75"><!-- 270x200-->
                            <img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                        </div>
                    </div>
                    <div class="b_content">
                        <h3 class="b_title">Tiêu đề bài viết của doanh nghiệp</h3>
                        <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp.</h4>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
        <ul class="s-pagination-1 text-center">
            <li><a href="javascript:;">«</a></li>
            <li><a href="javascript:;">1</a></li>
            <li><a href="javascript:;">2</a></li>
            <li class="active"><a href="javascript:;">3</a></li>
            <li><a href="javascript:;">4</a></li>
            <li><a href="javascript:;">5</a></li>
            <li><a href="javascript:;">»</a></li>
        </ul>
    </div>
    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>