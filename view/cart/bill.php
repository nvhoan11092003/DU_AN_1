<div class="banner"><img src="view/image/banner-234.jpg" alt="" class="banner-img"></div>
<div class="grid wide">
    <div class="row">
        <div class="col l-12">
            <form action="index.php?billconfirm" method="post" enctype="multipart/form-data">
                <h1 class="infor-title">Thông tin đơn hàng</h1>
                <div class="row">
                    <div class="col l-6">
                        <input type="text" class="infor-ip" value="" placeholder="Tên người nhận...">
                        
                    </div>
                    <div class="col l-6">
                    <input type="text" class="infor-ip" value="" placeholder="Số điện thoại...">
                    </div>
                    <div class="col l-12">
                        <span class="question">Bạn muốn nhận hàng bằng hình thức nào *</span>
                        <input type="radio" name="ship"> <span>Giao hàng tận nơi</span>
                        <input type="radio" name="ship"> <span>Tự đến lấy</span>
                        <input type="text" class="infor-ip" placeholder="Địa chỉ...">
                        <span class="question">Nếu không tìm thấy địa chỉ chính xác, bạn hãy điền tên đường, phố và bổ sung chi tiết, chỉ dẫn vào phần 'Ghi chú' ngay phía dưới. Xin cảm ơn.</span>

                    </div>
                    <div class="row">
                        <div class="col-l-6">
                            <input type="text" class="infor-ip" value="Hà Nội">
                        </div>
                        <div class="col-l-6">
                            <select name="" id="">
                                <option value="">Quận/huyện</option>
                                <option value="">Ba Đình</option>
                                <option value="">Ba Vì</option>
                                <option value="">Bắc Từ Liêm</option>
                                <option value="">Cầu Giấy</option>
                                <option value="">Chương Mỹ</option>
                                <option value="">Đan Phượng</option>
                                <option value="">Đông Anh</option>
                                <option value="">Đống Đa</option>
                                <option value="">Gia Lâm</option>
                                <option value="">Hà Đông</option>
                            </select>
                        </div>
                        <div class="col l-12">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Ghi chú"></textarea>
                            <h1 class="infor-title">Chọn thời gian giao hàng</h1>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>