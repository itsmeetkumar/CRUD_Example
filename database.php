<?php
class Database
{
    // DB connection
    private static $db_Name = 'crud_tutorial' ;
    private static $db_Host = 'localhost' ;
    private static $db_Username = 'root';
    private static $db_UserPassword = '';
     
    private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {
       // cheack connection 
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$db_Host.";"."db_name=".self::$db_Name, self::$db_Username, self::$db_UserPassword); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     //disconnect function 
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>
