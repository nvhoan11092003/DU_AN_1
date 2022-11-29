<?php 
require_once "pdo.php";
function insert_contact($name,$email,$tel,$purpose,$description,$id)
{
    $sql ="INSERT INTO contact(name, email, tel, purpose, description, id_user) VALUES ('$name','$email','$tel','$purpose','$description','$id') ";
    pdo_execute($sql);
}

function loadall_contact()
{
    $sql = "SELECT * FROM contact";
    $listcontact= pdo_query($sql);
    return $listcontact;
}

function delete_contact($id)
{
   $sql = "DELETE FROM contact WHERE id = '$id'";
   pdo_execute($sql);
    
}

?>