<?php
/**
 * Created by PhpStorm.
 * User: juandaniel
 * Date: 27/1/17
 * Time: 19:13
 */

require_once('dbConnect.php');

$perfiles = [];
foreach ($db->query("select prf_name from perfiles") as $item) {
    $perfiles[] = $item['prf_name'];
}

echo '<pre>';
var_dump($perfiles);