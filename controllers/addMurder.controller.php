<?php

/*--------------------------------------------
*              Country selector
*---------------------------------------------*/
    // get the json file
    $jsonFile = file_get_contents('assets/json/countries.json');
    // decode it
    $json = json_decode($jsonFile, true);


?>