<?php
    require_once('Query.class.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/controllers/back-office/functions.php');

class Login
{
    //-- -------------- Run DB checks upon Login --------------- --//
    protected function getUser($user, $password)
    {
        /**============================================
        *  check if password is correct for current user
        *=============================================**/
        $sqlQuery = 'SELECT `password` FROM Admins WHERE username= ? OR email= ?';
        $query = Query::sqlPrepare($sqlQuery);

        // variales to replace the ? in the query
        $variables = [$user, $password];

        // if query cannot obtain variables, end
        failedStatement($query, $variables);

        // if query gives no results : end off query, exit script, and give an error message
        noResultQuery($query);

        // compare the password from DB with the one entered, get as associated column
        $passwordHashed = $query->fetchAll(PDO::FETCH_ASSOC);

        // check the first dimension of results, password column
        $checkPassword = ($password === $passwordHashed[0]['password']);

        /**============================================
        *  Does the password match the password in DB?
        *=============================================**/
        if ($checkPassword == false)
        {
            $query = null;
            header('location:?error=wrongPassword');
            exit();
        }
        //-- -------------- Proceed to verify if it matches --------------- --//
        elseif($checkPassword == true)
        {
            /**============================================
            *  allow user to connect with mail or username
            *=============================================**/
            // is username/email connected to pw is equal to submitted
            $sqlQuery = 'SELECT * FROM Admins WHERE username= ? OR email= ? AND `password`= ?';
            $query = Query::sqlPrepare($sqlQuery);

            // $user here = email or username
            $variables = [$user, $user, $password];

            failedStatement($query, $variables);

            noResultQuery($query);
            /**============================================
            *       was their admin account validate ?
            *=============================================**/
            $isAdmin = "SELECT * FROM Admins WHERE username = ? AND is_admin = ?";
            $query = Query::sqlPrepare($isAdmin);
            
            // get only valid admin accounts
            $variables = [$user, 1];
            if (!$query->execute($variables))
            {
                $query = null;
                header('location:?error=pendingAdmin');
                exit();
            }
            /**============================================
            *  if it passes all verifications, get the results
            *=============================================**/
            $admin = $query->fetchAll(PDO::FETCH_ASSOC);
            // $array= json_decode(json_encode($admin));

            /**============================================
            *       Now start the session with username 
            *=============================================**/
            session_start();
            
            // FIXME : this function should not be using username but userid
            // search for the first index admin from the last admin 
            // var containing all data from DB, get the admin_id column
            
            $_SESSION['userID'] = $user;
            // var_dump($_SESSION['userID']);
        }

        // if it does not pass all the previous steps, don't query
        $query = null;
    }


}

?>