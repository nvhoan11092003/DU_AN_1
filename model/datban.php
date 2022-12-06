<?php
function insert_datban($name,$tel,$number_people,$date,$time){
    $sql = "insert into booking(name,tel,number_people,date,time) values ('$name','$tel','$number_people','$date','$time')";
    pdo_execute($sql);
}

function load_all_booking(){
    $sql = "select * from booking";
    $booking = pdo_query($sql);
    return $booking;
}
?>