<form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input type="submit" name="listok" value="Go">
    </form>

    <div class="row frmcontent">
                    <div class="row mb10 frmdsloai">
                        <a href="index.php?act=statusbill&id='.$id.'"></a>
                        <table>
                            <tr>
                                <th></th>
                                <th>MÃ ĐƠN HÀNG</th>
                                <th>KHÁCH HÀNG</th>
                                <th>SỐ LƯỢNG</th>
                                <th>HÌNH THỨC GIAO HÀNG</th>
                                <th>GHI CHÚ</th>
                                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                                <th>TRẠNG THÁI HIỆN TẠI</th>
                                <th>ĐIỀU </th>
                                <th>NGÀY ĐẶT</th>
                                <th>action</th>
                            </tr>
                            <?php
                            
                                foreach($listbill as $bill){
                                    extract($bill);
                                    $action = '<a style="text-decoration: none; color: #000; border: 1px solid #ccc; padding: 8px; display: block;" href="index.php?act=statusbill&id='.$id.'&status=0">Đang xử lý</a>
                            <a style="text-decoration: none; color: #000; border: 1px solid #ccc; padding: 8px; display: block;" href="index.php?act=statusbill&id='.$id.'&status=1">Đang giao</a>
                            <a style="text-decoration: none; color: #000; border: 1px solid #ccc; padding: 8px; display: block;" href="index.php?act=statusbill&id='.$id.'&status=2">Giao hàng thành công</a>';
                                    $xoabill = "index.php?act=xoabill&id=" . $bill['id'];
                                    if($status == 0){
                                        $status = 'Đang xử lý';
                                        
                                    }else if($status == 1){
                                        $status = 'Đang giao';
                                        
                                    }else{
                                        $status = 'Giao thành công';
                                    }
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
                                            <td>'.$action.'</td>
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