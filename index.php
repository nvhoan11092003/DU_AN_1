<?php
ob_start();
// khởi tạo SESSION
session_start();
var_dump($_SESSION['user']);
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/lienhe.php";
// header
include "view/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'trang_chu':
            include "view/home.php";
            break;
        case 'dat_ban':
            include "view/dat_ban.php";
            break;
        case 'gioi_thieu':
            include "view/gioi_thieu.php";
            break;
        case 'thuc_don':
            $listdanhmuc = loadall_danhmuc();
            include "view/thuc_don.php";
            break;
        case 'dangnhap':
            include "view/taikhoan/dangnhap.php";
            break;
        case 'dangky':
            include "view/taikhoan/dangky.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'value':
            # code...
            break;
        case 'value':
            # code...
            break;
        default:
            # code...
            break;
    }
}else{
    include "view/home.php";
}
// footer
include "view/footer.php";
ob_flush();
