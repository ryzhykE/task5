<?  

   class CookieC implements iWorkData
   {
  
     public function saveData($key, $val)
      {
          setcookie($key,$val);
          $_COOKIE[$key] = $val;

      }
 
     public function getData($key)
      {    
          return $_COOKIE[$key];
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
                  return false;
          }
      }
  }
  
 


