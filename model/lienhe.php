<?php 
require_once "pdo.php";
function insert_contact($name,$email,$tel,$purpose,$description,$id)
{
    $sql ="INSERT INTO contact(name, email, tel, purpose, description, id_user) VALUES ('$name','$email','$tel','$purpose','$description','$id') ";
    pdo_execute($sql);
}


?>