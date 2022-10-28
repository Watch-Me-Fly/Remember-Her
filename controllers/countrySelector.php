<?php

/*--------------------------------------------
*              Country selector
*---------------------------------------------*/
    // get the json file
    $jsonFile = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/assets/json/countries.json');
    // decode it
    $json = json_decode($jsonFile, true);

/*--------------------------------------------
*       Retrieve country name from its code
*---------------------------------------------*/
function getCountryByCode ($json, $countryCode)
{
    foreach ($json as $country)
    {
            if ($countryCode === $country['code'])
        {
            echo $country['name'];
        }
    }
}

?>