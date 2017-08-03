<?

 include("iWorkData.php");
class SessionC implements iWorkData
{

    public function saveData($key, $val)
    {
        if(!isset($_SESSION[$key]))
        {
            $_SESSION[$key] = $val;
        }
    }

    public function getData($key)
    {
        if(isset($_SESSION[$key]))
        {
            return $_SESSION[$key];
        }
        else
        {
            return SESSION_ERR;
        }
    }

    public function deleteData($key)
    {
        if($_SESSION[$key])
        {
            unset($_SESSION[$key]);
            return true;
        }
        else
        {
            return SESSION_ERR_DEL;
        }

    }
}

