<?php
    session_start();
    include "../model/connect.php";
    include_once "../global.php";
    include_once "../model/danhmuc.php";
    include_once "../model/sanpham.php";
    
    //xét login
    if(isset($_SESSION['sessionid'])&&($_SESSION['sessionid']>0)){



    //-----
    include_once "../view/admin/header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];

        switch ($act) {
            case 'qlsp':
               
                //add dữ liệu
                if(isset($_POST['them'])&&($_POST['them'])){
                    //lấy dữ liêu trên form về
                    $iddm=$_POST['iddm'];
                    $name=$_POST['name'];
                    $timeupdate=$_POST['timeupdate'];
                    $price=$_POST['price'];

                    $img=$_FILES['img']['name'];
                    $target_file = $pathimg . basename($img);
                    if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
                        $err_upload="Upload file thành công";
                    }else{
                        $err_upload="Thất bại";
                    }
                    if(isset($_POST['hot'])&&($_POST['hot'])) $hot=1; else $hot=0;
                    themsp($name,$timeupdate,$price,$img,$iddm,$hot);

                    
                    //insert database
                    //load lại trang
                }
                //sửa sản phẩm
                    //load sp
                    if(isset($_GET['idedit'])&&($_GET['idedit']>0)){
                        $infosp=showprodetail($_GET['idedit']);
                    }
                    //cập nhật sản phẩm
                    if(isset($_POST['updatesp'])&&($_POST['updatesp'])){
                        $iddm=$_POST['iddm'];
                        $id=$_POST['id'];
                        $name=$_POST['name'];
                        $timeupdate=$_POST['timeupdate'];
                        $price=$_POST['price'];

                        if($img=$_FILES['img']['name']!=""){
                            $img=$_FILES['img']['name'];
                            $target_file = $pathimg . basename($img);
                            if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
                                $err_upload="Upload file thành công";
                            }else{
                                $err_upload="Thất bại";
                            }
                        }else{
                            $img="";
                        }
                        
                        if(isset($_POST['hot'])&&($_POST['hot'])) $hot=1; else $hot=0;
                        capnhatsp($id,$iddm,$name,$timeupdate,$price,$img,$hot);
                    }
                    //xóa sản phẩm
                    if(isset($_GET['iddelete'])&&($_GET['iddelete']>0)){
                        xoasp($_GET['iddelete']);
                    }
                //lấy dữ liệu product
                $showdsdm=dsdm(0,0);
                $dssp=showsp(0);
                include_once "../view/admin/qlsp.php";
                break;
                case 'qldm':
                    //insert
                    if(isset($_POST['themdm'])&&($_POST['themdm'])){
                        $id=$_POST['id'];
                        $name=$_POST['name'];
                        $sort=$_POST['sort'];
                        if(isset($_POST['hot'])&&($_POST['hot'])) $hot=1; else $hot=0;
                        themdm($id,$name,$sort,$hot);
                    }
                    //sửa danh mục
                        //load dm
                        if(isset($_GET['idedit'])&&($_GET['idedit']>0)){
                            $infodm=getinfodm($_GET['idedit']);
                        }
                        //cập nhật sản phẩm
                        if(isset($_POST['capnhatdm'])&&($_POST['capnhatdm'])){
                            $id=$_POST['id'];
                            $name=$_POST['name'];
                            $sort=$_POST['sort'];
                            if(isset($_POST['hot'])&&($_POST['hot'])) $hot=1; else $hot=0;
                            capnhatdm($id,$name,$sort,$hot);
                        }
                    //delete
                    if(isset($_GET['iddelete'])&&($_GET['iddelete'])){
                        $id=$_GET['iddelete'];
                        //kiểm tra thằng cha này có con
                        //if không có thì xóa
                        //if có thì cảnh báo là có con,xóa cha là xóa con 
                        $ds=showsp($id);
                        if(count($ds)>0){
                            $text_err_dm="Danh mục đang có sản phẩm,bạn không được xóa !!!";
                        }else{
                            deletedm($id);
                        }

                        
                    }
                    //showlist
                    $showdsdm=dsdm(0,0);
                    include_once "../view/admin/qldm.php";
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
                include_once "../view/admin/home.php";
                break;
        }
    }else{
        include_once "../view/admin/home.php";
    }
    include_once "../view/admin/footer.php";
}else{
    header('location: login.php');
}
?>