<?php
include_once('verifyImage.php');


if (isset($_POST['submit']))
{
    $photoName = verifyImage();
    
    $timezone = new DateTimeZone("Europe/Paris");
    $date = new DateTime('now', $timezone);
    $created = $date->format('d-m-Y H:m');

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

   $addVictim = new AddMurderController(
    // $created, 
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
    false,
    1,
    $reasonForCrime,
    $toolUsed,
    $countryOfCrime,
    $dateOfDeath,
    $killer,
    $story, 
    $punishment
   );

   // run error handler
   $addVictim->addArticle();
   
    // var_dump($addVictim);

   // success message
   header('location:/add-victim?added=1');
}

?>