<?php 
    $list_user = loadall_user();


?>

<style>
    #table{
        width: 100%;
    }
    tr {
        
        
    }
     td {
        text-align: center;
        height: 40px;
        font-size: 12px;
    }

    th{
        font-size: 16px;
        
    }
    #xoa{
        text-decoration: none;
        border: 1px;
        padding: 4px;
        background: red;
        color: white;
        padding: 8px 40px;
        margin: 5px;
        border-radius: 10px;
    }
    #xoa:hover {
        color: blue; 
        background:  red;
    }

</style>

<table id="table" border="1">
    <thead >
        <tr>
            <th>STT</th>
            <th>Email</th>
            <th>Mật Khẩu</th>
            <th>Tên</th>
            <th>Số Điện thoại</th>
            <th>Thao Tác</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_user as $key => $value) : extract($value) ?>
        <tr >
            <td><?=$key+1?></td>
            <td><?=$email?></td>
            <td>******</td>
            <td><?=$name?></td>
            <td><?=$tel?></td>
            <td>
                <a href="taikhoan/xoa.php?id=<?=$id?>" id="xoa">Xóa</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>