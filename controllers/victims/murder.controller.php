<?php

    /**============================================
     *               Get Article by Id
    *=============================================**/
    require_once('database/OOPmethod/murder.CRUD.php');
    // $articleID = $_GET['id'];
    
    $whereCondition = " WHERE victims_murder.victim_id = ". $_GET['id'];
    $article = MurderCRUD::readAll($whereCondition);

    /**============================================
    *                Country name
    *=============================================**/
    require_once('controllers/countrySelector.php');
    $countryOfOrigin = $article[0]->country_origin;
    $countryOfCrime = $article[0]->country_crime;
    
    /**============================================
     *               If id is not found
    *=============================================**/
    if ($article)
    {
        return true;
    }
    else
    {
        return false;
    }

?>