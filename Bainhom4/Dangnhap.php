
<?php
//Khai báo sử dụng session
session_start();
include('connect1.php');
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['Dangnhap'])) 
{
    //Kết nối tới database
    
     
    //Lấy dữ liệu nhập vào
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    $sql_up = "SELECT username, password FROM nguoidung WHERE username='$username'";
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($con,$sql_up);
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    else{ 
    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    $username = $_POST['username'];
    $password = MD5($_POST['password']);
    $sql_check = mysqli_query($con,"select * from nguoidung where username = '$username'");
    //if (mysqli_num_rows(mysqli_query($conn,$sqlu)) > 0) {
     // echo "tài khoản đã tồn tại vui nhập lại";   
    $dem = mysqli_num_rows($sql_check);
    if($dem == 0)
    {
        echo "<p class='thongbao1'>Tài khoản không tồn tại</p>";
    }
    else
    {
        $sql_check2 = "select * from nguoidung where username = '$username' and password = '$password'";
        $rows = mysqli_query($con,$sql_check2);    
        $dem2 = mysqli_num_rows($rows);
        if($dem2 == 0)
            echo "<p class='thongbao1'>Mật khẩu không chính xác</p>";
        else
        {
    
         while($row = mysqli_fetch_array($rows))
            {
              $_SESSION['username'] = $username;
                $_SESSION['phanquyen'] = $row['phanquyen'];
                $_SESSION['idnd'] = $row['idnd'];
                if($row['phanquyen'] == 0)
                {
                    
                    echo "
                            <script language='javascript'>
                                alert('Đăng nhập quản trị thành công');
                                window.open('./admin/admin.php','_self', 1);
                            </script>
                        ";
                }
                else
                {
                    
                    header('location:trangchu.php');
                }
            }
        }
      }
    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='trangchu.php'>Về trang chủ</a>";
    die();
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
     <script src="./cayxanh.js"></script>
    <script src='https://cdn.jsdelivr.net/g/lodash@4(lodash.min.js+lodash.fp.min.js)'></script>
</head>
<style>
    .login {
        
        width: 500px;
        height: 350px;
        border: 1px solid grey;
        border-radius: 10px;
        text-align: center;

        

        
}
h2{
    margin-top: 20px;
    color: #868787;
    font-family:  sans-serif;
}

    *{
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}
body 
{
  font-family: tahoma;
  font-size: 16px; 
  background: #F5F5F5;     
}
p{
  margin-top: 30px;
  color: grey;
}
   

}
.sign-in{
  float: left;
  margin-top: 30px;
  margin-left:450px;
  margin-right:150px;

}
.sign-up{
  float: left;
  margin-top: 30px;
  margin-left:450px;
  margin-right:150px;
}
.sign-in input[type="password" i] {
    -webkit-text-security: disc !important;
    padding: 1px 2px;
    padding-left: 20px;
    width: 432px;


}

.col-md-6{
  width: 70%;
  height: 60px;
  padding-left: 20px;
  
}

.col-md-6 span a{
  color: #33CCFF;
  font-weight: bold;
  font-size: 20px;
}
.col-md-6 input{
    border: 1px solid gray;
    padding-left: 20px;
   height: 40px;
  border: 1px solid #EEEEEE;
  background: #E8E8E8;
  display: block;
}
.col-md-6 input:hover{
  border: 1px solid #C0C0C0;
}
.button input{
     background-color: lightblue;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    line-height: 30px;
    padding: 0 20px;
    width: 428px;
    height: 40px;
    margin-right: 19px;
}
.button input:hover{
  background: #5F9EA0;
  color: white;
  transition: ease-in 0.35s;
  -moz-transition: ease-in 0.35s;
  -webkit-transition: ease-in 0.35s;
}
.button a{
  text-decoration-line: none;
  color: #33CCFF;
}

.button2 input{
  background-color: #1877f2;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    line-height: 30px;
    padding: 0 20px;
    width: 240px;
}
.button2 input:hover{
  background: #5F9EA0;
  color: white;
  transition: ease-in 0.35s;
  -moz-transition: ease-in 0.35s;
  -webkit-transition: ease-in 0.35s;
}
.button2 a{
  text-decoration-line: none;
  color: #33CCFF;
}
.sign-up input[type="password" i] {
    -webkit-text-security: disc !important;
    padding: 1px 2px;
}
.erro{
  color:red;
  font-size: 14px;
}


.button-two{
    width: 150px;
    height: 50px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: none;
    background-color: green;
    color: #FFF;
    font-size: 15px;
    margin-top: 10px;
}







</style>
<body>
    <form action='Dangnhap.php' method='POST'>
        <table align="center" cellspacing="0" cellpadding="100">
            <td>
    <div class="login" align="center">
        <div class="login" align="center">
        <h2> Member Login </h2>
<div class="sign-in">
        <div class="col-md-6">
            
                    <br>
                 <input type="text" name="username" id="user" size="60" aria-required="true" aria-invalid="false" placeholder="Username">
                    <span id="user-erro" class="erro"></span>
                </span>
            </span>
        </div>
        <br>
        <div class="col-md-6">
                     <br>
              <input type="Password" name="password" id="pass" pattern=".{4,}" size="60" aria-required="true" aria-invalid="false" placeholder="Password">
                    <span id="pass-erro" class="erro"></span>
                </span>
            </span>
        </div>
        <br>
        <div class="button">
            <input onclick="save()" name="Dangnhap" type="submit" value="Đăng nhập"/>
</div>
        <div>
        <button class="button-two"><strong> <a href="./dangky.php"> Tạo Tài Khoản Mới</strong></button>
    </div>
    </div> 
</div>
</div>
</td>
</table>
   
</form>

</body>
</html>