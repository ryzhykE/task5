
<?

class Mysql implements iWorkData
{
    private  $connect;
    private  $db;

    public function __construct()
    {
        if(! $this->connect = mysql_connect(HOST,USER,PASS))
        {
            throw new Exception(mysql_error());
        }
        if(! $this->db = mysql_select_db(DB))
        {
            throw new Exception(mysql_error());
        }
    }
    public function saveData($key, $val)
    {
        $sql = "INSERT INTO " . TABLE  . " (`user12`,'`testq`') VALUES ('$key', '$val')";
        $result = mysql_query($sql, $this->connect);
    }

    public function getData($key)
    {
        $sql = "SELECT * FROM MY_TEST";
        $result = mysql_query($sql , $this->connect);
        return $result
            
    }

    public function deleteData($key)
    {

    }
    
}

