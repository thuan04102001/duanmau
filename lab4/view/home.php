<section>
        <div class="allthan">
            <section>
                <div class=" hoa" style="background-image: url(../view/images/face.jpg);">

                    <div class="intro overlay">
                        <div class="textintro ">
                            <p>Hello my friends and wives</p>
                            <h1>I'M <span>Phạm Đình Thuận</span> - Maketing <span>Facebook</span></h1>
                        </div>
                        <div class="get ">
                            <a target="_blank" class="bgget" href="https://www.facebook.com/100038192733422">Facebook</a>
                            <a target="_blank" class="bgget insta" href="https://www.instagram.com/thuan_mobb">Instagram</a>
                            <div class="link">
                                <a onclick="getlink()" href="#">Get link profile me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row mt100">
                    <div class="all80 sanpham">
                        <div class="danhmuc">
                            <div class="dm1">
                                <p>DANH MỤC</p>
                                <i class='fas fa-list-ul'></i>
                            </div>
                            <div class="dm2">
                                <?php
                                //$link = "index.php?act=product?idcatalog";
                                foreach($dsdm as $dm){
                                    $name=$dm['name'];
                                    $link="index.php?act=product&idcatalog=".$dm['id'];
                                    echo '<div class="ldm">
                                    <a href="'.$link.'">'.$name.'</a></div>';
                                }
                                ?>
                                
                            </div>
                        </div>
                        <div class="menudanhmuc">
                            <div class="mienphi">
                                <p>TOOL HOT</p>
                            </div>
                            <div class="khac">
                                <div class="textkhac">
                                    <?php 
                                        foreach ($menudm as $dm2) {
                                            //lấy dữ liệu
                                            $name=$dm2['name'];
                                            $link='index.php?act=product&idcatalog='.$dm2['id'];
                                            //view
                                            echo '<a href="'.$link.'">'.$name.'</a>';
                                        }
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="sanphams">
                            <div class="contact1  mb0 ">
                                <p>Tool hỗ trợ facebook</p>
                                <p>Chúng tôi đã tạo ra nhiều công cu hỗ trợ facebook giúp người dùng được thao tác hiệu quả hơn và mọi người đều rất thích các sản phẩm này.</p>
                            </div>
                            <div class="shop" id="shop">
                                <div class="icon" id="icon">
                                    <img src="../view/images/sanpham.png" alt=""> <br>
                                    <span id="countsp"></span>
                                </div>
                                <div class="boxcart" id="boxcart">
                                    <table id="mycart">
                                    </table>
                                    <hr>
                                    <div class="hoadon">
                                        <span>Tổng tiền: </span>
                                        <span id="total">0</span> Vnđ
                                    </div>
                                    <div class="close">
                                        <button id="close">x</button>
                                    </div>
                                </div>
                            </div>
                            <div class="boxsanpham boxnghiengimg" id="boxsanpham">
                                <?php
                                    foreach($dssphot as $sp1){
                                        $id=$sp1['id'];
                                        $update=$sp1['updatenew'];
                                        $img="../view/upload/".$sp1['img'];
                                        $name=$sp1['name'];
                                        $gia=$sp1['price'];
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
                                ?>
                                <!-- <div class="boxpro">
                                    <img src="../view/images/sanpham.png" alt="">
                                    <p>Update new: 19-04-2020</p>
                                    <p class="cc">LỌC BẠN BÈ ẢO</p>
                                    <p>Giá: <span>900000</span> Vnđ</p>
                                    <button class="addcart">Mua</button>
                                    <button class="chitiet">Chi tiết</button>
                                </div>
                                <div class="boxpro ">
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
                    </div>
                </div>
            </section>

            <section>
                <div class="row thuoctinh">
                    <div class="goivip all80">

                        <div class="sale mb50">
                            <h1>Sản Phẩm Mới</h1>
                        </div>
                        <div class="row">
                            <div class="boxpro">
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
                        </div>

                    </div>
                </div>
            </section>

            <section>
                <div class="row thuoctinh">
                    <div class="goivip all80">

                        <div class="sale">
                            <h1>Dịch Vụ Facebook</h1>
                        </div>
                        <div class="sales">
                        <div class="rows mt100 mr4">
                            <div class="icons">
                                <i class='fas'>&#xf09e;</i>
                                <!-- <img src="../view/images/giay1.jpg" alt=""> -->
                            </div>
                            <div class="tendv">
                                <div class="cmm">
                                    <h2>follow facebook & instgram</h2>
                                    <p>
                                        - 1000 follow = 300.000 Vnđ <br> - 5000 follow = 1.500.000 Vnđ <br> - 10000 follow = 2.900.000 Vnđ <br>
                                        <b>Mua nhiều sẽ được giảm !!!</b>
                                    </p>
                                </div>
                                <a target="_blank" href="https://www.facebook.com/messages/t/100038192733422" class="more">Săn liền tay.</a>
                            </div>
                        </div>
                        <div class="rows mt100 mr4 mgt-60">
                            <div class="icons">
                                <i class='fab'>&#xf23e;</i>
                                <!-- <img src="../view/images/giay2.jpg" alt=""> -->
                            </div>
                            <div class="tendv">
                                <div class="cmm">
                                    <h2>security facebook</h2>
                                    <p>
                                        - Chống checkpass. <br> - Bảo mật nhiều lớp. <br> - Bảo mật theo tháng/năm. <br>
                                        <b>Bảo mật sớm thì tốn ít tiền hơn khi mất tài khoản !!!</b>
                                    </p>
                                </div>
                                <a target="_blank" href="https://www.facebook.com/messages/t/100038192733422" class="more">Săn liền tay.</a>
                            </div>
                        </div>
                        <div class="rows mt100 mgt-60 moree">
                            <div class="icons">
                                <i class='far'>&#xf058;</i>
                                <!-- <img src="../view/images/giay3.jpg" alt=""> -->
                            </div>
                            <div class="tendv">
                                <div class="cmm">
                                    <h2>mua bán fanpage-group</h2>
                                    <p>
                                        Bán các loại fanpage từ (1k - 100k Like) <br> Hỗ trợ các vấn đề về fanpage-group.
                                    </p>
                                </div>
                                <a target="_blank" href="https://www.facebook.com/messages/t/100038192733422" class="more">Săn liền tay.</a></div>
                        </div>
                    </div>
                        </div>
                </div>
            </section>

            <section>
                <div class="row" style="background-image: url(../view/images/chat.jfif);background-position: center;background-size: 90%; background-attachment: fixed;">
                    <div class="mywork overlay1">
                        <div class="all80">
                            <div class="work all80">
                                <div class="box1">
                                    <img src="../view/images/youzhang1.png" alt="">
                                </div>
                                <div class="box2">
                                    <div class="profile">
                                        Official Profile
                                    </div>
                                    <h2 class="content">Phạm Đình Thuận - Support Facebook</h2>
                                    <p class="bla">
                                        Là một người có năng lực về marketing và nhiều lĩnh vực khác.Đặc biệt là về dịch vụ mạng xã hội (Facebook-Instagram-Zalo). <br> - Bảo mật - Mở khóa tài khoản - khôi phục các tài khoản chính chủ bị (quên mật khẩu-checkpass-via...)
                                        <span style="color: yellow;">Yêu cầu phải có giấy tờ trùng với account.</span> <br> - Lọc tương tác. <br> - Chạy tương tác <br> - Tặng like & follow. <br> - Auto bot cảm xúc tương tác. <br> - Nhận chạy Quảng Cáo
                                        Ads
                                        <span style="color: yellow;">Yêu cầu: Content phải chuẩn bị trước ! </span>
                                    </p>
                                    <br>
                                    <div class="mxh">
                                        <a href="https://www.facebook.com/100038192733422" class="bgmxh" target="_blank">
                                                    Facebook
                                                </a>
                                        <a href="https://www.instagram.com/thuan_mobb" class="bgmxh" target="_blank">
                                                    Instgram
                                                </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section>
                <div class="row lienhe">
                    <div class="all80">
                        <div class="contact2 ">
                            <h1>Contact Us</h1>
                            <p>Send us your inquiry, we will help you and reply as soon as possible</p>
                        </div>
                        <div class="info">
                            You can send us something like a question or project, we are open 09:00 to 17:00.
                            <br> Phone: 0913528211
                            <br> Email: thuandubro@gmail.com
                            <div class="mt100 diachi">
                                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1fTb9kzliarJeNZTePI7cn-13ztX4KKBm"></iframe>
                            </div>
                        </div>
                        <div class="mess">
                            <input type="text" name="ten" id="ten" placeholder="    Name">
                            <input type="email" name="email" id="email" placeholder="   Email">
                            <input class="ipw1" type="text" name="subject" id="subject" placeholder="    Subject">
                            <input class="ipw2" type="text" name="message" id="message" placeholder="    Message">
                            <button onclick="lienhe()">SEND MESSAGE</button> <br>
                            <div id="ketqua">
                                <div id="kq">
                                    <div class="all80" id="error"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section> -->

            <!-- <section>
                <div class="row followme">
                    <div class="all80">
                        <div class="left">
                            <h3>If you find it interesting, useful and favor, don't forget . . .</h3>
                        </div>
                        <div class="right">
                            <a href="#" class="sub" onclick="sub()">subscribe now</a>
                        </div>
                    </div>
                </div>
            </section> -->
        </div>
    </section>