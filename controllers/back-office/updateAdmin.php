<?php
    require_once('database/OOPmethod/admin.CRUD.php');
    
    /**============================================
    *                    UPDATE
    *=============================================**/

        if (!isset($_GET['id']) && is_numeric($_GET['id']))
        {
            echo 'provide an id';
            return;
        }

        // read
        $query = 'SELECT * FROM Admins WHERE admin_id = :id';
        $fields = [':id' => $_GET['id']];
        $adminData = Query::sqlReadQuery($query, $fields);

        // update
        if (isset($_GET['id']) && isset($_POST['update']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $location = $_POST['location'];

            $conditions = "username = '$username', 
                            password = '$password', 
                            email = '$email', 
                            location = '$location'";
            
            $adminData = AdminCRUD::update($_POST['admin_id'], $conditions);

            header('location: /models/try.php?updated=1');
        }

?>