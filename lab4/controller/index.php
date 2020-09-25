<?php
    session_start();
    include "../model/connect.php";
    include_once "../model/danhmuc.php";
    include_once "../model/sanpham.php";
    connect();
    $dsdm= dsdm(0,1); //load tất cả sp
    $menudm=dsdm(1,1); // những danh mục hot
    //load data cho trang chủ
    $dssp=dssp(0);
    $dssphot=dssp(1);


    //-----
    include_once "../view/header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];

        switch ($act) {
            case 'trangchu,home':
                include_once "../view/home.php";
                break;
            case 'product':
                //lấy dữ liệu product
                if(isset($_GET['idcatalog'])&&($_GET['idcatalog']>0)){
                    $iddm=$_GET['idcatalog'];
                    $exportcatalogname=catalogname($iddm);
                }else{
                    $iddm=0;
                    $exportcatalogname="";
                }
                $dssp=showsp($iddm);
                include_once "../view/product.php";
                break;
            case 'productdetail':

                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $pro=showprodetail($id);

                }else{
                    $pro=0;
                    
                }
                
              include_once "../view/productdetail.php";
                break;
            case 'help':
                include_once "../view/needhelp.php";
                break;
            case 'user':
                //đăng kí

                //đăng nhập

                //đăng xuất
                if(isset($_GET['logout'])&&($_GET['logout']==1)){
                    unset($_SESSION['sessionid']);
                    unset($_SESSION['suser']);
                    header('location: index.php');
                }
                include_once "../controller/admin.php";
                break;
            
            default:
                include_once "../view/home.php";
                break;
        }
    }else{
        include_once "../view/home.php";
    }
    include_once "../view/footer.php";
?>