<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/murder.CRUD.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/Query.class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/DBConnect.class.php');

class Murder extends MurderCRUD
{
    protected function setArticle(
        string $postCreationDate,
        string $firstName, 
        string $lastName, 
        int $age, 
        string $countryOfOrigin,
        string $photo,
        string $twitterTag, 
        string $source1,
        string $source2, 
        string $source3,
        string $source4,
        string $source5,
        int $isEnabled,
        int $enabledBy,
        string $reasonForCrime, 
        string $crimeTool, 
        string $countryOfCrime, 
        string $dateOfDeath, 
        string $killerRelationship, 
        string $story,
        string $punishment
    )
    {
        try {
    /**============================================
    *             add to sources table
    *=============================================**/
        $this->getSources($source1, $source2, $source3, $source4, $source5, $twitterTag);
        
        $sourceId = $this->findSourceId($source1, $source2, $source3, $source4, $source5, $twitterTag);

        $this->setMurderArticle(
            $postCreationDate, $firstName, $lastName,$age,$countryOfOrigin,$photo, $reasonForCrime, $crimeTool, $countryOfCrime, $dateOfDeath,$killerRelationship, $story, $punishment,$sourceId, $isEnabled, $enabledBy
        );

        }
        catch (PDOException $Exception) 
        {
            throw new PDOException(
                $Exception->getMessage( )
            );
            header('location:/error?error=failed-statement');
        }


    }

    protected function getArticle($articleId)
    {
    /**============================================
     *             add to victims_murder
     *=============================================**/
        try
        {
            $whereOptional = " WHERE is_enabled = 1 AND victim_id = :id";
            $fields = [':id' => $articleId];
            $query = $this->readAll($whereOptional, $fields);
            return $query;
        }
        catch (PDOException $Exception) 
        {
            throw new PDOException(
                $Exception->getMessage( )
            );
            header('location:/error?error=failed-statement');
        }
    }

    protected function getSources($source1, $source2, $source3, $source4, $source5, $twitterTag)
    {
        try {
            /**============================================
            *             add to sources table
            *=============================================**/
                $sources = [
                    'urlSource1' => $source1, 
                    'urlSource2' => $source2, 
                    'urlSource3' => $source3,
                    'urlSource4' => $source4,
                    'urlSource5' => $source5, 
                    'twitterHash' => $twitterTag
                ];
                $this->addSources($sources);
            }
            catch (PDOException $Exception) 
            {
                throw new PDOException(
                    $Exception->getMessage( )
                );
                header('location:/error?error=failed-statement');
            }   
    }

    protected function setMurderArticle(
        $postCreationDate, $firstName, $lastName,$age,$countryOfOrigin,$photo, $reasonForCrime, $crimeTool, $countryOfCrime, $dateOfDeath,$killerRelationship, $story, $punishment,$sourceId, $isEnabled, $enabledBy
    )
    {
        try
        {
        /**============================================
         *             add to victims_murder
         *=============================================**/

            $article = [
            'post_creation_date'    => $postCreationDate,
            'firstName'             => $firstName,
            'lastName'              => $lastName,
            'age'                   => $age,
            'countryOfOrigin'       => $countryOfOrigin,
            'photo'                 => $photo,
            'reasonForCrime'        => $reasonForCrime,
            'toolUsed'              => $crimeTool,
            'countryOfCrime'        => $countryOfCrime,
            'dateOfDeath'           => $dateOfDeath,
            'killer'                => $killerRelationship,
            'story'                 => $story,
            'punishment'            => $punishment,
            'sources'               => $sourceId,
            'is_enabled'            => $isEnabled,
            'enabled_by'            => $enabledBy,
            ];

            $connect = $this->addMurder($article);

            // FIXME : not entering data
            if ($connect)
            {
                echo "✅ Connection to database is established ✅";
            }
            else
            {
                echo "❌ error occurred";
            }

        }
        catch (PDOException $Exception) 
        {
            throw new PDOException(
                $Exception->getMessage( )
            );
            header('location:/error?error=failed-statement');
        }
    }

    protected function updateArticleSources($source1, $source2, $source3, $source4, $source5, $twitterTag,$victim_id)
    {
        try
        {
            $sources = [
                'urlSource1' => $source1, 
                'urlSource2' => $source2, 
                'urlSource3' => $source3,
                'urlSource4' => $source4,
                'urlSource5' => $source5, 
                'twitterHash' => $twitterTag
            ];
            $this->updateSources($sources, $victim_id);
        }
        catch (PDOException $Exception) 
        {
            throw new PDOException(
                $Exception->getMessage( )
            );
            header('location:/error?error=failed-statement');
        }
    }
}

?>