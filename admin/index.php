<?php
    include "../model/pdo.php";
    include "header.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/thongke.php";
    include "../model/taikhoan.php";
    include "../model/lienhe.php";
    if(isset($_GET['act'])){ 
        $act=$_GET['act'];
        switch($act) {
            case'adddm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){ 
                    $tenloai =$_POST ['tenloai'];
                    $hinh =$_FILES ['hinh']['name'];
                    $target_dir ="../upload/";
                    $target_file = $target_dir. basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    insert_danhmuc($tenloai,$hinh);
                    $thongbao="Thêm thành công !";
                }
                include "danhmuc/add.php";
                break;
            case'lisdm':
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case'xoadm':
                if(($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;    
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    $hinh =$_FILES['hinh']['name'];
                    $target_dir="../upload/";
                    $target_file= $target_dir.basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    update_danhmuc($id,$tenloai,$hinh);
                    $thongbao = "Cập nhật thành công !";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            // controller san pham

            case'addsp':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm =$_POST ['iddm'];
                    $tensp =$_POST ['tensp'];
                    $giasp =$_POST ['giasp'];
                    $mota =$_POST ['mota'];
                    $hinh =$_FILES ['hinh']['name'];
                    $target_dir ="../upload/";
                    $target_file = $target_dir. basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    

                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao="Thêm thành công !";
                }
                $listdanhmuc=loadall_danhmuc();
                
                include "sanpham/add.php";
                break;
            case'listsp':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm= $_POST['iddm'];

                }else{
                    $kyw = '';
                    $iddm= 0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;
            case'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham=loadall_sanpham();
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;    
            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST ['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir="../upload/";
                    $target_file= $target_dir.basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($tensp,$giasp,$mota,$hinh,$id,$iddm);
                    $thongbao = "Cập nhật thành công !";
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham();
                include "sanpham/list.php";
                break;

            case'thongke':
                $listthongke=loadall_thongke();
                include "thongke/list.php";
                break;  
                    
            case'bieudo':
                $listthongke=loadall_thongke();
                include "thongke/bieudo.php";
                break;    
            case'dskh':
                include "taikhoan/list.php";
                break;
            case'lienhe':
                include "lienhe/list.php";
                break;
            case'':
                include "";
                break;
            case'':
                include "";
                break; 
            case'':
                include "";
                break;
             case'':
                include "";
                break;                  
            default:
                include "home.php";
                break;  
        }
    }else{
        include "home.php";
    }



    include "footer.php";
?>