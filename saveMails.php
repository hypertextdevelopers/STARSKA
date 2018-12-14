<?php

    if( isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && $_POST['firstname'] !== '' && $_POST['lastname'] !== '' && $_POST['email'] !== '' ){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];

        $file = 'mails.txt';

        $all = $firstname.' '.$lastname.' '.$email."\n";

        file_put_contents($file , $all , FILE_APPEND);

        header("Location: http://starska.co/newsletter.php?subscriptionComplete");

    }else{

        header("Location: http://starska.co/newsletter.php?fieldError");

    }

?>