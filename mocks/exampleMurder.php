<?php

require_once('./../models/murder.class.php');

    $id="2";
    $postCreationDate = "25-02-2020";
    $firstName = "maha";
    $lastName= "last";
    $age = "18";
    $countryOfOrigin = "egypt";
    $photo = "photo.jpg";
    $reasonForCrime = "Reason";
    $crimeTool = "Tool";
    $countryOfCrime = "egypt";
    $dateOfDeath = "2020";
    $killerRelationship = "killer";
    $story = "story";
    $twitterTag = "#hashtag";
    $source1 = "source1";
    $source2 = null;
    $source3 = null;
    $source4 = null; 
    $source5 = null; 
    $isEnabled = true;

    $maha = new Murder(
        $id,
        $postCreationDate,
        $firstName, 
        $lastName, 
        $age, 
        $countryOfOrigin, 
        $photo, 
        $twitterTag,
        $source1,
        $source2,
        $source3, 
        $source4, 
        $source5, 
        $isEnabled,
        $reasonForCrime, 
        $crimeTool, 
        $countryOfCrime, 
        $dateOfDeath, 
        $killerRelationship, 
        $story
    );

echo "<pre>";
print_r($maha);
echo $maha->getArticle(); // same result
echo "</pre>";
?>