<head>
    <link rel="stylesheet" href="../view/css/formlogin.css">
    <link rel="stylesheet" href="../view/js/jquery-3.5.0.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
    if (!isset($_SESSION)) {
        session_start();
        ob_start();
    }  
    include_once "../model/connect.php";
    include_once "../model/user.php";
    include_once "../model/regis.php";
     
     
            if(isset($_POST['dangky']) && ($_POST['dangky'])){
                if ($_POST['pass'] != $_POST['retypepass']) {
                    echo "<h3>Mật khẩu không khớp !!!</h3>";
                }
                else {
                    $user = $_POST['email'];
                    $emaillh = $_POST['emaillh'];
                    $hoten = $_POST['hoten'];
                    $sdt = $_POST['sdt'];
                    $pass = $_POST['pass'];
                    $retypepass = $_POST['retypepass'];
                    themuser($user,$emaillh,$hoten,$sdt,$pass,$retypepass);
                    echo "<h3>Đăng kí thành công >.< </h3>";
                    $checkuser=checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['sessionid']=$checkuser['id'];
                        $_SESSION['suser']=$checkuser['name'];
                        if($checkuser['role']==1) header('location: admin.php');
                        else header('location: index.php');
                    }else{
                        
                        $canhbao="Tài khoản & mật khẩu không hợp lệ - vui lòng đăng kí !!!";
                    }
                    
                }
            }
            echo ' 
            <form action="regis.php" method="post">
                <div class="boxcenter">
                    <div class="row center " id="header">
                        <a href="index.php"><img src="../view/images/face.jpg" alt=""></a>
                    </div>
                    
                    <div class="row bgwhite center">
                        <div class="row center regis">
                            <h2>ĐĂNG KÝ</h2>
                        </div>
                        
                        
                        <div class="row center regis">
                            <input type="email" name="email" id="email" placeholder="      Địa chỉ Email đăng nhập"><br>
                            <input type="email" name="emaillh" id="emaillh" placeholder="      Địa chỉ Email liên hệ"><br>
                            <input type="text" name="hoten" id="hoten" placeholder="      Họ & tên "><br>
                            <input type="text" name="sdt" id="" placeholder="       Số điện thoại  ">
                            <input type="password" class="mh" name="pass" id="pass" placeholder="      Nhập mật khẩu"><br>
                            <input type="password" class="mh" name="retypepass" id="retypepass" placeholder="       Nhập lại mật khẩu "><br>
                            <input type="submit" id="dangky" name="dangky" value="Đăng ký"><br>
                            
                        </div>
                        
                    </div>
                    <div class="row center pad40">
                        <div class="dangky">
                            <a href="login.php">Đã đăng ký thành viên ? Chào mừng gia nhập - <span>Đăng nhập ngay!</span></a> 
                        </div>
                    </div>
                </div>
            </form>';
        
            

?>