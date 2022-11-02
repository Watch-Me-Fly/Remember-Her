<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/murder.CRUD.php');
    require_once('controllers/victims/fieldsPrefill.php');

    // sql request conditioned or not on sort / filter
    if (isset($_POST['sortBtn']))
    {
        if ($_POST['sort'] === "nameAZ")
        {
            $whereCondition = "WHERE `is_enabled` = 1
            ORDER BY `first_name` ASC";
        }
        elseif ($_POST['sort'] === "nameZA")
        {
            $whereCondition = "WHERE `is_enabled` = 1
            ORDER BY `first_name` DESC";
        }
        elseif ($_POST['sort'] === "dateDesc")
        {
            $whereCondition = "WHERE `is_enabled` = 1
            ORDER BY `date_of_death` DESC";
        }
        elseif ($_POST['sort'] === "dateAsc")
        {
            $whereCondition = "WHERE `is_enabled` = 1
            ORDER BY `date_of_death` ASC";
        }
        elseif ($_POST['sort'] === "ageDesc")
        {
            $whereCondition = "WHERE `is_enabled` = 1
            ORDER BY `age` DESC";
        }
        elseif ($_POST['sort'] === "ageAsc")
        {
            $whereCondition = "WHERE `is_enabled` = 1
            ORDER BY `age` ASC";
        }
        else
        {
            $whereCondition = "WHERE `is_enabled` = 1
            ORDER BY `post_creation_date` DESC";
        }
    }
    // default view
    else
    {
        $whereCondition = "WHERE `is_enabled` = 1
                            ORDER BY `post_creation_date` DESC";
    }
    $cards = MurderCRUD::readAll($whereCondition);
    
?>