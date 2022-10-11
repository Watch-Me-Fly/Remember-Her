<?php

    function isAdmin(array $admin) : bool
    {
        // to secure the code, ensure that key exists
        if (array_key_exists('is_admin', $admin))
        {
            // create a var to get a "true" 'is_enabled'
            $isAdmin = $admin['is_admin'];
        } 
        else 
        {
            $isAdmin = false;
        }

        return $isAdmin;
    }


?>