<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan)
{
    $sql = "insert into comment(commentContent, customerId, productId, commentDate) values('$noidung','$iduser', '$idpro', '$ngaybinhluan')";
    pdo_execute($sql);
}

function loadall_binhluan($idpro)
{
    $sql = "select * from comment where 1";
    if($idpro>0){
        $sql.=" AND productId='".$idpro."'";
    }else{
        $sql.=" order by id desc";
        
    }
     
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}

function delete_binhluan($id){
    $sql = "delete from comment where id =" .$_GET['id'];
    pdo_execute($sql);
}

function select_comment_by_product($id){
    $sql = "SELECT b.*, h.ten_hh FROM binhluan b JOIN hang_hoa h ON h.ma_hanghoa-b.ma_hanghoa WHERE b.ma_hanghoa=$id ORDER BY ngay_bl DESC";
    return pdo_query($sql);
}
