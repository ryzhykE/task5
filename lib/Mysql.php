
<?

class Mysql implements iWorkData
{
    private  $connect;
    private  $db;

    public function __construct()
    {
        $this->connect = mysql_connect('localhost','user1', 'tuser1');
        $this->db = mysql_select_db('user1');
                
    }
    public function saveData($key, $val)
    {
        $sql = " INSERT INTO MY_TEST (`user12`,'`testq`') VALUES ('$key', '$val')";
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

