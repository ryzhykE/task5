
<?

class Mysql 
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
    }

    public function getData($key)
    {

    }

    public function deleteData($key)
    {

    }
    
}

$result = new Mysql();
var_dump($result);
  
