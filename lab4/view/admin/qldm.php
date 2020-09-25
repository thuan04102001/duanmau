<section>
    <hr>
    <h1 class="tiltel">THÊM DANH MỤC</h1>
    <?php
        if(isset($_GET['idedit'])&&($_GET['idedit']>0)){
            ?>

            <form action="admin.php?act=qldm" method="post">
                <input type="text" name="name" value="<?=$infodm['name']?>" id="">
                <input type="text" name="sort" value="<?=$infodm['sort']?>" id="">
                <input type="checkbox" name="hot" id=""  >
                <input type="hidden" name="id" value="<?=$infodm['id']?>">
                <input type="submit" value="Cập nhật DM" name="capnhatdm">
            </form>

            <?php
        }else{
    ?>
        <form action="admin.php?act=qldm" method="post">
            <input type="text" name="id" id="" placeholder="  Nhập id danh mục">
            <input type="text" name="name" id="" placeholder=" Nhập tên danh mục">
            <input type="text" name="sort" value="0" id="" placeholder=" sort">
            <input type="checkbox" name="hot" id="">
            <input type="submit" value="Thêm DM" name="themdm">
        </form>
    <?php } ?>
    <hr>
    <h1 class="tiltel">DANH SÁCH DANH MỤC</h1>
    <?php
        if(isset($text_err_dm)&&($text_err_dm!="")){
            echo "<h3 style='color:red'>".$text_err_dm."</h3>";
        }
    ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Sort</th>
            <th>Hot</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
            foreach ($showdsdm as $dm) {
                $id=$dm['id'];
                $name=$dm['name'];
                $sort=$dm['sort'];
                $hot=$dm['sphot'];
                if($hot==1) $hot="<img src='../view/images/checked.png' width='15px'>";
                else $hot="";
                $linkedit="admin.php?act=qldm&idedit=".$id;
                $linkdelete="admin.php?act=qldm&iddelete=".$id;
                echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$sort.'</td>
                        <td>'.$hot.'</td>
                        <td><a href="'.$linkedit.'">edit</a></td>
                        <td><a href="'.$linkdelete.'">delete</a></td>
                    </tr>';
            }
        ?>
    </table>
    <hr>
</section>