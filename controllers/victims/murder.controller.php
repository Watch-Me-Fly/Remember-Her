<?php

    /**============================================
     *               Get Article by Id
    *=============================================**/
    require_once('database/OOPmethod/murder.CRUD.php');
    // $articleID = $_GET['id'];

    $whereCondition = " WHERE victims_murder.victim_id = 1";
    $article = MurderCRUD::readAll($whereCondition, null);

    /**============================================
    *                Country name
    *=============================================**/
    require_once('controllers/countrySelector.php');
    $countryOfOrigin = $article[0]->country_origin;
    $countryOfCrime = $article[0]->country_crime;
?>