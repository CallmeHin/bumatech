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
    <link href="css/faq.css" rel="stylesheet" />
</head>
<body>
    <!-- BEGIN HEADER -->
    <?php include('header.php'); ?>
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->
    <div class="container ht-mrt30">
        <div class="ht-page">
            <div class="ht-page__sidebar"><?php include('sidebar.php'); ?></div>
            <div class="ht-page__main">
            <div class="s-faq-2">
                <div class="item is-active">
                    <div class="item-title">Tiêu đề chủ đề câu hỏi của doanh nghiệp</div>
                    <div class="item-body">Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp.</div>
                </div>
                <?php for ($i = 1; $i <= 10; $i++){ ?>
                <div class="item">
                    <div class="item-title">Tiêu đề chủ đề câu hỏi của doanh nghiệp</div>
                    <div class="item-body">Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp.</div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <script>
        /* BEGIN s-faq-2 */
        $(document).ready(function() {
            // Hiển thì 1 nội dung
            $('.s-faq-2 .item-title').click(function() {
                var $this = $(this);
                if ($this.parent().hasClass('is-active')) {
                    $this.parent().removeClass('is-active').find('.item-body').slideUp(400);
                } else {
                    $this.parent().siblings().removeClass('is-active').find('.item-body').slideUp(400);
                    $this.parent().addClass('is-active').find('.item-body').slideDown(400);
                }
                setTimeout(function() {$('html, body').animate({ 'scrollTop': $this.parent().offset().top - 100 },500); }, 500);
            });
        });
        /* END s-faq-2 */
    </script>
    <!-- BEGIN FOOTER -->
    <?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>