<?php


header("Content-type: application/json");
$test_array = array (
 'tip' => 'mlaznjak',
 'brAviona' => 'J89854',
 'brSedista' => '120',
 'maxBrzina' => '1000km/h',
 'duzinaAviona' => '50m',
);
echo json_encode($test_array);

?>