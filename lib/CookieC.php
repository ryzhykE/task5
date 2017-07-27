<?  

   class CookieC implements iWorkData
   {
  
     public function saveData($key, $val)
      {
          return setcookie($key,$val);

      }
 
     public function getData($key)
      {    
          return $_COOKIE[$key];
      }
 
      public function deleteData($key)
      {
          setcookie($key, ' ');
          $_COOKIE[$key];
      }
  }
  
 


