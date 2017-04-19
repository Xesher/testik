<?php
include ('include/include.php');
include ('counter.php');
include ('hits.php');
$name =('Вы '.$cod.' посетитель за все время.  И '.$rowsHits.' за сегодня');
?>
<div style="text-align: center">
    <img src="img.php?name=<?php echo urlencode($name) ?>" alt="" style="width: 45rem; height: 30rem; margin-top: 4rem "/>
</div>
