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

        public static function read()
        {
            try 
            {
                $sqlStatement = "SELECT * FROM Admins";

                $db = Query::sqlReadQuery($sqlStatement, null);

                // ANCHOR do i need this ?
                $array = [];
                foreach ($db as $adminArray)
                {
                    $array[] = new Admin(
                        $adminArray->admin_id,
                        $adminArray->username,
                        $adminArray->email,
                        $adminArray->password,
                        $adminArray->location,
                        $adminArray->is_admin = false
                    );
                }
                // return $db;
                return $array;

            }
            catch (PDOException $Exception)
            {
                throw new PDOException(
                    $Exception->getMessage( )
                );
                header('location:/error');
            }
        }

        public static function update($admin_id, $conditions)
        {
            try
            {
                $sqlStatement = 'UPDATE Admins SET ' . 
                                $conditions .
                                'WHERE `admin_id` = ' . $admin_id;

                $db = Query::sqlUpdateQuery($sqlStatement, null);
                
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

        public static function delete($conditions)
        {
            try
            {
                $sqlStatement = 'DELETE FROM Admins WHERE ' . $conditions;
                $db = Query::sqlCreateQuery($sqlStatement, null);
                
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