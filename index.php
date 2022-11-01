<?
require_once 'csv.php';
require_once 'bd.php';

$csv_array = Csv::CvsToAssoc(fopen("csv.csv", "r"),';');

$connect = BD::GetCon('localhost','root','root','prodamus');
$q = 'orders';
$sql_array = BD::SelectAll($connect,$q);

$orders = array();
foreach($csv_array as $key=>$value){
    if(array_key_exists($key,$sql_array)){
        $orders[$key] = array();
        array_push($orders[$key],$csv_array[$key]);
    }
}
 
