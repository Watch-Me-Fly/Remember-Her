<?php

    /**============================================
     *               Get Articles
    *=============================================**/
    require_once('database/OOPmethod/murder.CRUD.php');

    // return all articles (enabled or not)
    $database = MurderCRUD::readAll(NULL);

    // var_dump($article);

?>