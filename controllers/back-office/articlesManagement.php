<?php
    session_start();

    include_once('./../verifyImage.php');
    
    if ( isset($_POST['submit']) )
    {
        if (isset($_SESSION['userID']))
        {
            $adminId = $_SESSION['userID'];
            $victim_id = $_GET['id'];
            $photoName = verifyImage();

            require_once('./../victims/murder.controller.php');
            $sourceId = $article[0]->sources;

            /*--------------------------------------------
            *    Update and Set AdminId in enabled_by
            *---------------------------------------------*/
            require_once('./../../database/OOPmethod/murder.CRUD.php');
            require_once('./../../database/OOPmethod/murder.class.php');

            $article = Murder::updateMurderVictim(
                $adminId,
                $sourceId,
                $victim_id,
                $_POST['firstName'],
                $_POST['lastName'],
                $_POST['age'],
                $_POST['countryOfOrigin'],
                $photoName,
                $_POST['twitterHash'],
                $_POST['urlSource1'],
                $_POST['urlSource2'],
                $_POST['urlSource3'],
                $_POST['urlSource4'],
                $_POST['urlSource5'],
                $_POST['reasonForCrime'],
                $_POST['toolUsed'],
                $_POST['countryOfCrime'],
                $_POST['dateOfDeath'],
                $_POST['killer'],
                $_POST['story'],
                $_POST['punishment']
            );


            header('location:/admin/dashboard?updated=1');
            exit();
        }
    }

?>