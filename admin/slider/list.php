<div class="row">
            <div class="row frmtitle">
                <h1>LIST SLIDER</h1>
            </div>
            <div class="row frmcontent">
                <form action="" method="post">
                    <div class="row mb10 frmdsloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>STT</th>
                                <th>HÌNH</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listanhbia as $anhbia){
                                    extract($anhbia);
                                    $suabia = "index.php?act=suabia&id=".$id;
                                    $xoabia = "index.php?act=xoabia&id=".$id;
                                    $hinhpath ="../upload/".$img;
                                    if($status==1){
                                        $status='Sử dụng';
                                    }else{
                                        $status='Không sử dụng';
                                    }
                                    if(is_file($hinhpath)){
                                        $hinh = "<img src='".$hinhpath."' height='80'>";
                                    }else{
                                        $hinh = "no photo";
                                    }

                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$status.'</td>
                                    <td><a href="'.$suabia.'"><input type="button" value="Sửa"></a> <a href="'.$xoabia.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                                }
                            ?>

                        </table>

                    </div>

                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa thư mục đã chọn">
                        <a href="index.php?act=addslider"><input type="button" value="Nhập thêm"></a>
                    </div>
                </form>
            </div>
        </div>