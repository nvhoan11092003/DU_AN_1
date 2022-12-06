<?php
// lấy page hiện tại 
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
// số lượng bản ghi trên 1 trang 
$record_per_page = 10;
// bản ghi bắt đầu
$start_record = ($page - 1) * $record_per_page;
// lấy bản ghi theo page
$listcontact =   loadpage_contact($start_record, $record_per_page);
// lấy số lượng bản ghi
$count_record = count_contact();
// số lượng page

$number_page =  ceil($count_record / $record_per_page);
var_dump($number_page);


// biến khi chọn page nút sẽ có màu sanh
$focus=" bg-blue-500 hover:bg-blue-500";
?>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- liên kết với js -->
<script src="lienhe/lienhe.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH Liên Hệ</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai content" id="content">
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
                    <?php foreach ($listcontact as $key => $value) : extract($value); ?>
                        <tr>
                            <td><?= $start_record+ $key + 1 ?></td>
                            <td><?= $email ?></td>
                            <td><?= $name ?></td>
                            <td><?= $purpose ?></td>
                            <td><?= $description ?></td>
                            <td><?= $tel ?></td>
                            <td><a href="lienhe/xoa.php?id=<?= $id ?>"><button>Xóa</button></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
        <div class="mb-10">
            <!-- nếu page <= 1 ẩn đi nút lùi  -->
            <?php if ($page > 1) { ?>
                <a href="index.php?act=lienhe">
                <button class="p-3 w-[40px] hover:bg-stone-200 border border-stone-500"><<</button>
                </a>
                <a href="index.php?act=lienhe&page=<?=$page-1?>">
                <button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500"><</button>
                </a>
                <a href="index.php?act=lienhe&page=<?= $page - 2 ?>"><button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500" <?= ($page - 2)< 1 ? "hidden" : "" ?> ><?= $page - 2 ?></button></a>
                <a href="index.php?act=lienhe&page=<?= $page - 1 ?>"><button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500"><?= $page - 1 ?></button></a>
            
            <?php } ?>
            <a href="index.php?act=lienhe&page=<?= $page ?>"><button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500 <?= $focus ?>"><?= $page ?></button></a>
            
            <!-- nếu max page thì ẩn đi nút tiến -->
            <?php if ($page < $number_page) { ?>
                <a href="index.php?act=lienhe&page=<?= $page + 1 ?>"><button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500"><?= $page + 1 ?></button></a>
                <a href="index.php?act=lienhe&page=<?= $page + 2 ?>"><button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500" <?= ($page + 2) > $number_page ? "hidden" : "" ?>><?= $page + 2 ?></button></a>
                <a href="index.php?act=lienhe&page=<?= $page + 1 ?>"><button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500" >></button></a>
                <a href="index.php?act=lienhe&page=<?= $number_page ?>"><button class="p-3 w-[40px] hover:bg-stone-200 border border-stone-500" >>></button></a>
            <?php } ?>

        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa thư mục đã chọn">
            <a href=""><input type="button" value="Nhập thêm"></a>
        </div>

    </div>
</div>