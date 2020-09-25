<head>
    <link rel="stylesheet" href="../view/css/formlogin.css">
    <link rel="stylesheet" href="../view/js/jquery-3.5.0.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
    session_start();
    include_once "../model/connect.php";
    include_once "../model/user.php";
    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
        $user=$_POST['email'];
        $pass=$_POST['pass'];

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
?>
<section>
    <form action="login.php" method="post">
        <div class="boxcenter">
            <div class="row center " id="header">
                <a href="index.php"><img src="../view/images/face.jpg" alt=""></a>
            </div>
            <div class="row bgwhite center">
                <div class="row center sigup">
                    <h2>ĐĂNG NHẬP</h2>
                </div>
                <div class="row center">
                    <div class="mxh">
                        <a href="#"><i class="fa fa-facebook-square fb"></i></a>
                        <a href="#"><i class="fa fa-google-plus-square gg"></i></a>
                    </div>
                </div>
                <div class="all60 center ">
                    <div class="box1 mb"></div>
                    <div class="box3 mb">
                        <span>HOẶC</span>
                        <span>LÀ</span>
                    </div>
                    <div class="box2 mb"></div>
                </div>
                
                    <div class="row center login">
                        <input type="email" name="email" id="email" placeholder="      Địa chỉ Email"><br>
                        <div id="check">
                            <?php
                                if(isset($canhbao)&&($canhbao)) echo $canhbao;
                            ?>
                        </div>
                        <input type="password" name="pass" id="pass" placeholder="      Mật khẩu"><br>
                        <!-- <div id="check1"></div> -->
                        <input type="submit" id="dangnhap" name="dangnhap" value="Đăng nhập"><br>
                        <a href="#">Quên mật khẩu</a>
                    </div>
                
            </div>
            <div class="row center pad40">
                <div class="dangky">
                    <a href="regis.php">Chưa phải là thành viên? Chào mừng gia nhập - <span>Đăng ký ngay!</span></a> 
                </div>
            </div>
        </div>
    </form>
    
</section>
    <script>
        $(function() {
            $("#dangnhap").click(function(e) {
                e.preventDefault();
                var email = $("#email").val();
                var pass = $("#pass").val();

                if (email > "" && pass > "") {
                    var email1 = document.getElementById('email');
                    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if (!filter.test(email1.value)) {
                        $("#check").text("Email không hợp lệ !!! Vui lòng nhập lại.");
                        $("#check1").text("");
                        email1.focus;
                        return false;
                    } else {
                        alert('Đăng nhập thành công <3 \n' + 'Tài khoản: ' + email + '\nPassword: ' + pass);
                        $("#check").text("");
                        $("#check1").text("");
                    }
                } else {
                    if (email == "" && pass == "") {
                        $("#check").text("Không được để trống email !");
                        $("#check1").text("Không được để trống password !");
                    } else {
                        if (email == "") {
                            $("#check").text("Không được để trống email !");
                            $("#check1").text("");
                        } else {
                            $("#check").text("");
                            $("#check1").text("Không được để trống password !");
                        }
                    }
                }

            });
        });
    </script>