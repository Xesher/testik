<?php
include('include/include.php');
//Начало работы с visitors
$ip = $_SERVER['REMOTE_ADDR'];//получение IP
$result=mysqli_query($connection, "SELECT * FROM `visitors` WHERE ip='$ip'");
$ff=mysqli_num_rows($result);
$cod=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)==0){
        $cod=mysqli_query($connection, "INSERT INTO `visitors`( `ip`) VALUES ('$ip')");
    }else {
        echo('<p style="text-align: center">Этот IP-адрес уже использовался</p>');
    } ?>
<br>
<?php
$count=mysqli_query($connection, "SELECT * FROM `visitors` WHERE 1");
$cod=mysqli_num_rows($count);
$name =('Вы '.$cod.' посетитель ');

?>

