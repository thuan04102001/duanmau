<?php
    function checkuser($user,$pass){
        $sql="select * from user where user='".$user."' and pass='".$pass."'";
        $conn=connect();
        $stmt = $conn->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();
    }
?>