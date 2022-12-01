<?php


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
    <div class="border border-black p-10 w-[350px]">
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

    <h3 class="p-1 my-10 border-l-4 border-red-500 text-3xl text-black ">Đơn Hàng</h3>
</div>