<?php
include('include/include.php');
$ip = $_SERVER['REMOTE_ADDR'];
$result=mysqli_query($connection, "SELECT * FROM `counter` WHERE ip='$ip'");
$ff=mysqli_num_rows($result);
$cod=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)==0){
        $cod=mysqli_query($connection, "INSERT INTO `counter`( `ip`) VALUES ('$ip')");
    }else {
        echo('<p style="text-align: center">Этот IP-адрес уже использовался</p>');
    } ?>
<br>
<?php
$count=mysqli_query($connection, "SELECT * FROM `counter` WHERE 1");
$cod=mysqli_num_rows($count);
$name =('Вы '.$cod.' посетитель '); ?>