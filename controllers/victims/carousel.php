<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/murder.CRUD.php');

    $cards = MurderCRUD::readLastFour();

?>