<?php 
    include('../db/connect.php');
    if(isset($_SESSION['user'])){
        $user=$_SESSION['user'];
    }else{
        $user=[];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&family=Open+Sans:wght@400;600;800&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Giới thiệu</title>
</head>
<style type="text/css">
    a{
        text-decoration: none;
    }
</style>
<body>
    <div class="wrapper">
        <div class="grid header">
            <div class="grid wide container">
                <div class="row">
                    <div class="col l-4">
                        <div class="row no-gutters">
                            <div class="col l-8">
                                <div class="logo">
                                    <h2>
                                        <span style="color: #281E5D;">DVN</span>
                                        <span style="color: #B90E0A;">CellphoneS</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="col l-4">
                                <div class="check-price-at">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <div>
                                        <p style="font-size: 12px; margin-bottom: 3px;">Xem giá tại</p>
                                        <p style="margin-bottom: 0; display: inline;">Miền Nam</p>
                                        <i class="fa-solid fa-caret-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col l-4">
                        <form action="" class="search-bar">
                            <input type="text" placeholder="Tìm kiếm sản phẩm..." name="text">
                            <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
    
                    <div class="col l-4">
                        <div class="row">
                            <div class="col l-4 hide-on-mobile-tablet">
                                <div class="hotline">
                                    <i class="fa-solid fa-phone"></i>
                                    <div>
                                        <p>Hotline</p>
                                        <p class="phone-number">1800.2366</p>
                                    </div>
                                </div>
                            </div>
                            
                            <?php if(isset($user['username'])){ ?>
                            <div class="col l-4 hide-on-mobile-tablet">
                                <div class="login1">
                                    <a id="btndn"><i class="fa-solid fa-circle-user"></i></a>
                                    <p><?php echo $user['username']; ?></p>
                                    <p><a onclick="return confirm('Bạn có chắc muốn đăng xuất?');" href="../logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></p>
                                </div>
                            </div>
                            <?php
                            }
                            else{
                            ?>
                                <div class="col l-4 hide-on-mobile-tablet">
                                    <div class="login1">
                                        <a id="btndn" href="../login.php"><i class="fa-solid fa-circle-user"></i></a>
                                        <p><a href="../login.php">Đăng nhập</a></p>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>
                            <div class="col l-4">
                                <div class="shopping-cart">
                                    <a href="cart.php"><i class="fa-solid fa-2x fa-cart-shopping"></i></a>
                                    <p>Giỏ hàng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row navigation-box">             
                    <div class="col l-8" style="margin: 20px auto;" >
                        <div class="row">
                            <div class="col l-2">
                                <div class="home" href="home.html">
                                    <a href="../index.php"><h4>TRANG CHỦ</h4></a>
                                </div>
                            </div>
                            <div class="col l-2">
                                <div class="introduction">
                                    <a href="introduce.php"><h4>GIỚI THIỆU</h4></a>
                                </div>
                            </div>
                            <div class="col l-2">
                                <div class="product">
                                    <a href="../index.php"><h4>SẢN PHẨM</h4></a>
                                </div>
                            </div>
                            <div class="col l-2">
                                <div class="news">
                                    <a href="../index.php"><h4>TIN TỨC</h4></a>
                                </div>
                            </div>
                            <div class="col l-2">
                                <div class="contact">
                                    <a href="contact.php"><h4>LIÊN HỆ</h4></a>
                                </div>
                            </div>
                            <div class="col l-2">
                                <div class="branch">
                                    <a href="../index.php"><h4>CHI NHÁNH</h4></a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-cart">
                <div class="content-cart-top">
                    <p><a href="C:\Users\Admin\Documents\web\DVN_CellphoneS\home.html" class="fa-solid fa-house"></a></p><span
                        class="fa-solid fa-angle-right"></span><a href="#">Liên hệ</a>
                </div>
                <div class="form">
                    <div class="form-left">
                        <div class="contact-form-top">
                            <input type="text" placeholder="Họ tên">
                            <input type="text" placeholder="Địa chỉ Email">
                        </div>
                        <div class="contact-form-bottom">
                            <input type="text" class="content1"placeholder="Nội dung yêu cầu">
                        </div>
                        <div class="contact-form-button">
                            <button type="button" class="button3">Gửi yêu cầu</button>
                        </div>
                    </div>
                    <div class="form-right">
                        <div class="form-right-contact">
                            <h7><i class="fa-solid fa-location-dot"></i> Addresss</h7>
                            <li>CN1: 273 An Dương Vương, Quận 5.</li>
                            <li>CN2: 105 Bà Huyện Thanh Quan, Quận 3.</li>
                            <li>CN3: 04 Tôn Đức Thắng, Quận 1</li>
                            <li>CN4: 20 Ngô Thời Nhiệm, Quận 3</li>
                            <br><h7><i class="fa-brands fa-google"></i> Social Network</h7></div>
                            <li><i class="fa-solid fa-phone"></i> 0777777777</a></li>
                            <li><i class="fa-solid fa-envelope"></i> dvncellphones@gmail.com</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!----footer-->
        <div class="grid" style="margin-top: 60px; background-color: #281E5D; padding: 10px 25px;">
            <div class="grid wide">
                <div class="row no-gutters">
                    <div class="col l-3">
                        <div class="media">
                            <i class="fa-brands fa-2x fa-facebook"></i>
                            <i class="fa-brands fa-2x fa-instagram"></i>
                            <i class="fa-brands fa-2x fa-youtube"></i>
                            <i class="fa-brands fa-2x fa-tiktok"></i>
                        </div>
                    </div>
                    <div class="col l-3 l-o-1 special-discount">
                        <i class="fa-solid fa-envelope"></i>
                        <p>Khuyến mãi đặc biệt ? Đăng kí ngay</p>
                    </div>
                    <div class="col l-4 l-o-1">
                        <form action="" class="form-get-input-email">
                            <input type="text" placeholder="Nhập email nhận ngay ưu đãi..." name="text">
                            <button type="button">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid wide container">
            <div class="row" style="align-items: flex-start;">
                <div class="col l-4 location">
                    <div class="logo">
                        <h2>
                            <span style="color: #281E5D;">DVN</span>
                            <span style="color: #B90E0A;">CellphoneS</span>
                        </h2>
                    </div>
                    <p>Công ty TNHH Thương Mại Công Nghệ DVN</p>
                    <div style="margin-top: 12px;">
                        <div class="location-footer">
                            <i class="fa-solid fa-location-dot"></i>
                            <p style="font-weight: bold; font-size: 15px;">Địa chỉ: </p>
                            <p> 18 Trần Hưng Đạo, phường 5, quận 10, TP</p>
                            <p style="margin-top: 5px; margin-left: 25px;">Hồ Chí Minh</p>
                        </div>
                        <div class="phone-number-footer">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                            <p style="font-weight: bold; font-size: 15px;">Số điện thoại:</p>
                            <p>1800.2366</p>
                        </div>
                        <div class="email-footer">
                            <i class="fa-solid fa-envelope"></i>
                            <p style="font-weight: bold; font-size: 15px;">Email:</p>
                            <p>dvncellphones@gmail.com.co</p>
                        </div>
                    </div>
                </div>
                <div class="col l-2">
                    <div class="info-footer">
                        <h3>Thông tin</h3>
                        <div>
                            <p>Hướng dẫn mua hàng online</p>
                            <p>Hướng dẫn mua hàng trả góp</p>
                            <p>Tìm hiểu thêm DVN CellphoneS</p>
                            <p>Tích điểm đổi quà</p>
                        </div>
                    </div>
                </div>
                <div class="col l-2">
                    <div class="policy-footer">
                        <h3>Chính sách</h3>
                        <div>
                            <p>Chính sách bảo hành</p>
                            <p>Quy định và hình thức thanh toán</p>
                            <p>Chính sách vận chuyển, giao nhận</p>
                            <p>Chính sách đổi trả hàng</p>
                            <p>Chính sách bảo mật</p>
                        </div>
                    </div>
                </div>
                <div class="col l-4">
                    <div class="row">
                        <div class="col l-12 online-order-footer">
                            <h3>Đặt hàng online giao hàng tận nơi</h3>
                            <div>
                                <p>HOTLINE:</p>
                                <p style="font-weight: bold; color: #0082F0; font-size: 16px;">1800.2366</p>
                                <p>(8h - 21h)</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l-12 payment-method">
                            <h3>Phương thức thanh toán</h3>
                            <div>
                                <img src="../images/visa-logo.png" alt="">
                                <img src="../images/mastercard_logo.png" alt="">
                                <img src="../images/MoMo_Logo.png" alt="">
                                <img src="../images/vnpay_logo.jpg" alt="">
                            </div>
                            <img src="images/dathongbaobct.png" alt="" width=50%>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>