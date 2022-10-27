<?php

    require_once('Query.class.php');
    require_once($_SERVER['DOCUMENT_ROOT']. '/models/murder.class.php');

    class MurderCRUD
    {

        public static function addMurder($article)
        {
            try
            {
                $sqlStatement = "INSERT INTO `victims_murder`(`post_creation_date`, `victim_id`, `first_name`, `last_name`, `age`, `country_origin`, `photo`, `reason_group`, `crime_tool`, `country_crime`, `date_of_death`, `perpetrator`, `story`, `punishment`, `sources`, `is_enabled`, `enabled_by`) VALUES (:post_creation_date, null ,:first_name,:last_name,:age,:country_origin,:photo,:reason_group,:crime_tool,:country_crime,:date_of_death,:perpetrator,:story,:punishment,:sources,:is_enabled, :enabled_by)";

                $fields = [
                    ":post_creation_date"=> $article['post_creation_date'],
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

        public static function readAll($whereOptional, $fields)
        {
            try
            {
                $array = [];
                $sqlStatement = 
                "SELECT * FROM `victims_murder` 
                JOIN reason
                JOIN tools
                JOIN perpetrator
                JOIN sources
                JOIN admins
                ON victims_murder.reason_group = reason.reason_id
                AND victims_murder.crime_tool = tools.tool_id
                AND victims_murder.perpetrator = perpetrator.perpetrator_id
                AND victims_murder.sources = sources.sources_id
                AND victims_murder.enabled_by = admins.admin_id ".$whereOptional;

                $db = Query::sqlReadQuery($sqlStatement, $fields);

                foreach ($db as $murderArray)
                {
                    $array[] = new Murder(
                        $murderArray->victim_id,
                        $murderArray->post_creation_date,
                        $murderArray->first_name,
                        $murderArray->last_name,
                        $murderArray->age,
                        $murderArray->country_origin,
                        $murderArray->photo,
                        $murderArray->twitter_hashtag,
                        $murderArray->source_1,
                        $murderArray->source_2,
                        $murderArray->source_3,
                        $murderArray->source_4,
                        $murderArray->source_5,
                        $murderArray->is_enabled,
                        $murderArray->reason_group,
                        $murderArray->crime_tool,
                        $murderArray->country_crime,
                        $murderArray->date_of_death,
                        $murderArray->perpetrator,
                        $murderArray->story,
                    );
                }

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

        public static function update($table, $conditions, $victim_id)
        {
            try
            {
                $sqlStatement = 'UPDATE '.$table.' SET ' . 
                                $conditions .
                                ' WHERE `victim_id` = ' . $victim_id;
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
    }

?>