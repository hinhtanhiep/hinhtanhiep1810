<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'sub/head.php'?>  
</head>

<body>
    <?php include 'sub/menu.php'?>
    <!-- sua sua-->
    <!-- -----------------cart item details------------------- -->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Sản Phẩm</th>
                <th>Quan Trọng</th>
                <th>Tổng phụ</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-1.jpg">
                        <div>
                            <p>Áo thun body đỏ PUMA</p>
                            <small>Giá bán:128.000 VND</small>
                            <br>
                            <a href="">Gỡ bỏ</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>128.000 VND</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-2.jpg">
                        <div>
                            <p>Giày thể thao HRX</p>
                            <small>Giá bán: 300.000 VND</small>
                            <br>
                            <a href="">Gỡ bỏ</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>300.000 VND</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-3.jpg">
                        <div>
                            <p>Quần thun thể thao co dãn</p>
                            <small>Giá bán: 150.000 VND</small>
                            <br>
                            <a href="">Gỡ bỏ</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>150.000 VND</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Tổng phụ</td>
                    <td>578.000 VND</td>
                </tr>
                <tr>
                    <td>Thuế</td>
                    <td>20.000 VND</td>
                </tr>
                <tr>
                    <td>Tổng cộng</td>
                    <td>598.000 VND</td>
                </tr>
            </table>

        </div>


    </div>


    

 <?php include 'sub/footer.php'?>
        
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                }
                else {
                    MenuItems.style.maxHeight = "0px";
                }
            }

        </script>

</body>

</html>