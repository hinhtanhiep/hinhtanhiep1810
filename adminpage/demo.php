<?php
include_once '../xuly.php';
if(isset($_POST['search'])){
    $id = $_POST['id'];

    $sql="SELECT * FROM product WHERE id=: id";
    $sql_run=$db->prepare($sql);
    $sql_exec=$sql_run->execute(array(":id"=>$id));
    if($sql_exec)
    {
        if($sql_run->rowCount()>0)
        {
            foreach($sql_run as $row){
                $id=$row->$id;
                $name_product=$row->$name_product;
                $gia=$row->$gia;
                $soluong=$row->$soluong;
            }
        }else{
            echo 'No data found';
        }
    }else{
        echo 'data not search';
    }
}
?>
