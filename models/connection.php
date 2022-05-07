<?php

class Connection
{
    public function connector()
    {
        $link = new PDO(
            "mysql:host=localhost;dbname=goodtech",
            "root",
            ""
        );
        $link->exec("set name uft8");
        return $link;
    }
}
