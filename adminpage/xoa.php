
<?php
require_once "../xuly.php";
                    if(isset($_POST['delete'])){
                    $id=$_POST['id'];
                

                    $sql=" DELETE FROM `product` WHERE id = :id";
                    $sql_run=$db->prepare($sql);
                    $sql_exec=$sql_run->execute(array(":id" => $id["id"] ));

                    if($sql_exec)
                    {
                        header("Location:./admin.php");
                    }else{
                        echo'Xóa thất bại !';
                    }
    
                    }?>
                    
 
                
               