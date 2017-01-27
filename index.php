<?php


$array = array();

for ($i = 0; $i < 10; $i++) {
    $array[] = array('name'=>'iPhone ' . $i, 'year' => 200 . $i);
}

echo json_encode($array);