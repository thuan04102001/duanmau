<?php    
    function capnhatdm($id,$name,$sort,$hot){
        $sql="UPDATE danhmucs set name='$name', sort='$sort', sphot='$hot' where id=".$id;
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function getinfodm($id){
        $sql="select * from danhmucs where id=".$id;
        $conn = connect();
        $stmt = $conn->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();
    }
    function deletedm($id){
        $sql="delete from danhmucs where id=".$id;
        $conn = connect();
        $conn->exec($sql);
    }
    function themdm($id,$name,$sort,$hot){
        $sql = "INSERT INTO danhmucs (id,name, sort, sphot) VALUES ('$id', '$name', '$sort', '$hot')";
        $conn = connect();
        $conn->exec($sql);
    }

    function catalogname($id){
        $sql="select * from danhmucs where id=".$id;
        $conn = connect();
        $stmt = $conn->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();
    }

    function dsdm($sphot,$home){
        $conn = connect();
        $sql = "select * from danhmucs where 1";
        if($sphot==1){
            $sql.=" AND sphot=1";
        }
        if($home==1) $sql.=" order by sort desc";
        else   $sql.=" order by id desc";
        $stmt = $conn->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }

?>