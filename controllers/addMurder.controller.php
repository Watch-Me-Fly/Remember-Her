<?php
/*--------------------------------------------
*             Connect to Database
*---------------------------------------------*/
require_once('database/OOPmethod/Query.class.php');

/*--------------------------------------------
*               Display Fields Loops
*---------------------------------------------*/
// 🗄️ ------- Reasons
$reason = Query::sqlReadQuery('SELECT * FROM Reason', null);

// 🗄️ ------- Perpetrator
$perpetrator = Query::sqlReadQuery('SELECT * FROM Perpetrator', null);

// 🗄️ ------- Tool used
$tool = Query::sqlReadQuery('SELECT * FROM Tools', null);

/*--------------------------------------------
*              Country selector
*---------------------------------------------*/
    // get the json file
    $jsonFile = file_get_contents('assets/json/countries.json');
    // decode it
    $json = json_decode($jsonFile, true);

?>