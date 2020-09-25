<style>
    body{
        background-color: white;
    }
</style>
<section>
        <div class="all80">
            <div class="product">
                <p>SẢN PHẨM 
                <?php 
                    if($exportcatalogname!="")echo"<i class='fas'>&#xf101;</i><span>".$exportcatalogname['name']."</span>";
                ?> 
                </p>
            </div>

            <div class="boxsanpham boxnghiengimg" id="boxsanpham">

                <?php
                    if(count($dssp)==0){
                        echo "<h2 class=paddingnone>Danh mục này tạm thời không có sản phẩm !!!</h2>";
                    }else{
                        foreach($dssp as $sp){
                            $id=$sp['id'];
                            $update=$sp['updatenew'];
                            $img="../view/upload/".$sp['img'];
                            $name=$sp['name'];
                            $gia=$sp['price'];
                            $link="index.php?act=productdetail&id=".$id;
    
                        if(is_file($img)){
                            $img='<img src="'.$img.'">';
                        }else{
                            $img="";
                        }
                        echo'<div class="boxpro">
                        <a href="'.$link.'">
                        <img href='.$img.'
                        <p>Update new: '.$update.'</p>
                        <p class="cc">'.$name.'</p>
                        <p>Giá: <span>'.$gia.'</span> Vnđ</p>
                        <button class="addcart"><a href="'.$link.'">Mua</a></button>
                        <button class="chitiet"><a href="'.$link.'">Chi tiết</a></button>
                        </a>
                            
                        </div>';
                        }
                    }
                ?>
                <!-- <div class="boxpro">
                    <img src="../view/images/sanpham.png" alt="">
                    <p>Update new: 19-04-2020</p>
                    <p class="cc">LỌC BẠN BÈ ẢO</p>
                    <p>Giá: <span>900000</span> Vnđ</p>
                    <button class="addcart">Mua</button>
                    <button class="chitiet">Chi tiết</button>
                </div>
                <div class="boxpro">
                    <img src="../view/images/sanpham.png" alt="">
                    <p>Update new: 19-04-2020</p>
                    <p class="cc">BUFF FOLLOW FB</p>
                    <p>Giá: <span>700000</span> Vnđ</p>
                    <button class="addcart">Mua</button>
                    <button class="chitiet">Chi tiết</button>
                </div>
                <div class="boxpro">
                    <img src="../view/images/sanpham.png" alt="">
                    <p>Update new: 19-04-2020</p>
                    <p class="cc">VIP LIKE</p>
                    <p>Giá: <span>1700000</span> Vnđ</p>
                    <button class="addcart">Mua</button>
                    <button class="chitiet">Chi tiết</button>
                </div>
                <div class="boxpro">
                    <img src="../view/images/sanpham.png" alt="">
                    <p>Update new: 19-04-2020</p>
                    <p class="cc">AUTO BOT</p>
                    <p>Giá: <span>1100000</span> Vnđ</p>
                    <button class="addcart">Mua</button>
                    <button class="chitiet">Chi tiết</button>
                </div>
                <div class="boxpro">
                    <img src="../view/images/sanpham.png" alt="">
                    <p>Update new: 19-04-2020</p>
                    <p class="cc">REG CLONE VERI</p>
                    <p>Giá: <span>950000</span> Vnđ</p>
                    <button class="addcart">Mua</button>
                    <button class="chitiet">Chi tiết</button>
                </div>
                <div class="boxpro">
                    <img src="../view/images/sanpham.png" alt="">
                    <p>Update new: 19-04-2020</p>
                    <p class="cc">BUFF MẮT LIVE</p>
                    <p>Giá: <span>1100000</span> Vnđ</p>
                    <button class="addcart">Mua</button>
                    <button class="chitiet">Chi tiết</button>
                </div> -->
            </div>
        </div>
    </section>