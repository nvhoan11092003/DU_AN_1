<?php

$id_user = $_SESSION['user']['id'];
$list_comment = select_comment_by_user($id_user);

?>

<div class="w-full">
    <h1 class="text-4xl text-black ">THÔNG TIN CHUNG</h1>
    <div class="border-b-4 border-red-500 w-[60px] mb-10"></div>
    <div class="flex items-center gap-x-24">
        <!-- tiêu đề -->
        <h3 class="p-1 mb-10 border-l-4 border-red-500 text-3xl text-black ">Thông tin tài khoản</h3>
        <a href="index.php?act=thongtintk" class="p-1 pb-10 text-blue-500 hover:no-underline">Chỉnh Sửa</a>
    </div>
    
    <!-- form thông tin -->
    <div class="border border-black p-10 w-[350px] mb-10">
        <!-- tên -->
        <div class="mb-3">
            <div class="w-[150px]  float-left">Họ Và Tên </div>
            <div class=""><?= $name ?></div>
        </div>
        <!-- email -->
        <div class="mb-3">
            <div class="w-[150px]  float-left">Email</div>
            <div class=""><?= $email ?></div>
        </div>
        <!-- số điện thoại -->
        <div class="mb-3">
            <div class="w-[150px]  float-left">Số Điện Thoại</div>
            <div class=""><?= $tel ?></div>
        </div>
    </div>
    <!-- đơn hàng -->
    <div class="flex items-center gap-x-24">
        <!-- tiêu đề -->
        <h3 class="p-1 w-[500px] mb-10 border-l-4 border-red-500 text-3xl text-black ">Đơn Hàng</h3>
        <a href="index.php?act=donhang" class="p-1 pb-10 text-blue-500 hover:no-underline ">Xem Tất Cả</a>
    </div>
    <div class="border-b-2 border-red-500 mb-10"></div>
    <!-- bình luận -->
    <div class="flex items-center gap-x-24">
        <!-- tiêu đề -->
        <h3 class="p-1 w-[500px] mb-10 border-l-4 border-red-500 text-3xl text-black ">Bình luận</h3>
        <a href="index.php?act=binhluan" class="p-1 pb-10 text-blue-500 hover:no-underline ">Xem Tất Cả</a>
    </div>
    <div class="border-b-2 border-red-500 mb-10"></div>
    <table>
        <?php if ($list_comment !== []) {
            echo "
        <thead>
            <tr>
                <th></th>
                <th>Tên Sản Phẩm</th>
                <th>Thời Gian</th>
                <th>Nội Dung</th>
            </tr>
        </thead>";
        } ?>
        
        <tbody>
            <?php foreach ($list_comment as $key => $value) : extract($value) ?>
                <tr class="border-t border-stone-100">
                    <td class="p-2 "><img src="upload/<?= $img ?>" alt="" class="p-2 max-w-[100px] max-h-[100px]"></td>
                    <td class="w-[250px] text-blue-500  "><a  class="hover:no-underline p-12 hover:text-purple-600  " href="index.php?act=chitiet_sp&id=<?=$id?>"><?= $name ?></a> </td>
                    <td class="p-2 w-[300px]"><?= $time ?></td>
                    <td class="p-2 max-w-[400px] overflow-hidden"><?= $content?> </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>