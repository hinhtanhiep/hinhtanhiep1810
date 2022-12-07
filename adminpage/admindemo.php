<!DOCTYPE html>
<html lang="en">
    <head>
    <Style>
        input{
            width: 50%;
            height: 30px;
        }
        button{
            width: 20%;
            height: 30px;
        }
    </Style>
    </head>
    <body>
        <?php include_once "../xuly.php";?>
    <?php
if(isset($_POST['display']))
{
   $sql="SELECT * FROM product";
   $sql_run=$db->query($sql);
   if($sql_run)
   {
        echo'<table width="50%" border="1" cellpadding="5" cellspacing="5">
        <tr style="color:blue;">
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá sản phẩm</td>
            <td>Số lượng</td>
            
        </tr>';
        while($row=$sql_run->fetch(PDO::FETCH_OBJ))
        {
            echo'<tr>
                    <th>'.$row->id.'</th>
                    <th>'.$row->name_product.'</th>
                    <th>'.$row->gia.'</th>
                    <th>'.$row->soluong.'</th>
                </tr>';
            echo'</table>';

        }
   }else{
    echo" No Record / Data Found";
   }
}
?>  
    <?php 
    $id=" ";
    $name_product=" ";
    $gia=" ";
    $soluong=" ";
    $img=" ";
        if(isset($_POST['search'])){
            $id=$_POST['id'];

            $sql=" SELECT* FROM `product` WHERE id = :id";
            $sql_run=$db->prepare($sql);
            $sql_exec=$sql_run->execute(array(":id" => $id ));
        
            if($sql_exec)
            {
                if($sql_run -> rowcount()>0)
                {
                    foreach($sql_run as $row)
                    {
                        $id = $row->id;
                        $name_product = $row->name_product;
                        $gia = $row->gia;
                        $soluong = $row->soluong;
                        $img=$row->img;
                    }

                }else{
                    echo 'No Data Found';
                }
                
            }else{
                echo'Không thể tìm kiếm !';
            }
        }
    ?>
        <center>
            <h1> DỮ LIỆU SẢN PHẨM WEBSITE</h1>
            <form action="#" method="POST">
                <table width="50%" border="1" cellpadding="5" cellspacing="5">
                    <tr>
                        <td><br><br>
                            <center>
                               TÌM KIẾM SẢN PHẨM: <input type="text" name="id" value="<?php echo $id; ?>"placeholder="Tìm Sản Phẩm"></br><br>
                                Tên sản phẩm: <input type="text" name="name_product" value="<?php echo $name_product; ?>"placeholder="Tên của sản phẩm"></br><br>
                                Giá sản phẩm: <input type="number" name="gia"value="<?php echo $gia; ?>"placeholder="Giá sản phẩm "></br><br>
                                Tồn kho: <input type="number" name="soluong"value="<?php echo $soluong; ?>" placeholder="Số lượng tồn kho"></br><br>
                                
                                <button type="submit" name="insert">Thêm</button>
                                <button type="submit" name="search">Tìm kiếm</button>
                                <button type="submit" name="display">Hiển thị</button>
                                <button type="submit" name="delete">Xóa</button>
                                <button type="submit" name="update">Sửa</button>
                            </center>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
<?php
   
    if(isset($_POST['insert']))
    {
        $name_product=$_POST["name_product"];
        $gia=$_POST["gia"];
        $soluong=$_POST["soluong"];
        $img=$_POST["img"];
        $sql="INSERT INTO product(`name_product`, `gia`, `soluong`, `img` )VALUE( :name_product, :gia, :soluong, :img)";
        $sql_run=$db->prepare($sql);
        $sql_exec=$sql_run->execute(array("name_product"=>$name_product,"gia"=>$gia,"soluong"=>$soluong, "img"=>$img));
        if($sql_exec)
        {
            echo "<h2> Dữ liệu đã được thêm vào CSDL</h2> ";
        }
        else{
            echo "<h2> Dữ liệu KHÔNG được thêm vào CSDL</h2>";
        }
    }
    
?>
<?php
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name_product = $_POST['name_product'];
        $gia = $_POST['gia'];
        $soluong= $_POST['soluong'];

        $sql = "UPDATE product SET name_product=:name_product, gia=:gia, soluong=:soluong WHERE id=:id";
        $sql_run=$db->prepare($sql);
        $sql_exec=$sql_run->execute(array(":name_product" => $id, ":gia" => $gia,":soluong"=>$soluong,":id"=>$id ));

        if($sql_exec)
        {
            echo " Sua thanh cong ";

        }else{
            echo "That bai";
        }

    }
?>
