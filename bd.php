<?
/*
* Класс для работы с БД: подключение и запрос
*/
class BD{
    /**
     *  Подключение к Базе данных
     *  
     * @param String $host
     * @param String $username
     * @param String $password
     * @param String $database
     * 
     * @return mysqli
     * 
     */
    public static function GetCon($host,$username,$password,$database){        
        $sql = mysqli_connect($host,$username,$password,$database);
        if($sql == false)
        {
           return mysqli_connect_error();
           die();
        }
        mysqli_set_charset($sql, "utf8");
        return $sql;       
    }
     /**
     *  Запрос к БД
     *  
     * @param mysqli $connect
     * @param String $table
     * 
     * @return Array
     * 
     */
    public static function SelectAll($connect, $table){
        $sql_array = array();
        $query = 'SELECT * FROM '. $table;
        $res = mysqli_query($connect,$query);
        if($res == false){
            return mysqli_error($connect);
            die();
        }
        
        while($result = mysqli_fetch_array($res)){
            $sql_array[$result['id']] = array();
            for($i = 1;$i < count($result) / 2;$i++){
                array_push($sql_array[$result['id']],$result[$i]);    
            }
        }
        return $sql_array;
    }
}
