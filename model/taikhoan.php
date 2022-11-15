<?php 
// suất tất cả user
function loadall_user(){
    $sql = "SELECT * FROM users";  
    $listuser = pdo_query($sql);
    return $listuser;
}

function insert_user($email,$name,$new_password,$tel)
{
    $sql = "INSERT INTO users ( email, name, password, tel) VALUES ('$email','$name','$new_password','$tel')" ;
    $id_user = pdo_execute_return_LastInsertID($sql);
    return $id_user;
}

function loadone_user($id)
{
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $user = pdo_query_one($sql);
    return $user;
}


?>