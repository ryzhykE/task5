<?

class Mysql implements iWorkData
{
    private  $connect;
    private  $db;

    public function __construct()
    {
        if(! $this->connect = mysql_connect(HOST,USER,PASS))
        {
            throw new Exception(NO_CONNECT. mysql_error());
        }
        if(! mysql_select_db(DB,$this->connect))
        {
            throw new Exception(NO_DB. mysql_error());
        }
    }
    public function saveData($key, $val)
    {
        $query = "INSERT INTO " . TABLE . " ($key) " .  " VALUES " . " ($val) ";

        if (!$result = mysql_query($query, $this->connect))
        {
            throw new Exception(NO_ADD . mysql_error());
        }
        return $result;
    }

    public function getData($key)
    {
        $query = "SELECT `key`,`data` FROM " . TABLE . " WHERE `key`= $key " ;

        if (!$result = mysql_query( $query, $this->connect))
        {
            throw new Exception(NO_DATA . mysql_error());
        }
        if(is_resource($result)) {
            $data = [];
            while ($row = mysql_fetch_assoc($result))
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
            return NO_DATA . mysql_error();
        }
            
    }

    public function deleteData($key)
    {
        $query = "DELETE FROM " . TABLE . " WHERE `key`= $key " ;
        if (!$result = mysql_query( $query, $this->connect))
        {
            throw new Exception(NO_DATA . mysql_error());
        }
        return true;
    }
    
}

