<?php

require_once "connection.php";
class UsersModel
{
    static public function mdlShowUsers($table, $item, $value)
    {
        $start = Connection::connector()->prepare("SELECT * FROM $table WHERE $item = :$item");
        $start->bindParam(":" . $item, $value, PDO::PARAM_STR);
        $start->execute();
        return $start->fetch();

        $start->close();
        $start = null;
    }
    static public function mdlAddUser($table, $datas)
    {
        $start = Connection::connector()->prepare("INSERT INTO $table(name,user,password,profile,) VALUES(:name, :user, :password, :profile)");
        $start->bindParam(":name", $datas["name"], PDO::PARAM_STR);
        $start->bindParam(":user", $datas["user"], PDO::PARAM_STR);
        $start->bindParam(":password", $datas["password"], PDO::PARAM_STR);
        $start->bindParam(":profile", $datas["profile"], PDO::PARAM_STR);
        if ($start->execute()) {
            return "valid";
        } else {
            return "error";
        }
        $start->close();
        $start = null;
    }
}
