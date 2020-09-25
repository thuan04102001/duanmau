<section>
        <div class="row ">
            <div class="autocenter">
            <!-- <div class="product">
            <p>SẢN PHẨM 
                <?php 
                   //if($exportcatalogname!="")echo"<i class='fas'>&#xf101;</i><span>".$exportcatalogname['name']."</span>";
                ?> 
                </p>
            </div> -->
            <div class="boxnoidung ">
                <?php
                    
                    if($pro==0){
                        echo "<h2>Sản phẩm này không tồn tại</h2>";
                    }else{
                        $id=$pro['id'];
                            $update=$pro['updatenew'];
                            $img="../view/images/".$pro['img'];
                            $name=$pro['name'];
                            $gia=$pro['price'];
                            
    
                        if(is_file($img)){
                            $img='<img src="'.$img.'">';
                        }else{
                            $img=0;
                        }
                    }
                ?>
                <div class="boximg">
                    <?=$img?>
                </div>
                <div class="boxcontent">
                    <div class="name">Tên sản phẩm: <span> <?=$name?></span> </div>
                    <div class="ngayupdate">Ngày cập nhập : <span><?=$update?></span> </div>
                    <div class="price">Giá : <span><?=$gia?></span> Vnđ </div>
                    <div class="mua"><button>Mua</button></div>
                    <div class="gioithieu">
                        <p>Chi tiết:</p>
                        Sau khi quậy tung trời ở khu Thiên Đường, Triệu Ngọc xuất hiện với gương mặt của đội trưởng quản giáo tới khu Địa Ngục cứu cha vợ Miêu Khôn. Không ngờ khu Địa Ngục lại còn giam cầm Lundy - người giàu nhất thế giới đã mất tích sáu năm nay. Và giải thưởng
                        tìm được ông ta là một tỷ đô la Mỹ, ứng với quẻ văn siêu cấp hôm nay Triệu Ngọc gieo được: Khôn Cấn - Đoài Khảm.
                    </div>
                </div>
                



            </div>

            <div class="lienquan">
                    <iframe src="binhluan.php?idsp=<?=$_GET['id']?>" width="100%" height="400px" frameborder="0"></iframe>
            </div>
            </div>
            <style>
                body{
                    font-family: sans-serif;
                }
                .row{
                    background-color:white;
                }
                .autocenter{
                    width:90%;
                    margin: 0 auto;
                }
                .boxnoidung {
                
                    margin-top:250px;
                    margin-bottom:110px;
                    width: 70%;
                    min-height: auto;
                    float: left;
                    background-color: whitesmoke;
                }
                
                .boximg {
                    float: left;
                    width: 30%;
                    background-color: whitesmoke;
                    border: 1px #888 solid;
                    margin: 2% ;
                }
                .boximg img{
                    width: 100%;
                }
                
                .boxcontent {
                    float: right;
                    width: calc(67% - 20px);
                    font-family: sans-serif;
                    line-height: 25px;
                    margin: 3% 0%;
                }
                
                .boxcontent .name {
                    font-size: 16pt;
                    margin-top: 0px;
                    margin-bottom: 10px !important;
                }
                
                .boxcontent .name span {
                    font-weight: bold;
                    font-size: 16pt;
                    line-height: 5px;
                }
                
                .boxcontent .ngayupdate {
                    font-size: 14pt;
                    margin-top: 0px;
                    margin-bottom: 10px !important;
                    color: blueviolet;
                }
                
                .boxcontent .price {
                    font-size: 14pt;
                    margin-top: 0px;
                    margin-bottom: 20px !important;
                }
                
                .boxcontent .price span {
                    color: red;
                }
                
                .boxcontent button {
                    background-color: rgb(156, 248, 240);
                    width: 10%;
                    padding: 5px 0px;
                    border: 1px solid black;
                    border-radius: 20px !important;
                    font-size: 14pt;
                    margin-top: 0px;
                    margin-bottom: 10px !important;
                    outline: none;
                }
                
                .boxcontent button:hover {
                    background-color: turquoise;
                    border: 1px solid rgb(211, 211, 211);
                }
                
                .boxcontent .gioithieu {
                    width: 95%;
                    font-size: 14px;
                    margin-top: 10px;
                    margin-bottom: 0px;
                }
                
                .boxcontent .gioithieu p {
                    font-weight: bold;
                    margin: 0px;
                }
                
                .lienquan {
                    margin-top:250px;
                    margin-bottom:110px;
                    float: left;
                    width: calc(30% - 20px);
                    min-height: 300px;
                    margin-left: 20px;
                    background-color: whitesmoke;
                }
            </style>
            <section>