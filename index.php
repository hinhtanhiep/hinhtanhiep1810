<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'sub/head.php'?>
    </head>
    <body>
        <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" width="125px"></a>
                </div>
                <div class="container">
        
                    <div class="row">
                        <?php if(!isset($_SESSION['user'])): ?>
                        <a href="register.php" class="btn btn-success">Đăng ký</a>
                        <a href="login.php" class="btn btn-success">Đăng nhập</a>
                        <?php endif?>
                        <?php if(isset($_SESSION['user'])): ?>
                        <a href="logout.php" class="btn btn-success">Thoát</a><?php $_SESSION['user']['name']?>
                        <?php endif?>
                        
                    </div>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="products.php">Sản phẩm</a></li>
                        <li><a href="adminpage/adminlogin.php">Admin</a></li>
                        <li><a href="contact.php">Liên hệ</a></li>
                        
                        
                        
                    </ul>
                </nav>
                
                <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
                <img src="images/menu.png" class="menu-icon" 
                onclick="menutoggle()">
            </div>
</div>

                    <div class="row">
                        <div class="col-2">
                        <h1>Give Your Workout<br> A New Style!</h1>
                            <p>Thành công không phải lúc nào cũng có được sự vĩ đại. Đó là về tính nhất quán. Khi bạn
        làm việc chăm chỉ không từ bỏ sẽ đạt được thành công. Bạn sẽ thực sự vĩ đại. Impossible is nothing ! <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
    </p>
                    <a href="" class="btn">Khám phá ngay ! &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png">
                </div>
            </div>
        </div>
    </div>
    <!-- ------------- featured categorries ---------------- -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-3.jpg">
                </div>

            </div>
        </div>

    </div>
    <!-- ------------- featured products ---------------- -->
    <div class="small-container">
        <h2 class="title">Tính năng sản phẩm</h2>
        <div class="row">
            <div class="col-4">
                <a href="products_detal.php"><img src="images/product-1.jpg"></a>
                <a href="products_detal.php"><h4>Áo thun body đỏ PUMA</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>128.000 VND</p>
            </div>
            <div class="col-4">
                <img src="images/product-2.jpg">
                <h4>Giày thể thao HRX</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>300.000 VND</p>
            </div>
            <div class="col-4">
                <img src="images/product-3.jpg">
                <h4>Quần thun thể thao co dãn</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>150.000 VND</p>
            </div>
            <div class="col-4">
                <img src="images/product-4.jpg">
                <h4>Áo thun body có cổ PUMA</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>130.000 VND</p>
            </div>
        </div>
        <h2 class="title">Sản phẩm mới nhất</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/product-5.jpg">
                <h4>Giày thể thao cổ cao </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>400.000 VND</p>
            </div>
            <div class="col-4">
                <img src="images/product-6.jpg">
                <h4>Áo thun body PUMA V</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>135.000 VND</p>
            </div>
            <div class="col-4">
                <img src="images/product-7.jpg">
                <h4>Tất HRX</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>100.000 VND</p>
            </div>
            <div class="col-4">
                <img src="images/product-8.jpg">
                <h4>Đồng hồ thể thao Rossil</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>840.000 VND</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/product-9.jpg">
                <h4>Đồng hồ thể thao Roadster</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>900.000 VND</p>
            </div>
            <div class="col-4">
                <img src="images/product-10.jpg">
                <h4>Giày thể thao Dragon X</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>400.000 VND </p>
            </div>
            <div class="col-4">
                <img src="images/product-11.jpg">
                <h4>Giày thể thao cổ thấp</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>500.000 VND</p>
            </div>
            <div class="col-4">
                <img src="images/product-12.jpg">
                <h4>Quần Thun Nike chính hãng</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>250.000 VND</p>
            </div>
        </div>
    </div>
    <!-- ------------ offer -------------- -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2"><img src="images/exclusive.png" class="offer-img"> </div>
                <div class="col-2">
                    <p>Độc quyền có sẵn trên HL Store</p>
                    <h1>Smart Band 4</h1>
                    <small>
                    Mi Smart Band 4 có màn hình cảm ứng màu AMOLED lớn hơn 39,9% (so với Mi Band 4) với độ sáng có thể điều chỉnh, vì vậy mọi thứ đều rõ ràng nhất có thể</small>
                    <a href="" class="btn">Mua ngay &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------ testimonial -------------- -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-qoute-lef"></i>
                    <p>Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased
                        imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness.
                        Removal request delight if on he we</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/user-2.png">
                    <h3>Nguyễn Đăng Phương Lâm</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-qoute-lef"></i>
                    <p>Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased
                        imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness.
                        Removal request delight if on he we</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/user-2.png">
                    <h3>Hình Tân Hiệp</h3>
                </div>
              
            </div>
        </div>
    </div>
    <!-- ------------------- brands --------------------- -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-oppo.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-coca-cola.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-paypal.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-philips.png">
                </div>
            </div>
        </div>
    </div>
    <?php include 'sub/footer.php'?>
</body>
</html>