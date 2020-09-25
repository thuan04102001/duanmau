<?php

    function thembl($name,$idsp,$noidung){
        $sql="INSERT INTO comment (name, idsp, noidung) VALUE ('$name', '$idsp', '$noidung')";
        $conn = connect();
        $conn->exec($sql);
    }

    function showbl($idsp){
        $sql = "select * from comment where idsp='".$idsp."' order by id desc";
        $conn = connect();
        $stmt = $conn->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
?>