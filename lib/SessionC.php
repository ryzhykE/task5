<?

 include("iWorkData.php");
class SessionC implements iWorkData
{

    public function saveData($key, $val)
    {
      return  $_SESSION[$key] = $val;
    }

    public function getData($key)
    {
      return $_SESSION[$key];
    }

    public function deleteData($key)
    {
      unset($_SESSION[$key]);
    }
}

