<?php

if($_POST) {
    $message = "";

    foreach ($_POST as $k=>$p) {
        $message .= "\r\n" . $k . ": " . $p;
    }

    mail("gkoberger@gmail.com", "New Submission!",
        $message, "From:" . "gkoberger@gmail.com");
}
