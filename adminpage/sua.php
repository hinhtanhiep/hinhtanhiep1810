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
    <title>Trang sửa sản phẩm</title>
</head>
<body>
    <?php
        include_once "../xuly.php";
        $sql="SELECT id, name_product, gia, soluong, img FROM product WHERE  role=1";
        $data=$db->query($sql);?>
  <?php
  require_once("../xuly.php");
  $id = "";
  $name_product = "";
  $gia = "";
  $soluong= "";
  if(isset($_POST['update']))
  {
      

      $sql = "UPDATE product SET name_product=:name_product, gia=:gia, soluong=:soluong WHERE id=:id";
      $sql_run=$db->prepare($sql);
      $sql_exec=$sql_run->execute(array(":name_product" => $name_product, ":gia" => $gia,":soluong"=>$soluong,":id"=>$id ));

      if($sql_exec)
      {
          echo " Sua thanh cong ";

      }else{
          echo "That bai";
      }

  }
?>

        <form action="#" method="POST">
        <?php foreach ($data as $row){?>
            <table>
               
                <tr>

                    <th>Tên sản phẩm:</th>
                    <td><input type="text" name="name_product" value="<?php echo $row["name_product"]; ?>"></td>
                </tr>

                <tr>
                    <th>Giá sản phẩm:</th>
                    <td><input type="number" name="gia" value="<?php echo $row["gia"]; ?>"></td>
                </tr>

                <tr>
                    <th>Số lượng: </th>
                    <td><input type="number" name="soluong" value="<?php echo $row["soluong"]; ?>"></td>
                </tr>
            </table>
            <button name="update" type="submit">Sua</button>
           
            <?php 
        }?>
        </form>
</body>