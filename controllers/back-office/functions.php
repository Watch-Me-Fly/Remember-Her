<?php

    function isAdmin(array $admin) : bool
    {
        // to secure the code, ensure that key exists
        if (array_key_exists('isAdmin', $admin))
        {
            // create a var to get a "true" 'is_enabled'
            $isAdmin = $admin['isAdmin'];
        }
        else 
        {
            $isAdmin = false;
        }

        return $isAdmin;
    }

    function failedStatement($query, $variables)
    {
        if (!$query->execute($variables))
        {
            $query = null;
            header('location:/admin-login?error=failed-statement');
            exit();
        }
    }
    function noResultQuery($query)
    {
        if ($query->rowCount() == 0)
        {
            $query = null;
            header('location:admin-login?error=userNotFound');
            exit();
        }
    }
    
    


?>