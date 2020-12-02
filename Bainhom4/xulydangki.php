<?php

include("include/connect.php");

if(isset($_POST['cayxanh']))
{
    $Username=$_POST['Username'];
   $tennd=$_POST['tennd'];
    $Password=MD5($_POST['Password']);
    $ngaysinh=$_POST['ngaysinh'];
    $gioitinh=$_POST['gioitinh'];
    $email=$_POST['email'];
    $dienthoai=$_POST['dienthoai'];
    $diachi=$_POST['diachi'];
    $ID=$_POST['ID'];
        
    //lấy giỏ của hệ thống
    $dmyhis=date("Y").date("m").date("d").date("H").date("i").date("s");
    
    //lấy ngày của hệ thống
    $ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
    
    $sql_insert="INSERT INTO admin(tennd,Username,Password,ngaysinh,gioitinh,email,dienthoai,diachi,ngaydangky,phanquyen,ID)values('$tennd','$Username','$Password','$ngaysinh','$gioitinh','$email','$dienthoai','$diachi','ID','$ngay','1')";
    
    $query=mysqli_query($link,$sql_insert);
    if($query)
    {
        //điều hướng 
        echo "<p align='center'> Đăng ký thành công! </p>";
        echo '<meta http-equiv="refresh" content="1;url=trangchu.php">';
    }
    else
    {
        echo "<p align='center'> Đăng ký thất bại! </p>";
        echo '<meta http-equiv="refresh" content="1;url=dangki.php">';
    }
}

