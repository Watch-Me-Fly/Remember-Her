<?php 

require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/murder.CRUD.php');

if (isset($_GET['id']))
{
    /*--------------------------------------------
    *           Delete user's info
    *---------------------------------------------*/

        // read murder table for source id
        require_once($_SERVER['DOCUMENT_ROOT'].'/controllers/victims/murder.controller.php');
        $sourceId = $article[0]->sources_id;

        var_dump($sourceId);
        // delete sources
        $deleteSources= MurderCRUD::deleteSources($sourceId);
        // delete article
        $deleteArticle= MurderCRUD::deleteArticle(['victim_id' => $_GET['id']]);

        header('location: /admin/dashboard');
}
else
{
    return false;
}

?>