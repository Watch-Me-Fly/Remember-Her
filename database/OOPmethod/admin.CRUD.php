<?php
    // require_once('DBconnect.class.php');
    require_once('Query.class.php');
    require_once($_SERVER['DOCUMENT_ROOT']. '/models/admin.class.php');

    class AdminCRUD {

        public static function create($admin)
        {
            try 
            {
            $sqlStatement = "INSERT INTO Admins (username, password, email, location, is_admin) VALUES (:username, :password, :email, :location, '0')";

            $fields = [
                ':username' => $admin['username'],
                ':password' => $admin['password'],
                ':email' => $admin['email'],
                ':location' => $admin['location'],
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
                $array = [];
                $sqlStatement = "SELECT * FROM Admins";
                $db = Query::sqlReadQuery($sqlStatement, null);

                foreach ($db as $adminArray)
                {
                    $array[] = new Admin(
                        $adminArray->admin_id,
                        $adminArray->username,
                        $adminArray->password,
                        $adminArray->email,
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
        public static function readWhere($what, $whereCondition, $variables)
        {
            try 
            {
                $array = [];
                $sqlStatement = "SELECT ".$what." FROM Admins WHERE ". $whereCondition;

                $db = Query::sqlReadQuery($sqlStatement, $variables);

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
                                ' WHERE `admin_id` = ' . $admin_id;
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
        public static function delete($whereCondition)
        {
            try
            {
                $conditions = "";
                foreach ($whereCondition as $key => $value)
                {
                    $conditions .= $key." = ".$value." AND ";
                }
                $conditions = substr($conditions, 0, -5);

                $sqlStatement = 'DELETE FROM Admins WHERE ' . $conditions;
                $db = Query::sqlDeleteQuery($sqlStatement, null);
                
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