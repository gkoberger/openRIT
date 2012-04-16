<?php

if($_POST) {
    $message = "";

    foreach ($_POST as $k=>$p) {
        $message .= "\r\n" . $k . ": " . $p;
    }

    mail("gkoberger@gmail.com", "New Submission!",
        $message, "From:" . "gkoberger@gmail.com");

    $date = strtotime($_REQUEST['date'] . " UTC") + ($_REQUEST['offset'] * 60);

    $file = date("m.d.y_h:i_a", $date);

    $myFile = "saved/" . $_POST['email'] . "--" . $file . ".txt";
    $fh = fopen($myFile, 'a+') or die("can't open file");
    fwrite($fh, $message);
    fclose($fh);
}
