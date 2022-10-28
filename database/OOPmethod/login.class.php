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
        $getUserStatement = 'SELECT `password` FROM Admins WHERE username= ? OR email= ?';
        $getUserQuery = Query::sqlPrepare($getUserStatement);

        // variales to replace the ? in the query
        $getUserVariables = [$user, $password];

        // if query cannot obtain variables, end
        failedStatement($getUserQuery, $getUserVariables);

        // if query gives no results : end off query, exit script, and give an error message
        noResultQuery($getUserQuery);

        // compare the password from DB with the one entered, get as associated column
        $passwordHashed = $getUserQuery->fetchAll(PDO::FETCH_ASSOC);

        // check the first dimension of results, password column
        $checkPassword = ($password === $passwordHashed[0]['password']);

        /**============================================
        *  Does the password match the password in DB?
        *=============================================**/
        if ($checkPassword == false)
        {
            $getUserQuery = null;
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
            // STUB : verify with florian why it is not working

            $userOrEmailStatement = 'SELECT * FROM Admins WHERE 
                            (username= :username OR email= :email) AND `password`= :password';

            $userOrEmailQuery = Query::sqlPrepare($userOrEmailStatement);

            // $user here = email or username
            $userOrEmailVariables = [
                ":username" => $user,
                ":email" => $user,
                ":password" => $password
            ];
            failedStatement($userOrEmailQuery, $userOrEmailVariables);

            noResultQuery($userOrEmailQuery);
            /**============================================
            *       was their admin account validate ?
            *=============================================**/
            $isAdminStatement = "SELECT * FROM Admins WHERE username = :username AND is_admin = :is_admin";
            $isAdminQuery = Query::sqlPrepare($isAdminStatement);
            
            // get only valid admin accounts
            $isAdminVariables = [
                ":username" => $user,
                ":is_admin" => 1
            ];
            $isAdminQuery->execute($isAdminVariables);

            if ($isAdminQuery->rowCount() == 0)
            {
                $isAdminQuery = null;
                header('location:/error?error=pendingAdmin');
                exit();
            }
            /**============================================
            *  if it passes all verifications, get the results
            *=============================================**/
            $adminInfo = $isAdminQuery->fetchAll(PDO::FETCH_ASSOC);
            // $admin = $isAdminQuery->fetchAll(PDO::FETCH_ASSOC);
            // $array= json_decode(json_encode($admin));

            /**============================================
            *       Now start the session with id 
            *=============================================**/
            session_start();
            
            $_SESSION['userID'] = $adminInfo[0]['admin_id'];
        }

        // if it does not pass all the previous steps, don't query
        $getUserQuery = null;
    }


}

?>