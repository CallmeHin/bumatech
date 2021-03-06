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
    <script src="js/hitech/HTValidate.js" type="text/javascript"></script>

    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>

</head>
<body>
    <!-- BEGIN HEADER -->
	<?php include('header.php'); ?>
    <!-- END HEADER -->
    <div class="s-form-2 ht-mrt30 ht-mrb30">
        <div class="container">
            <div class="c-headline-2 h1">
                <h1 class="c_name">Đặt hàng</h1>
                <div class="c_divider"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></div>
            </div>
            <form id="form_order" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-7">
                        <div class="c-headline-3 h2">
                            <h2 class="c_name"><i class="fa fa-info-circle" aria-hidden="true"></i><span>Thông tin đặt hàng</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 s_info-pay">
                                <p>Thông tin đặt hàng và nhận hàng</p>
                                <p>Thông tin đặt hàng</p>
                                <div class="form-group c-form c-form--icon">
                                    <span class="c_icon"><i class="fa fa-user text--icon" aria-hidden="true"></i></span>
                                    <input type="text" name="fullname" value="" class="c_input" placeholder="Họ và tên (*)" />
                                </div>
                                <div class="form-group c-form c-form--icon">
                                    <span class="c_icon"><i class="fa fa-phone-square text--icon" aria-hidden="true"></i></span>
                                    <input type="text" name="phone" value="" class="c_input" placeholder="Điện thoại (*)" />
                                </div>
                                <div class="form-group c-form c-form--icon">
                                    <span class="c_icon"><i class="fa fa-envelope text--icon" aria-hidden="true"></i></span>
                                    <input type="text" name="email" value="" class="c_input" placeholder="Email (*)" />
                                </div>
                                <div class="form-group c-form c-form--icon">
                                    <span class="c_icon"><i class="fa fa-map-marker text--icon" aria-hidden="true"></i></span>
                                    <input type="text" name="address" value="" class="c_input" placeholder="Địa chỉ (*)" />
                                </div>
                                <div class="form-group c-form c-form--icon">
                                    <span class="c_icon c_icon--top"><i class="fa fa-info-circle text--icon" aria-hidden="true"></i></span>
                                    <textarea name="comment" class="c_input" rows="2" placeholder="Nội dung"></textarea>
                                </div>
                                <div class="form-group c-form c-form--icon form-checkbox">
                                    <div class="c-checkbox">
                                        <label><input type="checkbox" ht-trigger="recipient" /><span>Giao hàng đến địa chỉ khác</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 s_info-recipient hidden">
                                <p>Thông tin nhận hàng</p>
                                <div class="form-group c-form c-form--icon">
                                    <span class="c_icon"><i class="fa fa-user text--icon" aria-hidden="true"></i></span>
                                    <input type="text" name="recipient_data[fullname]" value="" class="c_input" placeholder="Họ và tên (*)" />
                                </div>
                                <div class="form-group c-form c-form--icon">
                                    <span class="c_icon"><i class="fa fa-phone-square text--icon" aria-hidden="true"></i></span>
                                    <input type="text" name="recipient_data[phone]" value="" class="c_input" placeholder="Điện thoại (*)" />
                                </div>
                                <div class="form-group c-form c-form--icon">
                                    <span class="c_icon"><i class="fa fa-map-marker text--icon" aria-hidden="true"></i></span>
                                    <input type="text" name="recipient_data[address]" value="" class="c_input" placeholder="Địa chỉ (*)" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="s-cart-2">
                            <div class="c-headline-3 h2">
                                <h2 class="c_name"><i class="fa fa-th-list" aria-hidden="true"></i><span>Đơn hàng của bạn</span></h2>
                            </div>
                            <table class="s_table">
                                <tbody>

                                    <tr>
                                        <td class="td-image"><img src="images/cards/card-11.jpg" alt=""></td>
                                        <td class="td-name">Tên sản phẩm</td>
                                        <td class="td-quantity text-center">x1</td>
                                        <td class="td-sum text-right"><span>10.000.000<sup>đ</sup></span></td>
                                    </tr>

                                    <tr>
                                        <td class="td-image"><img src="images/cards/card-11.jpg" alt=""></td>
                                        <td class="td-name">Tên sản phẩm</td>
                                        <td class="td-quantity text-center">x1</td>
                                        <td class="td-sum text-right"><span>10.000.000<sup>đ</sup></span></td>
                                    </tr>

                                    <tr>
                                        <td class="td-image"></td>
                                        <td class="td-name text-right" colspan="2">Tổng cộng:</td>
                                        <td class="td-total text-right">
                                            <span class="text-bold">20.000.000<sup>đ</sup></span>
                                            <input type="hidden" name="total_price" value="399000">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="s_footer align-items--between">
                                <span class="fa fa-long-arrow-left ht-hover pull-left"><a href="gio-hang.php">Trở về giỏ hàng</a></span>
                                <button type="submit" class="c-btn--secondary c-btn--sm pull-right">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <style type="text/css" media="screen">
        /* Style chung S-CART */
        [class*="s-cart-"] .s_table {
          font-size: 14px;
          width: 100%;
          border-spacing: 0;
          border-collapse: collapse;
          margin-bottom: 20px;
        }
        [class*="s-cart-"] .s_table tr td {
          border-bottom: 1px solid #ccc;
          padding: 0.5em 0.22em 0.5em 0.22em;
        }
        [class*="s-cart-"] .s_table tr td:first-child {
          padding-left: 0;
        }
        [class*="s-cart-"] .s_table tr td:last-child {
          padding-right: 0;
        }
        [class*="s-cart-"] .s_table tr:last-child td {
          border: none;
        }

        /* BEGIN s-cart-2 */
        .s-cart-2 .td-image {
          width: 50px;
          line-height: 0;
        }
        .s-cart-2 .td-quantity {
          width: 30px;
        }
        .s-cart-2 .td-sum, .s-cart-2 .td-total {
          width: 90px;
        }

        /* END s-cart-2 */
        /* BEGIN s-form-2 */
        .s-form-2 .s_info-pay > p, .s-form-2 .s_info-recipient > p {
          font-size: 15px;
          margin-bottom: 15px;
        }
        .s-form-2 .s_info-pay p:nth-child(2) {
          display: none;
        }
        .s-form-2 .s_info-pay.col-sm-6 p:nth-child(1) {
          display: none;
        }
        .s-form-2 .s_info-pay.col-sm-6 p:nth-child(2) {
          display: block;
        }

        /* END s-form-2 */
    </style>
    <script>
        /* BEGIN s-form-2 */
        /* Thêm thư viện js/hitech/HTValidate.js */
        $(document).ready(function() {
            var defaults = {
                fullname: { required: 'Thông tin bắt buộc' },
                phone: { required: 'Thông tin bắt buộc', number: 'Vui lòng nhập số' },
                email: { required: 'Thông tin bắt buộc', email: 'Email không hợp lệ' }
            };
            $('#form_order').HTValidate({
                rules: defaults,
                setTemplate: { notify: 'Bạn đã đặt hàng thành công!', modal: 'notify_order' }
            });
            $('.s-form-2 [ht-trigger="recipient"]').click(function() {
                $('#form_order').unbind();
                $('.s-form-2 .s_info-recipient').toggleClass('hidden');
                if ($('.s-form-2 .s_info-pay').hasClass('col-sm-6')) {
                    $('.s-form-2 .s_info-pay').removeClass('col-sm-6').addClass('col-sm-12');
                    $('.s-form-2 .s_info-recipient').find('input').val('');
                    $('#form_order').HTValidate({ rules: defaults });
                } else {
                    $('.s-form-2 .s_info-pay').addClass('col-sm-6').removeClass('col-sm-12');
                    $('#form_order').HTValidate({ rules: $.extend({}, defaults, {
                        'recipient_data[fullname]': { required: 'Thông tin bắt buộc' },
                        'recipient_data[phone]': { required: 'Thông tin bắt buộc', number: 'Vui lòng nhập số' },
                        'recipient_data[email]': { required: 'Thông tin bắt buộc', email: 'Email không hợp lệ' }
                    })});
                }
            });
        });
        /* ENd s-form-2 */
    </script>
    <!-- BEGIN CONTENT -->

    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>