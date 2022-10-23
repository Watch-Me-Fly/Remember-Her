<?php
// DB functions

class Murder extends MurderCRUD
{
    protected function setArticle(
        string $postCreationDate,
        string $firstName, 
        string $lastName, 
        int $age, 
        string $countryOfOrigin,
        array $photo,
        string $twitterTag, 
        string $source1,
        string $source2, 
        string $source3,
        string $source4,
        string $source5,
        int $isEnabled,
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

    /**============================================
     *             add to victims_murder
     *=============================================**/
        $sourcesId = "LAST_INSERT_ID()";

        $article = [
            'post_creation_date'    => $postCreationDate,
            'firstName'             => $firstName,
            'lastName'              => $lastName,
            'age'                   => $age,
            'countryOfOrigin'       => $countryOfOrigin,
            'photo'                 => $photo['name'],
            'reasonForCrime'        => $reasonForCrime,
            'toolUsed'              => $crimeTool,
            'countryOfCrime'        => $countryOfCrime,
            'dateOfDeath'           => $dateOfDeath,
            'killer'                => $killerRelationship,
            'story'                 => $story,
            'punishment'            => $punishment,
            'sources'               => $sourcesId,
            'is_enabled'            => $isEnabled
        ];

        $this->addMurder($article);
        
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
}

?>