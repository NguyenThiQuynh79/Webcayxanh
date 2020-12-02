<!DOCTYPE html>
<html>
    <head>
        <title> Web cayxanh24h.com</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="./Dangnhap.php">
        <link rel="stylesheet" type="text/css" href="./fontawesome/css/all.css">
        <script src='https://cdn.jsdelivr.net/g/lodash@4(lodash.min.js+lodash.fp.min.js)'></script>
        <script src="./trangchu.js"></script>
    </head>
    <body>
        <form method="POST" action="xuly.php" class="form">
        <div id ="header">
          <div class="container">
            <ul class="menu">
                <li><img src="image/logo1.png"></a></li>
                <li><a href="trangchu.php">TRANG CHỦ</a></li>
                </ul>
             
            <div class="form-search">
                <input type="text" class="keyword" placeholder="Search" autocomplete="off"/>
                <div class="topbar-btn">
                    <a href="#" class="topbar-iconsearch">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
                <div class="btn-login">
                    <a href="./Dangnhap.php">ĐĂNG NHẬP</a>
                </div>
            </div>
        </div>
    </div>
    <div class="sign-up">
        <div class="col-md-6">
            <span><a>Họ tên: </a>
                <span class="input">
                    <input type="text" name="ID" value=""  id="ID" size="60" aria-required="true" aria-invalid="false"placeholder="Id người dùng">
                    <span id="name-erro" class="erro"></span>
                </span>
            </span>
        </div>
        <br>
        <div class="sign-up"> 
        <div class="col-md-6">
            <span><a>Tên đăng nhập: </a>
                <span class="input">
                    <input type="text" name="username" value=""  id="taikhoan" size="60" aria-required="true" aria-invalid="false" placeholder="Tên đăng nhập gồm chữ cái và số thứ tự">
                    <span id="user-erro" class="erro"></span>
                </span>
            </span>
        </div>
        <br>
        <div class="col-md-6">
            <span><a>Mật khẩu: </a>
                <span class="input">
                    <input type="password" name="password" value="" id="matkhau" size="60" aria-required="true" aria-invalid="false" id="pass" placeholder="Mật khẩu có độ dài từ 6~16">
                    <span id="pass-erro" class="erro"></span>
                </span>
            </span>
        </div>
        <br>
        <div class="button">
            <input onclick="save()" name="cayxanh" type="submit" value="Đăng ký"/>
            <a href='./dangki.php' title='nhap lai'>nhập lại</a>
            
        </div>
    </div>
</form>
</body>
</html>
