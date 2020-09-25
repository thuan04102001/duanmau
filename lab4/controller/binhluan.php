<?php
    ob_start();
    session_start();

    include_once "../model/connect.php";
    include_once "../model/binhluan.php";

    if(isset($_SESSION['sessionid'])&&($_SESSION['sessionid']>0)){
        if(isset($_SESSION['suser'])&&($_SESSION['suser']!="")){
            $user=$_SESSION['suser'];
        }else{
            $user=""; 
        }

        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            //lấy dữ liệu về
            $name=$user;
            $idsp=$_POST['idsp'];
            $noidung=$_POST['noidung'];
            //xử lí dữ liệu
            //xuất
            thembl($name,$idsp,$noidung);
        }

        $dsbl=showbl($_GET['idsp']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
    <link rel="stylesheet" href="../view/css/style.css">
</head>
<body>
    <h3 class="titlecmt">BÌNH LUẬN</h3>
    <hr class="mt0">
    <form action="binhluan.php?idsp=<?=$_GET['idsp']?>" method="post">
        <input type="hidden" name="idsp" value="<?=$_GET['idsp']?>">
        <textarea name="noidung" id="" cols="30" rows="2"></textarea>
        <input type="submit" value="Gửi bình luận" name="guibinhluan">
    </form>
    <hr>

    <?php
        foreach ($dsbl as $bl) {
            echo '
                <div class="boxcmt">
                    <p>'.$bl['name'].' :</p><span>'.$bl['noidung'].'</span>
                </div>
            ';
        }
    ?>
</body>
</html>
    <?php }else{
        echo "<a href='login.php' target='_parent'>Vui lòng đăng nhập để có thể comment !!!</a>";
    }?>