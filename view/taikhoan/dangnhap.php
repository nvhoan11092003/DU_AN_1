<div class="flex justify-center h-full " style="background-image:url('view/image/banner-234.jpg') ; ">
    
    <form class="w-[500px] opacity-90 my-10 bg-stone-700 flex flex-col justify-center items-center " action="index.php?act=dangnhap" method="post">
        <h1 class="p-4 w-full text-4xl text-center text-yellow-400 ">Đăng Nhập</h1>
        <input class="w-[350px] text-3xl p-4 text-black my-5 rounded-md" type="text" placeholder="Email" name="email">
        <input class="w-[350px] text-3xl p-4 text-black my-5 rounded-md " type="text" placeholder="Mật Khẩu" name="password">
        <div class="w-[350px] my-3 flex items-center justify-between">
            <label class="hover:text-white" for="remember">
                <input type="checkbox" id="remember">
                Ghi Nhớ Mật Khẩu
            </label>
            <a class="hover:text-white" href="">Quên Mật Khẩu</a>
        </div>
        <a class="w-[350px] mb-5 flex-none flex justify-end hover:text-white" href="">Tạo Tài Khoản</a>
        <input class="text-3xl p-3 mb-[40px] text-white bg-stone-500 rounded-md delay-200 hover:bg-slate-400" type="submit" name="submit" value="Đăng Nhập">
    </form>
</div>