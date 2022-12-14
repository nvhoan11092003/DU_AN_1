 <!-- slide -->
 <div class="slider">
     <?php
        $sliders = load_anhbia_status();
        ?>
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
             <?php
                foreach ($sliders as $key => $value) {
                    ?>
                   <li data-target="#myCarousel" data-slide-to="<?=$key?>" class="<?php if($key==0){echo 'active';}?>"></li>
                   <?php
                }
                ?>
             <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li> -->
         </ol>

         <!-- Wrapper for slides -->
         <div class="carousel-inner">
             <?php
                foreach ($sliders as $key => $value) {
                    extract($value);
                    ?>
                    <div  class="item <?php if($key==0){echo 'active';}?>">
                        <img src="view/image/<?=$img?>" style="position: relative; top: -80px;" alt="Los Angeles">
                    </div>
                    <?php
                    
                }
                ?>
             <!-- <div class="item active">
                 <img src="view/image/slider01.jpg" style="position: relative; top: -80px;" alt="Los Angeles">
             </div>

             <div class="item">
                 <img src="view/image/SLIDER2.jpg" style="position: relative; top: -80px;" alt="Chicago">
             </div>

             <div class="item">
                 <img src="view/image/slider3.jpg" style="position: relative; top: -80px;" alt="New York">
             </div>
             <div class="item">
                 <img src="view/image/slider4.jpg" style="position: relative; top: -80px;" alt="New York">
             </div> -->
         </div>

         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right"></span>
             <span class="sr-only">Next</span>
         </a>
     </div>
 </div>
 <img src="view/image/bang-gia-01-1024x165.png" alt="" class="list-price">
 <div class="grid wide">
     <div class="row">
         <div class="col l-6">
             <h1 class="title">Sun Homes BBQ</h1>
             <p class="text-content"><strong>Sun Homes BBQ</strong>(Qu??n th???t n?????ng H??n Qu???c) s??? ????a b???n ?????n
                 Seoul, n??i nh???ng con ph??? b??nh d???, nh???ng qu??n ??n d??n d?? ???? tr??? n??n quen thu???c v?? g???n b?? v???i ng?????i
                 d??n x??? H??n. N???u ???? m???t l???n th?????ng th???c th???t n?????ng t???i <strong>Sun Homes BBQ</strong>, b???n s???
                 kh??ng th??? qu??n ???????c h????ng v??? ???ng???t ng??y??? c???a nh???ng m??n s?????n non b?? M???, n???c vai b?? M???, d??? s?????n
                 t????i???. khi h??a quy???n v??o v???i c??c lo???i gia v??? ?????c tr??ng c???a x??? s??? Kimchi ???? tr??? n??n h???p d???n ?????n
                 th??? n??o. </p>
             <p class="text-content">B?? quy???t c???a <strong>Sun Homes BBQ</strong> n???m ??? n?????c s???t t???m ?????p th???t ???????c
                 ch??? bi???n t??? nguy??n li???u ho??n to??n t??? nhi??n, theo c??ng th???c b?? truy???n, do B???p Tr?????ng <strong>Park
                     Sung Min</strong> h??n 40 n??m kinh nghi???m nghi??n c???u v?? ch??? bi???n. <strong>Sun Homes
                     BBQ</strong> c?? 2 d???ng th???c ????n ????? Qu?? Kh??ch l???a ch???n l??: <strong>Ch???n Combo</strong> v??
                 <strong>G???i M??n</strong>.
             </p>
         </div>
         <div class="col l-6">
             <div class="space-between">
                 <div class="intro"><img class="intro-img" src="view/image/menu_trang_chu_xeo_xeo_gogi.png" alt="">
                     <a href="" class="order-link"><i class="order-icon fa-sharp fa-solid fa-star"></i><span>Ch???n
                             combo</span></a>
                 </div>
                 <div class="intro"><img class="intro-img" src="view/image/lau2-1.png" alt="">
                     <a href="" class="order-link" style="min-width: 150px;"><i class="order-icon fa-sharp fa-solid fa-heart"></i><span>g???i m??n n?????ng</span></a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="menu">
     <div class="grid wide">
         <div class="row">
             <div class="col l-6 menu-mt">
                 <div class="row">
                     <div class="col l-6">
                         <img src="view/image/1212.jpg" alt="" class="menu-img">
                         <img src="view/image/4534545345.jpg" alt="" class="menu-img">
                     </div>
                     <div class="col l-6">
                         <img src="view/image/fzn_0496_ll-900x598-300x199.jpg" alt="" class="menu-img">
                         <img src="view/image/fzn_0370_ll12-1.jpg" alt="" class="menu-img">
                     </div>
                 </div>
             </div>
             <div class="col l-6 menu-mt">
                 <h1 class="title menu-color">Menu</h1>
                 <p class="text-content">H??n 200 m??n ??n ???????c ch???t l???c t??? Tinh hoa ???m th???c H??n Qu???c v???i m???c gi??
                     ch??? t??? 69.000 c??ng nhi???u combo v?? set b??? h???p d???n ?????u c?? trong menu c???a King BBQ. Ngo??i ra
                     c??c b???n c??n ???????c th?????ng th???c nh???ng m??n ??n ?????c tr??ng v?? n???i ti???ng trong v??n ho?? ???m th???c c???a
                     H??n Qu???c do ch??nh tay ????u b???p ng?????i H??n Qu???c ch??? bi???n.</p>
                 <a href="" class="button-link button-link-menu">
                     <i class="icon-button fa-solid fa-bag-shopping"></i>Th???c ????n
                 </a>
             </div>
         </div>
     </div>
 </div>
 <div class="grid wide ">
     <div class="row">
         <div class="col l-6">
             <h1 class="title">Restaurant</h1>
             <p class="text-content">Khi n??i ?????n H??n Qu???c, ???m th???c l?? n??t v??n h??a ?????c tr??ng kh??ng th??? b??? qua v??
                 th???t n?????ng H??n Qu???c lu??n ???????c ???truy???n tai??? v??? ????? t????i ngon, ?????m ???? qua nh???ng trang c???m nang du
                 l???ch hay nh???ng b??? phim H??n g??y b??o</p>
             <p class="text-content">H??? th???ng <strong>Sun Homes BBQ</strong> hi???n c?? 17 nh?? h??ng trong ???? 7 nh??
                 h??ng chuy??n v??? Buffet t??? ch???n (Buffet) v?? 10 nh?? h??ng chuy??n v??? g???i m??n (Alacarte).
             </p>
             <p class="text-content">H??y l???a ch???n ?????a ??i???m g???n b???n nh???t v?? li??n h??? ?????t b??n ngay nh??!
             </p>
             <a href="" class="button-link button-link-menu button-link-white">
                 <i class="icon-button fa-solid fa-magnifying-glass"></i>Nh?? h??ng
             </a>
         </div>
         <div class="col l-6">
             <div class="space-between">
                 <div class="intro"><img class="intro-img" src="view/image/nha-hang-king-bbq-1-2-679x1024.jpg" alt="">

                 </div>
                 <div class="intro"><img class="intro-img" src="view/image/nha-hang-king-bbq-1-1-679x1024.jpg" alt="">

                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="register-care">
     <form action="" class="register-care-form ">
         <h2 class="register-care-title z-ind-2" style="margin-top: 0;">????ng k?? ????? nh???n ??u ????i h??ng th??ng t???i 30%
             t??? Sun Homes BBQ</h2>
         <div class="care-email z-ind-2">
             <input type="text" name="" class="care-input" placeholder="Nh???p ?????a ch??? email...">
             <input type="button" name="" value="????ng k?? ngay" class="care-btn">
         </div>
     </form>
 </div>
 <div class="grid wide ">
     <div class="row">
         <div class="col l-6">
             <div class="space-between">
                 <div class="korea"><img class="korea-img" src="view/image/213854-set-menu-han-quoc-hap-dan-danh-cho-2-nguoi-suon-nuong-han-quoc.jpg" alt="">
                 </div>
             </div>
         </div>
         <div class="col l-6">
             <h1 class="title">Korea Cousine</h1>
             <p class="text-content">Khi n??i ?????n H??n Qu???c, ???m th???c l?? n??t v??n h??a ?????c tr??ng kh??ng th??? b??? qua v??
                 th???t n?????ng H??n Qu???c lu??n ???????c ???truy???n tai??? v??? ????? t????i ngon, ?????m ???? qua nh???ng trang c???m nang du
                 l???ch hay nh???ng b??? phim H??n g??y b??o</p>
             <p class="text-content">S???t ch???m Ssamjang cay n???ng th?????ng ???????c d??ng ????? ??n k??m v???i c??c lo???i th???t
                 n?????ng. ???? l?? h???n h???p ???????c tr???n gi???a t????ng ?????u v?? t????ng ???t l??n men..m???i khi th???t ch??n ru???m, ng?????i
                 ta ph???t m???t ch??t s???t l??n b??? m???t mi???ng th???t, cu???n c??ng v???i kim chi, x?? l??ch xo??n, d??a chu???t. Cho
                 t???t c??? v??o mi???ng v?? nhai k??? b???n s??? c???m nh???n ???????c ngay h????ng v??? ?????c bi???t c???a lo???i t????ng n??y.</p>
         </div>
     </div>
     <div class="row m-t">
         <div class="col l-3">
             <a href="" class="korea-link">
                 <img src="view/image/cach-an-thit-nuong-2.jpg" alt="" class="korea-link-img">
             </a>
         </div>
         <div class="col l-3">
             <a href="" class="korea-link">
                 <img src="view/image/img20161208034438844.jpg" alt="" class="korea-link-img">
             </a>
         </div>
         <div class="col l-3">
             <a href="" class="korea-link">
                 <img src="view/image/1-11-2014-6-05-19-PM.jpg" alt="" class="korea-link-img">
             </a>
         </div>
         <div class="col l-3">
             <a href="" class="korea-link">
                 <img src="view/image/1-11-2014-6-05-19-PM.jpg" alt="" class="korea-link-img">
             </a>
         </div>
     </div>
 </div>
 <div class="set-table mt-20">
     <div class="grid wide z-ind-2">
         <div class="row ">
             <div class="col l-6  z-ind-2">
                 <h1 class="title white" style="padding-top: 10px;">Set Table</h1>
                 <p class="text-content f-w white">Qu?? kh??ch vui l??ng ?????t b??n tr?????c ????? c?? tr???i nghi???m th?????ng th???c
                     ???m th???c t???t nh???t t???i Sun Homes BBQ.</p>
                 <p class="text-content f-w white">G???i ?? ?????t b??n:</p>
                 <ul class="suggest white">
                     <li class="suggest-item white"><i class="set-table-icon fa-solid fa-chevron-right"></i>??i 1
                         ng?????i: ?????t b??n ????n</li>
                     <li class="suggest-item white"><i class="set-table-icon fa-solid fa-chevron-right"></i>??i 2
                         ng?????i: ?????t b??n ????i</li>
                     <li class="suggest-item white"><i class="set-table-icon fa-solid fa-chevron-right"></i>??i
                         nh??m 4-6 ng?????i: ?????t b??n 6 ng?????i</li>
                     <li class="suggest-item white"><i class="set-table-icon fa-solid fa-chevron-right"></i>??i
                         nh??m 6-12 ng?????i: ?????t b??n d??i</li>
                     <li class="suggest-item white"><i class="set-table-icon fa-solid fa-chevron-right"></i>??i
                         nh??m >12 ng?????i: g???i tr???c ti???p Hotline: 0909.009.009</li>
                 </ul>
             </div>
             <div class="col l-6  z-ind-2">
                 <form action="">
                     <input type="text" class="set-order-text" placeholder="T??n c???a b???n...">
                     <input type="text" class="set-order-text" placeholder="S??? ??i???n tho???i...">
                     <input type="number" class="set-order-text" placeholder="S??? ng?????i ??n...">
                     <input type="date" class="set-order-text" placeholder="">

                     <div class="list-check-box">
                         <span class="checkbox-item">
                             <input type="checkbox" id="08:30" value="08:30">
                             <label class="check-time" for="08:30">08:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="09:00" value="09:00">
                             <label class="check-time" for="09:00">09:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="09:30" value="09:30">
                             <label class="check-time" for="09:30">09:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="10:00" value="10:00">
                             <label class="check-time" for="10:00">10:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="10:30" value="10:30">
                             <label class="check-time" for="10:30">10:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="11:00" value="11:00">
                             <label class="check-time" for="11:00">11:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="11:30" value="11:30">
                             <label class="check-time" for="11:30">11:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="12:00" value="12:00">
                             <label class="check-time" for="12:00">12:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="12:30" value="12:30">
                             <label class="check-time" for="12:30">12:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="13:00" value="13:00">
                             <label class="check-time" for="13:00">13:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="13:30" value="13:30">
                             <label class="check-time" for="13:30">13:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="14:00" value="14:00">
                             <label class="check-time" for="14:00">14:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="14:30" value="14:30">
                             <label class="check-time" for="14:30">14:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="15:00" value="15:00">
                             <label class="check-time" for="15:00">15:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="15:30" value="15:30">
                             <label class="check-time" for="15:30">15:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="16:00" value="16:00">
                             <label class="check-time" for="16:00">16:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="16:30" value="16:30">
                             <label class="check-time" for="16:30">16:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="17:00" value="17:00">
                             <label class="check-time" for="17:00">17:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="17:30" value="17:30">
                             <label class="check-time" for="17:30">17:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="18:00" value="18:00">
                             <label class="check-time" for="18:00">18:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="18:30" value="18:30">
                             <label class="check-time" for="18:30">18:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="19:00" value="19:00">
                             <label class="check-time" for="19:00">19:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="19:30" value="19:30">
                             <label class="check-time" for="19:30">19:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="20:00" value="20:00">
                             <label class="check-time" for="20:00">20:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="20:30" value="20:30">
                             <label class="check-time" for="20:30">20:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="21:00" value="21:00">
                             <label class="check-time" for="21:00">21:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="21:30" value="21:30">
                             <label class="check-time" for="21:30">21:30</label>
                         </span>

                     </div>
                     <input type="submit" name="" value="?????t b??n" class="care-btn">
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- brand -->
 <div class="grid wide">
     <div class="slider">

     </div>
 </div>