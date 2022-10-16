<?php

    /**============================================
     *        Generate randomized password
     *=============================================**/
    function generatesPassword()
    {
        // authorized characters
        $authorizedChars = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN123456789*-+&.@';

        // length of password
        $passwordLength = rand(8,12);

        // create a password variable
        $password = '';

        // generate password
        for ($i = 0; $i <= $passwordLength; $i++)
        {
            // randomize characters
            $characters = rand(0, strlen($authorizedChars));

            // password creator array
            $password .= $authorizedChars[$characters];
        }
        return $password;
    }

    echo generatesPassword();

?>