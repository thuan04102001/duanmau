
<section>
<hr>
    <h1 class="tiltel">THÊM SẢN PHẨM</h1>
        <div class="row">
            <?php
                if(isset($_GET['idedit'])&&($_GET['idedit']>0)){
                    
                
            ?>
            <form action="admin.php?act=qlsp" method="post" enctype="multipart/form-data">
                    <select name="iddm" id="">
                        <?php
                            foreach ($showdsdm as $dm) {
                                if($infosp['iddm']==$dm['id']){
                                    $s1="selected";
                                }else{
                                    $s1="";
                                }
                                $img=$pathimg.$infosp['img'];
                                if(is_file($img)){
                                    $img='<img src="'.$img.'" width="50px">';
                                }else{
                                    $img="";
                                }
                                echo '<option value="'.$dm['id'].'"'.$s1.'>'.$dm['name'].'</option>';
                            }
                        ?>
                    </select>
                    <input type="text" name="name" id="" value="<?=$infosp['name']?>" placeholder=" Tên sản phẩm...">
                    <input type="text" name="timeupdate" id="" value="<?=$infosp['updatenew']?>" placeholder=" Time update">
                    <input type="text" name="price" id="" value="<?=$infosp['price']?>" placeholder=" Giá sản phẩm">
                    <input type="file" name="img" id=""placeholder="Upload img">
                    <?=$img?>
                    <input type="checkbox" name="hot" id="">
                    <input type="hidden" name="id" value="<?=$infosp['id']?>">
                    <input type="submit" value="Update SP" name=updatesp>
                </form>
            <?php }else{?>
                <form action="admin.php?act=qlsp" method="post" enctype="multipart/form-data">
                    <select name="iddm" id="">
                        <?php
                            foreach ($showdsdm as $dm) {
                                echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                            }
                        ?>
                    </select>
                    <input type="text" name="name" id="" placeholder=" Tên sản phẩm...">
                    <input type="text" name="timeupdate" id="" placeholder=" Time update">
                    <input type="text" name="price" id="" placeholder=" Giá sản phẩm">
                    <input type="file" name="img" id="" placeholder="Upload img">
                    <input type="checkbox" name="hot" id="">
                    <input type="submit" value="Thêm" name=them>
                </form>
            <?php }?>
            <hr>
    <h1 class="tiltel">DANH SÁCH SẢN PHẨM</h1>
        </div>
        <div class="row">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Time update</th>
                    <th>Img</th>
                    <th>Price</th>
                    <th>Hot</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                    foreach ($dssp as $sp) {
                        $id=$sp['id'];
                        $name=$sp['name'];
                        $updatenew=$sp['updatenew'];
                        $hot=$sp['hot'];
                        if($hot==1) $hot="<img src='../view/images/checked.png' width='15px'>";
                        else $hot="";
                        $price=$sp['price'];
                        $img=$pathimg.$sp['img'];
                        if(is_file($img)){
                            $img='<img src="'.$img.'" width="50px">';
                        }else{
                            $img="";
                        }
                        $linkedit="admin.php?act=qlsp&idedit=".$id;
                        $linkdelete="admin.php?act=qlsp&iddelete=".$id;
                        echo '
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$updatenew.'</td>
                            <td>'.$img.'</td>
                            <td>'.$price.'</td>
                            <td>'.$hot.'</td>
                            <td><a href="'.$linkedit.'">edit</a></td>
                            <td><a href="'.$linkdelete.'">delete</a></td>
                        </tr>';
                    }
                ?>
            </table>
        </div>
    </section>
    <hr>