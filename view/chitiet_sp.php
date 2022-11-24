<?php
extract($sp_chitiet);
$img = $img_path . $img;
?>
<div class="detail-product">
    <div class="grid wide">
        <form action="index.php?act=addtocart" class="row" method="POST" enctype="multipart/form-data">
            <div class="col l-6">
                <div class="detai-imgs">
                    <img src="<?=$img?>" alt="" class="detail-img">
                </div>
            </div>
            <div class="col l-6">
                <h1 class="detail-name">
                    <?=$name?>
                </h1>
                <h2 class="detail-price"><?=$price?></h2>
                <p class="detail-desc"><?=$mota?></p>
                <input type="text" name="name" value="<?=$name?>" hidden>
                <input type="text" name="id" value="<?=$id?>" hidden>
                <input type="text" name="img" value="<?=$img?>" hidden>
                <input type="text" name="price" value="<?=$price?>" hidden>
                <input type="number" name="amount" min="1" class="detail-count" value="1">
                <input type="submit" name="addtocart" class="detail-add-cart" value="Thêm vào giỏ hàng">
                <!-- <input type="text" class="detail-buy" value="Đặt ngay"> -->
            </div>
        </form>
        <h4 class="product-other-title">Các sản phẩm cùng loại</h2>
            <div class="row">
                <?php
                $sp_cungloai = load_sanpham_cungloai($id,$iddm);
                foreach ($sp_cungloai as $sp) {
                    extract($sp);

                    echo'
                    <div class="col l-3">
                    <a href="" style="text-decoration: none;">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="product-other">
                                <img src=upload/'.$img.' alt="" class="other-img">
                            </div>
                            <h5 class="other-name">'.$name.'</h5>
                            <h6 class="other-price">'.$price.'đ</h6>
                            <input type="text" name="'.$id.'" hidden value="">
                            <input type="text" name="'.$name.'" hidden value="">
                            <input type="text" name="'.$price.'" hidden value="">
                            <input type="text" name="'.$img.'" hidden value="">
                            <input type="text" name="'.$mota.'" hidden value="">
                            <input type="submit" value="Đặt ngay" class="submit-order">
                        </form>
                    </a>
                </div>
                    ';

                }
                ?>
            </div>





            <!-- <h4 class="product-other-title">Có thể bạn thích</h2> -->
                <!-- <div class="row">
                    <div class="col l-3">
                        <a href="">
                            <form action="">
                                <div class="product-other">
                                    <img src="view/image/4534545345.jpg" alt="" class="other-img">
                                </div>
                                <h5 class="other-name">Nước lẩu Tomyum ( 2 Lít)-D</h5>
                                <h6 class="other-price">166,000 đ</h6>
                                <input type="text" name="" hidden value="">
                                <input type="text" name="" hidden value="">
                                <input type="text" name="" hidden value="">
                                <input type="text" name="" hidden value="">
                                <input type="text" name="" hidden value="">
                                <input type="submit" value="Đặt ngay" class="submit-order">
                            </form>
                        </a>
                    </div>
                </div> -->
    </div>
</div>