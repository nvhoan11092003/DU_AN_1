<?php

$id_user = $_SESSION['user']['id'];
$list_comment = select_comment_by_user($id_user,0,20);



?>

<h1 class="text-4xl text-black ">BÌNH LUẬN CỦA TÔI</h1>
<div class="border-b-4 border-red-500 w-[60px] mb-10"></div>

<table>
        <?php if ($list_comment !== []) {
            echo "
        <thead>
            <tr>
                <th></th>
                <th>Tên Sản Phẩm</th>
                <th>Thời Gian</th>
                <th>Nội Dung</th>
            </tr>
        </thead>";
        }else echo "chưa có bình luận nào";
        ?>
        <tbody>
            <?php foreach ($list_comment as $key => $value) : extract($value) ?>
                <tr class="border-t border-stone-100">
                    <td class="p-2 "><img src="upload/<?= $img ?>" alt="" class="p-2 max-w-[100px] max-h-[100px]"></td>
                    <td class="w-[250px] text-blue-500  "><a  class="hover:no-underline p-12 hover:text-purple-600  " href="index.php?act=chitiet_sp&id=<?=$id?>"><?= $name ?></a> </td>
                    <td class="p-2 w-[300px]"><?= $time ?></td>
                    <td class="p-2 max-w-[400px] overflow-hidden"><?= $content?> </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>