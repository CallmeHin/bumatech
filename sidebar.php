<div class="s-sidebar-3">
    <div class="s_heading">Tin nổi bật</div>
    <div class="s_list">
        <?php for ($i = 5; $i >= 1; $i--){ ?>
        <a href="tin-tuc-chi-tiet.php"> <!--200x150-->
            <div class="thumb ht-ratio--75"><img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
            <h4 class="title">Tiêu đề bài viết của doanh nghiệp</h4>
        </a>
        <?php } ?>
    </div>
</div>

<div class="s-sidebar-3">
    <div class="s_heading">Sản phẩm nổi bật</div>
    <div class="s_list">
        <?php for ($i = 1; $i <= 5; $i++){ ?>
        <a href="san-pham-chi-tiet.php"> <!--90x90-->
            <div class="thumb ht-ratio--100"><img src="images/product/product-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
            <h4 class="title">Tên sản phẩm của doanh nghiệp</h4>
            <span class="sku">MH002</span>
        </a>
        <?php } ?>
    </div>
</div>