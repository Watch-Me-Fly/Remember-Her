<?php 

if (isset($_GET['id']))
{
    // FIXME
    /*--------------------------------------------
    *           Delete user's info
    *---------------------------------------------*/
        $where = ['victim_id' => $_GET['id']];
        
        // read murder table for source id
        $article = MurderCRUD::readAll($where);
        $sourceId = $article['sources'];
        // delete sources
        $deleteSources= MurderCRUD::deleteSources($sourceId);
        // delete article
        $deleteArticle= MurderCRUD::deleteArticle($where);

        // header('location: /admin/dashboard');
}
else
{
    return false;
}

?>