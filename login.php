
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HL Store</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'sub/menu.php'?>
<form action="#" method="POST">
        <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" width="100%">
                </div>
				<?php
    session_start();
	if(isset($_SESSION['user']))
	{
		header('location:./index.php');
	}
	
    require_once './xuly.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username=$_POST['username'];
        $password=$_POST['password'];
		if(!isset($error)){
			$query = $db->prepare('
			SELECT username, password,fullname, role
			FROM user
			WHERE username = :username
			');
			$query->bindValue(':username',$username);
			$query->execute();
			$user=$query->fetch(PDO::FETCH_ASSOC);
			if(!$user)
			{
				echo " Không tìm thấy tên tài khoản này";
			}else{
				if(password_verify($password,$user['password'])){
					
					$_SESSION['user']['name'] = $user['fullname'];
					$_SESSION['user']['role'] = $user['role'];

					header('location: ./index.php');
				}else{
					$error = "sai mat khau";
				}
			}
			
			
		}
		
	}
?>
<form action="#" method="POST">
<div class="col-md-6 col-md-offset-3">
	<div class="alert alert-info">
	  <strong>Đăng nhập</strong>
	</div>

	<div class="panel panel-primary">
	    <div class="panel-body">
	    	<div class="form-group">
				<label for="email">Tài khoản:</label>
				<input type="text" class="form-control" name="username" placeholder="Nhập tên đăng nhập...">
			</div>

			<div class="form-group">
				<label for="pwd">Mật khẩu:</label>
				<input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu..." required>
			</div>

			<button type="submit" class="btn btn-default" >Đăng nhập</button>
	    </div>
	</div>
</div>
</form>

	
</body>