<?php
     session_start();

     include_once('verifyImage.php');

     if (isset($_POST['submit']))
     {
          $photoName = verifyImage();

          // obtain the data
          $firstName          = $_POST['firstName'];
          $lastName           = $_POST['lastName'];
          $age                = $_POST['age'];
          $countryOfOrigin    = $_POST['countryOfOrigin'];
          $photo              = $photoName;
          $twitterHash        = $_POST['twitterHash'];
          $urlSource1         = $_POST['urlSource1'];
          $urlSource2         = $_POST['urlSource2'];
          $urlSource3         = $_POST['urlSource3'];
          $urlSource4         = $_POST['urlSource4'];
          $urlSource5         = $_POST['urlSource5'];
          $reasonForCrime     = $_POST['reasonForCrime'];
          $toolUsed           = $_POST['toolUsed'];
          $countryOfCrime     = $_POST['countryOfCrime'];
          $dateOfDeath        = $_POST['dateOfDeath'];
          $killer             = $_POST['killer'];
          $story              = $_POST['story'];
          $punishment         = $_POST['punishment'];

          // class instance
          require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/murder.CRUD.php');
          require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/murder.class.php');
          require_once($_SERVER['DOCUMENT_ROOT'].'/models/murderEntryController.class.php');

          if (isset($_SESSION['userID']))
          {
               $addVictim = new AddMurderController(
                    $firstName, 
                    $lastName, 
                    $age, 
                    $countryOfOrigin, 
                    $photoName,
                    $twitterHash,
                    $urlSource1, 
                    $urlSource2,
                    $urlSource3,
                    $urlSource4,
                    $urlSource5,
                    1,
                    $_SESSION['userID'],
                    $reasonForCrime,
                    $toolUsed,
                    $countryOfCrime,
                    $dateOfDeath,
                    $killer,
                    $story, 
                    $punishment
               );
          }
          else
          {
               $addVictim = new AddMurderController(
                    $firstName, 
                    $lastName, 
                    $age, 
                    $countryOfOrigin, 
                    $photoName,
                    $twitterHash,
                    $urlSource1, 
                    $urlSource2,
                    $urlSource3,
                    $urlSource4,
                    $urlSource5,
                    0,
                    1,
                    $reasonForCrime,
                    $toolUsed,
                    $countryOfCrime,
                    $dateOfDeath,
                    $killer,
                    $story, 
                    $punishment
               );
     
          }
          // run error handler
          $addVictim->addArticle();
          
          // success message
          header('location:/add-victim?added=1');
     }

?>