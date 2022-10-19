<?php

require_once('DBconnect.class.php');

class Query extends DBConnection
{
    private $query;
    private $fields;

    function __construct(
        string $query,
        ?string $fields
    )
    {
        $this->query = $query;
        $this->fields = $fields;
    }

    public static function sqlReadQuery ($query, $fields)
    {
        $db = DBConnection::PDO();
        $sqlStatement = $db->prepare($query);
        $sqlStatement->execute($fields);
        $response = $sqlStatement->fetchAll(PDO::FETCH_OBJ);

        return $response;
    }

}
?>