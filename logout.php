

<?php 
    ob_start();
    require_once('nav.php');  

    $cuisine->log_out();
    $cuisine->header('index');
    ob_end_flush();
?>