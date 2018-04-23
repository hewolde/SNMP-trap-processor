<?php

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('mytrap.db');
    }
}

$db = new MyDB();

        /*   create  */
$db->exec('CREATE TABLE IF NOT EXISTS mycredential (ip STRING,port INTEGER,community STRING)');

?>
