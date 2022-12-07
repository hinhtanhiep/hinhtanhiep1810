<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'sub/head.php'?>
</head>

<body>
    <?php include 'sub/menu.php'?>

 

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/gallery-1.jpg" width="100%" id="productImg">
                
                <div class="small-img-row">
                    <div class="small-img-rol">
                        <img src="images/gallery-1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-rol">
                        <img src="images/gallery-2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-rol">
                        <img src="images/gallery-3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-rol">
                        <img src="images/gallery-4.jpg" width="100%" class="small-img">
                    </div>
                </div>

            </div>
            <div class="col-2">
                <p>Trang chủ / Áo Thun</p>
                <h1>Áo thun body đỏ PUMA</h1>
                <h4>128.000 VND</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                    </section>
                    <input type="number" value="1">
                    <a href="" class="btn">Thêm vào giỏ hàng</a>
                    <h3>Chi tiết sản phẩm
                        <i class="fa fa-indent"></i>
                    </h3>
                    <br>
                    <p>Sản phẩm với chất thun coton 100% giúp làm mát cơ thể và giảm tiết ra mồ hôi giúp bạn thoải mái chơi thể thao mà không sợ bị mùi cơ thể</p>
            </div>
        </div>
    </div>

    
    <div class="small-container">
        <div class="row row2">
            <h2>Sản phẩm liên quan</h2>
            <p>Xem thêm</p>
        </div>
    </div>


<?php include 'sub/product_TV.php'?>
    

  <?php include 'sub/footer.php'?>
        
        

        
        <script>
            var ProductImg = document.getElementById("productImg");
            var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function()
            {
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function()
            {
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function()
            {
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function()
            {
                ProductImg.src = SmallImg[3].src;
            }

        </script>
</body>

</html>