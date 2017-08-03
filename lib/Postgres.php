<?php

class Postgres implements iWorkData
{
    private  $connect;

        public function __construct()
    {

        $this->connect = pg_connect("host=localhost dbname=test11 user=postgres");
        //$this->connect = pg_connect("host=localhost  port=5432 dbname=user1 user=user1 password=user1z");
        if(!$this->connect )
        {
            throw new Exception(NO_CONNECT);
        }
    }

    public function saveData($key, $val)
    {
        $query = "INSERT INTO " . PG_TABLE . " (" . $key . ") " . " VALUES " . "( ". $val . ")";

        if (!$result = pg_query($this->connect, "$query"))
        {
            throw new Exception(NO_DB);
        }
    }

    public function getData($key)
    {
        $query = "SELECT `key`,`data` FROM " . PG_TABLE . " WHERE `key`= $key " ;
        if (!$result = pg_query($this->connect, "$query"))
        {
            throw new Exception(NO_DATA);
        }
        if($result) {
            $data = [];
            while ($row = pg_fetch_assoc($result))
            {
                foreach ($row as $key => $val)
                {
                    $data[][$key] = $val;
                }
            }
            return $data;
        }
        else
        {
            return NO_DATA ;
        }
    }

    public function deleteData($key)
    {
        $query = "DELETE FROM " . PG_TABLE . " WHERE `key`= $key ";
        if (!$result = pg_query($this->connect, "$query"))
        {
            throw new Exception(NO_DATA);
        }
        return true;
    }
}