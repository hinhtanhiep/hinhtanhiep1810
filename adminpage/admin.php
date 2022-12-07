<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Trang ADMIN</title>
</head>

<body>
<?php
    include_once "../xuly.php";
     $sql="SELECT id, name_product, gia, soluong, img FROM product WHERE  role=1";
     $data=$db->query($sql);
 ?>
    <div class="app">
        <div class="header">
            <div class="header__logo">
                <i class="fa-regular fa-circle-user"></i>
                <h2>QUẢN LÝ BÁN HÀNG</h2>
            </div>
            <div class="header__menu">
                <ul class="header__list">
                    <li class="header__item active">Sản phẩm</li>
                    <li class="header__item">Điểm danh</li>
                    <li class="header__item">Đơn hàng</li>
                    <a href="logout.php" class="header__item">Đăng xuất</a>
                </ul>
            </div>
        </div>
        <form action="#" method="POST">
        <div class="container">
            <div class="search">
                <h4>TÌM KIẾM SẢN PHẨM:</h4>
                <input type="text" name="id" value="" placeholder="Nhập sản phẩm cần tìm">
            </div>
            <h4>Chức năng chính: </h4>
            <div class="service">

            <a href="them.php"><span><i class="fa-solid fa-plus"></i></span></a>
            <a href="sua.php"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
            <a href="xoa.php"><span><button><i class="fa-solid fa-trash-can"></i></button></a>
            </div>
            <div class="content">
                <div class="content__label">
                    <span>Tên sản phẩm</span>
                    <span>Giá</span>
                    <span>Tồn kho</span>
                    <span>ID sản phẩm</span>
                </div>
                <div>
                    <?php foreach ($data as $row){?>
                <ul class="content__list">
                    
                    <li class="content__item"><?php echo $row["name_product"]?></li>
                    <li class="content__item"><?php echo $row["gia"]?></li>
                    <li class="content__item"><?php echo $row["soluong"]?></li>
                    <li class="content__item"><?php echo $row["id"]?></li>
                    <li class="content__item"><?php echo $row["img"]?></li>
                    <a href="xoa.php?id=<?php echo $row["id"]?>" onclick="return confirm'Ban co muon xoa'"><span><i class="fa-solid fa-trash-can"></i></span></a>
                    <a href="sua.php?id=<?php echo $row["id"]?>"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                    
                    
                </ul>
                
                <?php
                } ?>
                <?php
                    if(isset($_POST['delete'])){
                    $id=$_POST['id'];
                

                    $sql=" DELETE FROM `product` WHERE id = :id";
                    $sql_run=$db->prepare($sql);
                    $sql_exec=$sql_run->execute(array(":id" => $id["id"] ));

                    if($sql_exec)
                    {
                        echo'<h3>Xóa thành công !</h3>';
                    }else{
                        echo'Xóa thất bại !';
                    }
                    }?>
                    
 
                
               
                </div>
                
                </form>
        <div class="footer">
            <div class="footer__icon">
                <span><i class="fa-brands fa-facebook"></i></span>
                <span><i class="fa-brands fa-twitter"></i></span>
                <span><i class="fa-brands fa-instagram"></i></span>
                <span><i class="fa-brands fa-google"></i></span>
            </div>
            <div class="footer__contact">
                <span>Design by Hinh Tan Hiep</span>
            </div>
        </div>

    </div>

</body>

</html>