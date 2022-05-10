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

    /*=============================================
    ADD USER 
    =============================================*/
    static public function mdAddUsers($table, $datas)
    {
        $stmt = Connection::connector()->prepare("INSERT INTO $table(name, user, password, profile) VALUES (:name, :user, :password, :profile)");
        $stmt->bindParam(":name", $datas["name"], PDO::PARAM_STR);
        $stmt->bindParam(":user", $datas["user"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datas["password"], PDO::PARAM_STR);
        $stmt->bindParam(":profile", $datas["profile"], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return 'added';
        } else {
            return 'error';
        }

        $stmt->close();

        $stmt = null;
    }
}
