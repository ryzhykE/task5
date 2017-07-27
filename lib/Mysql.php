
<?

class Mysql implements iWorkData
{
    private = $connect;
    private = $db;

    public function __construct()
    {
        $this->connect = mysql_connect(MSQ_HOST, MSQ_USER, MSQ_PASS);
        $this->db = mysql_select_db(MSQ_DB);
                
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
  
