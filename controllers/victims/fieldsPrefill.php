<?php

/*--------------------------------------------
*             Connect to Database
*---------------------------------------------*/
require_once($_SERVER['DOCUMENT_ROOT'].
            '/database/OOPmethod/Query.class.php');
require_once($_SERVER['DOCUMENT_ROOT'].
            '/controllers/countrySelector.php');

/*--------------------------------------------
*               Display Fields Loops
*---------------------------------------------*/
// 🗄️ ------- Reasons
$reason = Query::sqlReadQuery('SELECT * FROM Reason', null);

// 🗄️ ------- Perpetrator
$perpetrator = Query::sqlReadQuery('SELECT * FROM Perpetrator', null);

// 🗄️ ------- Tool used
$tool = Query::sqlReadQuery('SELECT * FROM Tools', null);

?>