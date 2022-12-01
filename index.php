<?php
ob_start();
// khởi tạo SESSION
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/datban.php";
include "model/cart.php";
include "global.php";

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

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
            $errors = "";
            $success = "";
            if (isset($_POST['datban']) && $_POST['datban']) {
                $name = $_POST['name'];
                $tel = $_POST['tel'];
                $number_people = $_POST['number_people'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                if (empty($name) || empty($tel) || empty($date) || empty($time)) {
                    $errors = "Dữ liệu không được để trống";
                } else {
                    $errors = "";
                    $success = "Đặt bàn thành công";
                    insert_datban($name, $tel, $number_people, $date, $time);
                }
            }
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

        case 'chitiet_sp':
            $id = $_GET['id'];
            $sp_chitiet = loadone_sanpham($id);
            sanpham_view($id);
            include "view/chitiet_sp.php";
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'value':
            # code...
            break;
        case 'value':
            # code...

        case 'lienhe':
            include "view/lienhe.php";

            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $amount = $_POST['amount'];
                $totalPrice = $price * $amount;




                $addCart = [$id, $name, $img, $price, $amount, $totalPrice];
                array_push($_SESSION['mycart'], $addCart);
            }
            include "view/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location: index.php?act=viewcart');
            break;
        case 'update_cart':

            $amount = $_POST['amount'];




            foreach ($_SESSION['mycart'] as $id => $value) {
                $value['4'] = $amount[$value['0']];

                $_SESSION['mycart'][$id]['4'] = $value['4'];
            }

            include "view/cart/viewcart.php";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billconfirm':

            if (isset($_POST['dongydathang']) && $_POST['dongydathang']) {
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $iduser = 0;
                }
                $name = $_POST['name1'];
                $tel = $_POST['tel1'];
                $email = $_POST['email1'];
                $ship = $_POST['ship'];
                $city = $_POST['city'];
                $township = $_POST['township'];
                $note = $_POST['note'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                $total = tongdonhang();
                
                $idbill = insert_bill($name, $tel, $email, $ship, $city, $township, $note, $date, $time, $total, $iduser);
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }
                $_SESSION['cart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "view/cart/billconfirm.php";
            break;
        default:
            # code...
            break;
    }
} else {
    include "view/home.php";
}
// footer
include "view/footer.php";
ob_flush();
