
<!DOCTYPE html>
<html>
    <head>
    <?php include'sub/head.php'?>
    </head>
    <body>
    
        <form action="#" method="POST">
        <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" width="100%">
                </div>
                <?php
                session_start();
                require_once './xuly.php';
                $error="";
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $fullname=$_POST['fullname'];
                
                    if(empty($username)or empty($password) or empty($fullname)){
                        $error='Không được để trống mật khẩu hoặc tên hoặc tài khoản';
                    }else
                    {
                        if(strlen($username) < 4 or strlen($username)>50)
                        {
                            $error=' tài khoản phải có từ 4->50 kí tự';
                        }
                        if(strlen($password) < 4 or strlen($password)>50)
                        {
                            $error=' password phải có từ 4->50 kí tự';
                        }
                        
                    }
                    $checkname="/^[a-zA-Z]+$/";
                    if((preg_match($checkname,$fullname)==0)){
                        $error='Tên không hợp lệ';
                        }
                        $query="SELECT username FROM user WHERE username=:username";
                        $stmt=$db->prepare($query);
                        $stmt->bindValue(':username',$username);
                        $stmt->execute();

                        $user=$stmt-> fetch (PDO::FETCH_ASSOC);
                        if($user){
                        $error ='Tài khoản đã tồn tại';
                        }
                    if($error!=='') {
                        
                    }
                    else{
                        $password=password_hash($password,PASSWORD_DEFAULT);
                        $query = $db->prepare('
                        INSERT INTO user (username, password, fullname)
                        VALUE (:username, :password, :fullname)
                        ');
                        $query->bindParam(':username',$username);
                        $query->bindParam(':password',$password);
                        $query->bindParam(':fullname',$fullname);

                        $query->execute();
                        $_SESSION['user']['name']=$fullname;
                        $_SESSION['user']['role']=2;
                        header('location:./login.php');
                        
                    }
                }
                ?>
        
            
           <?php if($error!==""){
            echo '<h1> '.$error.'</h1>';
           }
            ?>
            <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                           
                            <span onclick="register()">Đăng kí</span>
                            
                        </div>

                      

                        <form id="RegForm">
                            
                            <input type="text" name="username"placeholder="Tên đăng nhập">
                            <input type="password" name="password" placeholder="Nhập mật khẩu">
                            <input type="text" name="fullname"placeholder="Tên đầy đủ">
                            <button type="submit" class="btn">Đăng Kí</button>
                        </form>

                    </div>
            </div>
            <?php include 'sub/footer.php'?>
    </body>
</html>