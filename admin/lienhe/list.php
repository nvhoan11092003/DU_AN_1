<?php 
    $listcontact = loadall_contact();


?>
<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH Liên Hệ</h1>
            </div>
            <div class="row frmcontent">
                
                    <div class="row mb10 frmdsloai">
                        <table>
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Email</th>
                                <th>Tên</th>       
                                <th>Mục Đính</th>
                                <th>Mô Tả</th>
                                <th>Số Điện Thoại</th>
                                <th>thao Tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($listcontact as $key => $value): extract($value); ?>
                                <tr>
                                    <td><?=$key+1?></td>
                                    <td><?=$email?></td>
                                    <td><?=$name?></td>
                                    <td><?=$purpose?></td>
                                    <td><?=$description?></td>
                                    <td><?=$tel?></td>
                                    <td><a href="lienhe/xoa.php?id=<?=$id?>"><button>Xóa</button></a></td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>

                    </div>

                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa thư mục đã chọn">
                        <a href=""><input type="button" value="Nhập thêm"></a>
                    </div>
                
            </div>
        </div>