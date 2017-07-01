<?php
#########################################################################
# File Name: array_map.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 四  6/29 23:17:18 2017
#########################################################################

$rows = array(['name'=>'王大力','age'=>18], ['name'=>'米老鼠','age'=>18]);

function batchInsert (array $rows)
{
    $values_str = '';
    $sqls       = array();
    $sql_datas  = array();
    $data_tmp   = array();

    foreach ($rows as $index => $row) {
        $row_data    = $row;
        $fields      = array_keys($row_data);
        $bind_fields = array_map(function ($v) use ($index, $row_data, &$data_tmp) {
            //var_dump($row_data);
            $data_tmp[$v . $index] = $row_data[$v];
            unset($data_tmp);
            return ':' . $v . $index;
        }, $fields);
        if (!empty($values_str)) {
            $values_str .= ' , ';
        }
        $values_str .= '(' . implode(',', $bind_fields) . ')';
        var_dump($values_str);
        if (($index + 1) % 100 == 0) {
            $sqls[]      = 'insert into `'. 'table' .'` (`' . implode('`,`', $fields) . '`) values ' . $values_str;
            var_dump($sqls);
            $sql_datas[] = $data_tmp;
            $data_tmp    = array();
            $values_str  = '';
        }
    }
    if (!empty($values_str)) {
        $sqls[]      = 'insert into `' . 'table' . '` (`' . implode('`,`', $fields) . '`) values ' . $values_str;
        $sql_datas[] = $data_tmp;
    }

    var_dump($sqls);
    var_dump($sql_datas);
}

batchInsert($rows);

