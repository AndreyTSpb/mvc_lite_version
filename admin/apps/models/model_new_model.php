<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 17/06/2019
 * Time: 13:04
 */

class Model_New_Model extends Model
{
    function get_tables_name(){
        global $link;
        $sql = $link->query("SHOW TABLES FROM ".DB_NAME.";");

        $res = $sql->fetchAll(PDO::FETCH_ASSOC);

        if(!$res){
            return false;
        }
        $arr = array();
        foreach ($res as $table_name){
            $arr[] = $table_name['Tables_in_farm'];
        }
        return $arr;
    }
}