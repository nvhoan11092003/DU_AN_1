<?php
ob_start();
include "model/pdo.php";


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
            include "view/thuc_don.php";
            break;
        case 'dangnhap':
            include "view/taikhoan/dangnhap.php";
            break;
        case 'value':
            # code...
            break;
        case 'value':
            # code...
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
