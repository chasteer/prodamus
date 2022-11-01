<?
/*
* Класс для работы с CSV
*/
class Csv{
    /**
     * Конвертация Csv в ассоциативный массив
     * 
     * @param Strem $handle
     * @param String $separator
     * 
     * 
     * @return Array 
     */
    public static function CvsToAssoc($handle, $separator){
        $csv_array = array();
        if($handle !== FALSE){
            $row = 0;
            while(($data = fgetcsv($handle, 0 ,  $separator)) !== FALSE){
                $num = count($data); 
                $row++;
                if($row == 1)
                continue;                
                $csv_array[$data[0]] = array();
                for ($c=1; $c < $num; $c++) {
                    array_push($csv_array[$data[0]], $data[$c]);
                }
            }
            return $csv_array;
        }
        return false;
    }
}
