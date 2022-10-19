<?php
    // require_once('DBconnect.class.php');
    require_once('Query.class.php');
    require_once('./../models/admin.class.php');
    require_once('./../database/pdo.php');

    class AdminCRUD {

        public static function create($admin)
        {
            try 
            {

            $sqlStatement = "INSERT INTO Admins (username, password, email, location, is_admin) VALUES (:username, :password, :email, :location, :is_admin)";

            $fields = [
                ':username' => $admin->username,
                ':password' => $admin->password,
                ':email' => $admin->email,
                ':location' => $admin->location,
                ':is_admin' => 0
            ];

            $db = Query::sqlCreateQuery($sqlStatement, $fields);

            return $db;
            
            } 
            catch (PDOException $Exception) 
            {
                throw new PDOException(
                    $Exception->getMessage( )
                );
                header('location:/error');
            }

        }

        public static function read($admin)
        {
            try 
            {
                $sqlStatement = "SELECT * FROM Admin WHERE admin_id = :id";
                $fields = [":id"=> $admin->admin_id];

                $db = Query::sqlReadQuery($sqlStatement, $fields);

                return $db;

            }
            catch (PDOException $Exception)
            {
                throw new PDOException(
                    $Exception->getMessage( )
                );
                header('location:/error');
            }
        }
    }
?>