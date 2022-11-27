<?php
function viewcart($del)
{
    $i = 0;
    $tong = 0;
    if ($del == 1) {
        $xoasp_th = '<th class="text-center">action</th>';
        $xoasp_td = '<td class="cart-td"></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td = '';
    }
    // echo "<pre>";

    // var_dump($_SESSION);die;

    echo '
    <table class="table table-bordered text-center">
    <thead>
    <tr>
    <th class="text-center">Sản phẩm</th>
    <th class="text-center">Giá</th>
    <th class="text-center">Số lượng</th>
    <th class="text-center">Tổng</th>
    ' . $xoasp_th . '
    </tr>
    </thead>
';
    echo '<tbody>';
    
    foreach ($_SESSION['mycart'] as $cart) {
        $id = $cart[0];
        $name = $cart[1];
        $price = $cart[3];
        $img = $cart[2];
        $amount = $cart[4];
        $totalPrice = $price * $amount;
        if ($del = 1) {
            $xoasp_td = '<td class="cart-td"><a href="index.php?act=delcart&idcart=' . $i . '"><i class="cart-icon fa-solid fa-trash-can"></i></a></td>';
        } else {
            $xoasp_td = '';
        }

        echo '
    <tr>
    <td class="cart-td"><div class="cart-product">
    <img class="cart-img" src="'.$img.'" alt="">
    <input type="text" name="img" hidden value="'.$img.'">
    <input type="text" name="id" hidden value="'.$id.'">
    <input type="text" name="name" hidden value="'.$name.'">
    <input type="text" name="price" hidden value="'.$price.'">
    <span class="sp-td">'.$name.'</span>
    </div></td>
    <td class="cart-td"><span class="sp-td">'.$price.'</span></td>
    <td class="cart-td"><input class="count" name="amount['.$id.']"  type="number" min="1" value = "'.$amount.'"></td>
    <td class="cart-td" ><span class="sp-td" >'.$totalPrice.'</span></td>
    ' . $xoasp_td . '
    
</tr>
';
        $i += 1;
    }
    
    echo '</tbody>
</table>';

    if($del==1){
        echo '<div class="update-cart">

        <input class="update-input" type="submit" name = "update_cart" value="Cập nhật giỏ hàng">
    </div>';
    }

    echo '
<div class="cart-totals">
<h3 class="total-title">Tổng tiền: <span>1788800 vnđ</span></h3>
<a class="total-link" href="index.php?act=bill">Đặt hàng</a>
</div>
';
}
