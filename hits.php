<?php
include('include/include.php');
//Начало работы с таблицой hits
$ip = $_SERVER['REMOTE_ADDR'];
$result_h=mysqli_query($connection, "SELECT * FROM `hits`");

//$ff_h=mysqli_num_rows($result_h);
$result_ip=mysqli_query($connection, "SELECT * FROM `hits` WHERE ip='$ip'");
while(($cod_h=mysqli_fetch_assoc($result_h))){
    $hits_date=strtotime($cod_h[datevisitor]);
    $datetime=time();
    $datetime_h=$datetime-$hits_date;
    if ($cod_row=mysqli_num_rows($result_ip)==0) {
        $cod_h=mysqli_query($connection, "INSERT INTO `hits`( `ip`) VALUES ('$ip')");
        var_dump($cod_h);
        echo "sfsgggg";
    }elseif ($datetime_h>86400)
        echo "fafafaf";
        $del_h = mysqli_query($connection, "DELETE FROM `hits` WHERE ip='$ip'");
}
$count_h=mysqli_query($connection, "SELECT * FROM `hits` WHERE 1");
$cod_h=mysqli_num_rows($count_h);
$name_h =('Вы '.$cod_h.' посетитель ');
echo $name_h;
////Проверка наличия IP в БД
//if(mysqli_num_rows($result_h)==0){
//    //Если IP нет в БД, то записать в БД
//    $cod_h=mysqli_query($connection, "INSERT INTO `hits`( `ip`) VALUES ('$ip')");
//}
//
//$hits_date=strtotime($cod_h[datevisitor]);
//$datetime=time();
//$datetime=time()-$hits_date;
//var_dump($datetime);
////Выборка всей базы для удаления старых посетителей
//$all_h=mysqli_query($connection, "SELECT * FROM `hits`");
//while (($all_cod=mysqli_fetch_assoc($all_h))) {
//
//}
