<?php

require_once('./../models/admin.class.php');

$ahmad = new Admin(
    "4",
    "hamed",
    "1234",
    "ahmad@gmail.com",
    "Riyad",
    ""
);

var_dump($ahmad);
// echo $ahmad->getAdminInfo();

?>