<form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input type="submit" name="listok" value="Go">
    </form>

    <div class="row frmcontent">
                    <div class="row mb10 frmdsloai">
                        
                        <table>
                            <tr>
                                <th></th>
                                <th>MÃ ĐƠN HÀNG</th>
                                <th>KHÁCH HÀNG</th>
                                <th>SỐ LƯỢNG</th>
                                <th>HÌNH THỨC GIAO HÀNG</th>
                                <th>GHI CHÚ</th>
                                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                                <th>TRẠNG THÁI</th>
                                <th>NGÀY ĐẶT</th>
                                <th>action</th>
                            </tr>
                            <?php
                                foreach($listbill as $bill){
                                    extract($bill);
                                    $xoabill = "index.php?act=xoabill&id=" . $bill['id'];
                                    // $hinhpath ="../upload/".$img;
                                    // if(is_file($hinhpath)){
                                    //     $hinh = "<img src='".$hinhpath."' height='80'>";
                                    // }else{
                                    //     $hinh = "no photo";
                                    // }
                                    $countsp = loadall_cart_count($bill["id"]);
                                    echo '<tr>
                                            <td><input type="checkbox" id=""></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            
                                            <td>'.$countsp.'</td>
                                            <td>'.$ship.'</td>
                                            <td>'.$note.'</td>
                                            <td>'.$total.'</td>
                                            <td>'.$status.'</td>
                                            <td>'.$date.'/'.$time.'</td>
                                            <td> <a href="'.$xoabill.'"><input type="button" value="Xóa"></a></td>
                                        </tr>';
                                }
                            ?>

                        </table>

                    </div>

                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa thư mục đã chọn">
                        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </div>
            </div>