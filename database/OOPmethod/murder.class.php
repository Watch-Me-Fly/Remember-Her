<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/murder.CRUD.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/Query.class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/DBConnect.class.php');

class Murder extends MurderCRUD
{
    protected function setArticle(
        // string $postCreationDate,
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
        $this->setSources($source1, $source2, $source3, $source4, $source5, $twitterTag);
        $sourceId = $this->findSourceId($source1, $source2, $source3, $source4, $source5, $twitterTag);

        $this->setMurderArticle(
            // $postCreationDate, 
            $firstName, $lastName,$age,$countryOfOrigin,$photo, $reasonForCrime, $crimeTool, $countryOfCrime, $dateOfDeath,$killerRelationship, $story, $punishment,$sourceId, $isEnabled, $enabledBy
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
    protected function setSources($source1, $source2, $source3, $source4, $source5, $twitterTag)
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
        // $postCreationDate,
        $firstName, $lastName,$age,$countryOfOrigin,$photo, $reasonForCrime, $crimeTool, $countryOfCrime, $dateOfDeath,$killerRelationship, $story, $punishment,$sourceId, $isEnabled, $enabledBy
    )
    {
        try
        {
        /**============================================
         *             add to victims_murder
         *=============================================**/

            $article = [
            // 'post_creation_date'    => $postCreationDate,
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
    public static function updateMurderVictim(
        Int $adminId,
        int $victim_id,
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
        string $reasonForCrime, 
        string $crimeTool, 
        string $countryOfCrime, 
        string $dateOfDeath, 
        string $killerRelationship, 
        string $story,
        string $punishment
        )
    {
        try
        {
            // ---------------- get source id
            $sourceId = MurderCRUD::findSourceId($source1,$source2,$source3,$source4,$source5,$twitterTag);
            // ---------------- update sources
            $sources = [
                'urlSource1' => $source1, 
                'urlSource2' => $source2, 
                'urlSource3' => $source3,
                'urlSource4' => $source4,
                'urlSource5' => $source5, 
                'twitterHash' => $twitterTag,
                'sources_id' => $sourceId
            ];
            MurderCRUD::updateSources($sourceId, $sources);
            
            // ---------------- update article
            $table = "victims_murder";

            $conditions = "
                `first_name`=':first_name',
                `last_name`=':last_name',
                `age`=:age,
                `country_origin`=':country_origin',
                `photo`=':photo',
                `reason_group`= $reasonForCrime,
                `crime_tool`= $crimeTool,
                `country_crime`=':country_crime',
                `date_of_death`=':date_of_death',
                `perpetrator`=$killerRelationship,
                `story`=':story',
                `punishment`=':punishment',
                `is_enabled`= 1,
                `enabled_by`= $adminId
            ";
            $fields = [
                ":first_name"       => $firstName,
                ":last_name"        => $lastName,
                ":age"              => $age,
                "country_origin"    => $countryOfOrigin,
                ":photo"            => $photo,
                "country_crime"     => $countryOfCrime,
                ":date_of_death"    => $dateOfDeath,
                ":story"            => $story,
                ":punishment"       => $punishment,
            ];
            MurderCRUD::updateArticle($table, $conditions, $victim_id, $fields);

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