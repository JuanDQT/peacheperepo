<?php
/**
 * Created by PhpStorm.
 * User: juandaniel
 * Date: 27/1/17
 * Time: 19:13
 */

require_once('dbConnect.php');

$perfiles = [];
$stmt = $db->prepare("select prf_name from perfiles where 2>:num");
$stmt->bindValue(':num', 1);
if ($stmt->execute()) {
    foreach ($stmt as $item) {
        $perfiles[] = $item['prf_name'];
    }

}

echo '<pre>';
var_dump($perfiles);