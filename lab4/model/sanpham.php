<?php
    //admin: cập nhật sản phẩm
    function capnhatsp($id,$iddm,$name,$timeupdate,$price,$img,$hot){
        if($img!="")
            $sql="UPDATE sanpham set name='$name', iddm='$iddm', updatenew='$timeupdate', price='$price', img='$img', hot='$hot' where id=".$id;
            
        else $sql="UPDATE sanpham set name='$name', iddm='$iddm', updatenew='$timeupdate', price='$price', hot='$hot' where id=".$id;
        
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    //admin:thêm sản phẩm
    function themsp($name,$timeupdate,$price,$img,$iddm,$hot){
        $sql="INSERT INTO sanpham (name, updatenew, price, img, iddm, hot) VALUE ('$name', '$timeupdate', '$price', '$img', '$iddm', '$hot')";
        $conn = connect();
        $conn->exec($sql);
    }
    //admin: xóa sản phẩm
     function xoasp($id){
         $sql="DELETE FROM sanpham WHERE id=".$id;
         $conn = connect();
        $conn->exec($sql);
     }
    // puplic
    function showsp($idcatalog){
        $sql="select * from sanpham where 1";
        if($idcatalog>0){
            $sql.=" AND iddm=".$idcatalog;
        }
        $sql.=" order by id desc";
        $conn = connect();
        $stmt = $conn->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function dssp($hot){
        $conn = connect();
        $sql = "select * from sanpham where 1";
        if($hot==1){
            $sql.=" AND hot=1";
        }        
        $sql.=" order by hot desc";   
        $stmt = $conn->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function showprodetail($id){
        if($id>0){
        $sql="select * from sanpham where id=".$id;
        $conn = connect();
        $stmt = $conn->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();
        }else{
            return 0;
        }
    }
?>