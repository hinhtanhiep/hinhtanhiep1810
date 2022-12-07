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
    <title>Trang thêm sản phẩm</title>
</head>
<body>
    <?php
        require_once "../xuly.php";
        $error=" ";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $name_product=$_POST["name_product"];
           $gia = $_POST["gia"];
           $soluong=$_POST["soluong"];
           $img = $_POST["img"];

            if(empty($name_product)|| empty($gia)||empty($soluong)||empty($img)){
                $error="Không được để trống";
            }else{
                if(strlen($name_product)>=255)
                {
                    echo $error="Tên sản phẩm không hợp lệ";
                }else{
                        $sql= "INSERT INTO `product` (`id`, `name_product`, `gia`, `img`, `soluong`, `role`) VALUES (NULL, '".$name_product."', '".$gia."', '".$soluong."', '".$img."', '1')";
                        $stmt=$db->prepare($sql);
                        $stmt->execute();

                        $error="Thêm thành công !";
                        $name_product=" ";
                        $gia=" ";
                        $soluong=" ";
                        $img="";
                        echo $error;
                    }
            }
        }?>
        <form action="#" method="POST">
            <table>
                <tr>
                    <th>Tên sản phẩm:</th>
                    <td><input type="text" name="name_product" value=""></td>
                </tr>

                <tr>
                    <th>Giá sản phẩm:</th>
                    <td><input type="number" name="gia" value=""></td>
                </tr>

                <tr>
                    <th>Số lượng: </th>
                    <td><input type="number" name="soluong" value=""></td>
                </tr>
                <tr>
                    <th>IMG: </th>
                    <td><input type="text" name="img" ></td>
                </tr>
            </table>
            <button type="submit">Gửi</button>
           
            
        </form>
</body>