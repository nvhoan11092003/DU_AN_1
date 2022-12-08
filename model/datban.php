<?php
function insert_datban($name, $tel,$table_name,$book_date,$session, $number_table, $date, $time){
    $sql = "insert into booking(name,tel,id_table,book_date,date,time,session,quantity) values ('$name','$tel','$table_name','$book_date','$date','$time','$session','$number_table')";
    pdo_execute($sql);
}

function load_all_booking(){
    $sql = "select * from booking";
    $booking = pdo_query($sql);
    return $booking;
}

function load_all_tables(){
    $sql = "select * from tables";
    $tables = pdo_query($sql);
    return $tables;
}
?>