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
                    <div class="col l-4 ">
                        <div class="category-img">
                            <img src="view/image/blackbean-noodles.png" alt="">
                        </div>
                        <h3 class="category-title">Các loại Mỳ</h3>
                        <ul class="category-products">
                            <li class="category-item"><i class=" check-icon fa-sharp fa-solid fa-check"></i><a href="" class="category-item-link">Mỳ trộn lạnh</a></li>
                            <li class="category-item"><i class=" check-icon fa-sharp fa-solid fa-check"></i><a href="" class="category-item-link">Mỳ lạnh nước</a></li>
                            <li class="category-item"><i class=" check-icon fa-sharp fa-solid fa-check"></i><a href="" class="category-item-link">Gà xào phô mai</a></li>
                            <li class="category-item"><i class=" check-icon fa-sharp fa-solid fa-check"></i><a href="" class="category-item-link">Mỳ đen</a></li>
                            <li class="category-item"><i class=" check-icon fa-sharp fa-solid fa-check"></i><a href="" class="category-item-link">Mỳ bò Hàn Quốc</a></li>
                            <li class="category-item"><i class=" check-icon fa-sharp fa-solid fa-check"></i><a href="" class="category-item-link">Miến xào Hàn Quốc</a></li>
                        </ul>
                    </div>

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