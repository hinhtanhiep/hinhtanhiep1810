<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'sub/head.php'?>
</head>

<body>
    <?php include 'sub/menu.php'?>
    <!-- ------------Account-page------------------- -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                        
                            <span onclick="contact()">Liên Hệ Chúng Tôi Ngay: </span>
                            
                        </div>

                    

                        <form id="RegForm">
                            
                            <input type="text" placeholder="Tên">
                            <input type="email" placeholder="Địa chỉ Email">
                            <textarea name="message" placeholder="Nhập lời nhắn " style="width: 257px; height: 112px;"></textarea>
                            <button type="submit" class="btn">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php include 'sub/footer.php'?>
        
        
        

        <script>
      
            var RegForm = document.getElementById("RegForm");
            
            

            function contact() {
                RegForm.style.transform = "translateX(0px)";
           

            }
    


        </script>

</body>

</html>