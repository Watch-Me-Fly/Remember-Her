<?php
require_once('./../../database/OOPmethod/admin.CRUD.php');

    /**============================================
    *                    DELETE
    *=============================================**/
    if(isset($_GET["delete"]))  
    {
        $adminID= $_GET["id"];
        $where = ['admin_id' => $adminID];

        $deleteAdmin= AdminCRUD::delete($where);

        header('location:/home?admin-deleted=1');
    }

?>