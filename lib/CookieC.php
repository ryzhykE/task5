<?  

   class CookieC implements iWorkData
   {
  
     public function saveData($key, $val)
      {
          if(!isset($_COOKIE[$key]))
          {
              setcookie($key,$val);
              $_COOKIE[$key] = $val;
          }
      }
 
     public function getData($key)
      {
          if(isset($_COOKIE[$key]))
          {
              return $_COOKIE[$key];
          }
          else
          {
              return COOKIE_ERR;
          }
      }
 
      public function deleteData($key)
      {
          if (isset($_COOKIE[$key]))
          {
                unset($_COOKIE[$key]);
                return true;
          }
          else
          {
                  return COOKIE_ERR_DEL;
          }
      }
  }
  
 


