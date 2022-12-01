<?php

function insert_anhbia($hinh){
    $sql = "insert into anhbia(img) values('$hinh')";
    pdo_execute($sql);
}

function loadall_anhbia(){
    $sql ="select * from anhbia order by id asc";
    $listanhbia=pdo_query($sql);
    return $listanhbia;
}

function delete_anhbia($id){
    $sql = "delete from anhbia where id=".$id;
    pdo_execute($sql);
}

function loadone_anhbia($id){
    $sql ="select * from anhbia where id=".$id;
    $ab =pdo_query_one($sql);
    return $ab;
}

function update_anhbia($id,$hinh){
    $sql ="update anhbia set img ='".$hinh."' where id=".$id;
     pdo_execute($sql);
}

?>