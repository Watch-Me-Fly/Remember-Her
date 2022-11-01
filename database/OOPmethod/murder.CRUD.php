<?php

    require_once('Query.class.php');
    // require_once($_SERVER['DOCUMENT_ROOT']. '/models/murder.class.php');
    require_once($_SERVER['DOCUMENT_ROOT']. '/database/OOPmethod/murder.class.php');

    class MurderCRUD
    {

        public static function addMurder($article)
        {
            try
            {
                // FIXME 
                $sqlStatement = "INSERT INTO `victims_murder`
                (`post_creation_date`, `victim_id`, 
                `first_name`, `last_name`, 
                `age`, `country_origin`, 
                `photo`, `reason_group`, 
                `crime_tool`, `country_crime`, 
                `date_of_death`, `perpetrator`, `
                story`, `punishment`, 
                `sources`, 
                `is_enabled`, `enabled_by`) 
                VALUES (NOW(), null,
                :first_name, :last_name,
                :age, :country_origin,
                :photo, :reason_group,
                :crime_tool, :country_crime,
                :date_of_death, :perpetrator,
                :story, :punishment, 
                :sources, 
                :is_enabled, :enabled_by)";


                $fields = [
                    // ":post_creation_date"=> $article['post_creation_date'],
                    ":first_name"       => $article['firstName'], 
                    ":last_name"        => $article['lastName'], 
                    ":age"              => $article['age'],
                    ":country_origin"   => $article['countryOfOrigin'], 
                    ":photo"            => $article['photo'],
                    ":reason_group"     => $article['reasonForCrime'], 
                    ":crime_tool"       => $article['toolUsed'], 
                    ":country_crime"    => $article['countryOfCrime'], 
                    ":date_of_death"    => $article['dateOfDeath'], 
                    ":perpetrator"      => $article['killer'], 
                    ":story"            => $article['story'], 
                    ":punishment"       => $article['punishment'],
                    ":sources"          => $article['sources'], 
                    ":is_enabled"       => $article['is_enabled'],
                    ":enabled_by"       => $article['enabled_by'],
                ];

                $db = DBConnection::PDO(); 
                $connect = $db->prepare($sqlStatement);
                $connect->execute($fields);

                return $connect;
            }
            catch (PDOException $Exception) 
            {
                throw new PDOException(
                    $Exception->getMessage( )
                );
                header('location:/error');
            }
        }
        public static function addSources($sources)
        {
            try
            {
                $sqlStatement = "INSERT INTO `sources` (source_1, source_2, source_3, source_4, source_5, twitter_hashtag) VALUES (:source_1, :source_2, :source_3, :source_4, :source_5, :twitter_hashtag)";

                $fields = [
                    ":source_1" => $sources['urlSource1'], 
                    ":source_2" => $sources['urlSource2'], 
                    ":source_3" => $sources['urlSource3'],
                    ":source_4" => $sources['urlSource4'],
                    ":source_5" => $sources['urlSource5'], 
                    ":twitter_hashtag" => $sources['twitterHash']
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
        public static function create($table, $columns, $values)
        {
            try
            {
                $sqlStatement = "INSERT INTO ".$table." " .$columns." VALUES ".$values;
                $fields = [];
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
        public static function readAll($whereOptional)
        {
            try
            {
                $sqlStatement = 
                "SELECT * FROM `victims_murder` 
                INNER JOIN reason
                INNER JOIN tools
                INNER JOIN perpetrator
                INNER JOIN sources
                INNER JOIN admins
                ON victims_murder.reason_group = reason.reason_id
                AND victims_murder.crime_tool = tools.tool_id
                AND victims_murder.perpetrator = perpetrator.perpetrator_id
                AND victims_murder.sources = sources.sources_id
                AND victims_murder.enabled_by = admins.admin_id ".$whereOptional;

                $db = Query::sqlReadQuery($sqlStatement, null);

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
        public static function readLastFour()
        {
            try {
                $sqlStatement = "SELECT 
                    `victim_id`, `first_name`, `last_name`, `age`, `photo` 
                    FROM `victims_murder` 
                    WHERE `is_enabled` = 1
                    ORDER BY `victim_id` 
                    DESC LIMIT 4";
                $db = Query::sqlReadQuery($sqlStatement, null);

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
        public static function updateSources($sourcesId, $sources)
        {
            try
            {
                $sqlStatement = "UPDATE `sources` SET 
                    `source_1`=':source_1',
                    `source_2`=':source_2',
                    `source_3`=':source_3',
                    `source_4`=':source_4',
                    `source_5`=':source_5',
                    `twitter_hashtag`=':twitter_hashtag' 
                    WHERE `sources_id` = :sources_id";

                $fields = [
                    ":source_1" => $sources['urlSource1'], 
                    ":source_2" => $sources['urlSource2'], 
                    ":source_3" => $sources['urlSource3'],
                    ":source_4" => $sources['urlSource4'],
                    ":source_5" => $sources['urlSource5'], 
                    ":twitter_hashtag" => $sources['twitterHash'],
                    ":sources_id" => $sourcesId,
                ];

                $db = Query::sqlUpdateQuery($sqlStatement, $fields);
                
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
        public static function updateArticle($table, $conditions, $victim_id, $fields)
        {
            try
            {
                $sqlStatement = 'UPDATE '.$table.' SET ' . 
                                $conditions .
                                ' WHERE `victim_id` = ' . $victim_id;
                $db = Query::sqlUpdateQuery($sqlStatement, $fields);
                
                return $db; // ANCHOR
            }
            catch (PDOException $Exception)
            {
                throw new PDOException(
                    $Exception->getMessage( )
                );
                header('location:/error');
            }
        }
        public static function deleteArticle($whereCondition)
        {
            try
            {
                $conditions = "";
                foreach ($whereCondition as $key => $value)
                {
                    $conditions .= $key." = ".$value." AND ";
                }
                $conditions = substr($conditions, 0, -5);

                $sqlStatement = 'DELETE FROM Victims_murder WHERE ' . $conditions;
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
        public static function deleteSources($sourceId)
        {
            try
            {
                $sqlStatement = 'DELETE FROM sources WHERE `sources_id` = '. $sourceId;
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
        public static function findSourceId($source1, $source2, $source3, $source4, $source5, $twitterTag)
        {
            try
            {
                $findSourceId = "SELECT sources_id FROM sources WHERE 
                                source_1 = ('$source1')
                            AND source_2 = ('$source2')
                            AND source_3 = ('$source3')
                            AND source_4 = ('$source4')
                            AND source_5 = ('$source5')
                            AND twitter_hashtag = ('$twitterTag')";
                $sourceIdQuery = Query::sqlReadQuery($findSourceId, null);
                $sourceId = $sourceIdQuery[0]->sources_id;
                return $sourceId;
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