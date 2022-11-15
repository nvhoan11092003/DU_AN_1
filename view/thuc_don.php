
<div class="banner"><img src="view/image/banner-234.jpg" alt="" class="banner-img"></div>
<h1 class="menu-title">THỰC ĐƠN TẠI HÀ NỘI</h1>
<div class="list-menu-link">
    <a href="#" class="menu-link active">Chọn món nướng</a>
    <div class="center"></div>
    <a href="#" class="menu-link">Combo xèo xèo</a>
</div>
<div class="grid wide">
    <div class="row border">
        <div class="col l-12">
            <div class="list-menu">
                <em>* Áp dụng cho tất cả các ngày trong tuần</em>
                <div class="row">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);    
                        echo'
                            <div class="col l-4 ">
                            <div class="category-img">
                                <img src="view/image/'.$img.'" alt="">   
                            </div>
                            <h3 class="category-title">'.$name.'</h3>
                            <ul class="category-products">

                            ';
                            $listsanpham = loadall_sanpham_cungloai($id);
                            foreach ($listsanpham as $key => $value){
                            extract($value);

                        echo'<li class="category-item"><i class=" check-icon fa-sharp fa-solid fa-check"></i><a href="" class="category-item-link"></a>'.$name.'</li>';
                        }

                        echo '
                        
                            
                            
                        </ul>
                    </div>

                        ';
                    }
                    
                    
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var active = document.getElementsByClassName("menu-link");
   active[0].onclick=function(){
    active[0].classList.add('active');
    active[1].classList.remove('active');
   }
   active[1].onclick=function(){
    active[1].classList.add('active');
    active[0].classList.remove('active');
   }
</script>