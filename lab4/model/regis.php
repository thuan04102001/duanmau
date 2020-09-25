<?php
    function themuser($user,$emaillh,$hoten,$sdt,$pass){
        $sql = "INSERT INTO user (user,emaillh,name,sdt, pass) VALUES ('$user','$emaillh','$hoten','$sdt', '$pass')";
        $conn = connect();
        $conn->exec($sql);
    }
?>