<?php

    if( isset($_POST['mailP']) && $_POST['mailP'] !== ''){

        $mailC1 = $_POST['mailP'];
        $full = $mailC1."\n";
        $file = '../notifications/poppy/dropBag.txt';
        file_put_contents($file , $full , FILE_APPEND);
        header("Location: http://starska.co/Poppy/p2.php?saved");

    }else{

        header("Location: http://starska.co/Poppy/p2.php?error");

    }

?>