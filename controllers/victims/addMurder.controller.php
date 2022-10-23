<?php

if (isset($_POST['submit']))
{
    $timezone = new DateTimeZone("Europe/Paris");
    $date = new DateTime('now', $timezone);
    $created = serialize($date);

    // obtain data
    $victim = [
        $created,
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['age'],
        $_POST['countryOfOrigin'],
        $_FILES['photo'],
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
    ];

    // class instance
    include($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/murder.CRUD.php');
    include($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/murder.class.php');
    include($_SERVER['DOCUMENT_ROOT'].'/models/murderEntryController.class.php');
    $addVictim = new AddMurderController(
        $victim[0],
        $victim[1],
        $victim[2],
        $victim[3],
        $victim[4],
        $victim[5],
        $victim[6],
        $victim[7],
        $victim[8],
        $victim[9],
        $victim[10],
        $victim[11],
        false,
        $victim[12],
        $victim[13],
        $victim[14],
        $victim[15],
        $victim[16],
        $victim[17],
        $victim[18]
    );

    // run error handler
    $addVictim->addArticle();

    // grab data
    header('location:/add-victim?added=1');

}

?>

