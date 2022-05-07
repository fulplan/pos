<?php

require_once "connection.php";
class UsersModel
{
    static public function MdlShowUsers($table, $item, $value)
    {
        $start = Connection::connector()->prepare("SELECT * FROM $table WHERE $item = :$item");
        $start->bindParam(":" . $item, $value, PDO::PARAM_STR);
        $start->execute();
        return $start->fetch();
    }
}
