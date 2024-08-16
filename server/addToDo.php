<?php
//prendo il file json e lo salvo come stringa
$string = file_get_contents('toDo.json');
//trasformo la stringa in elemento php
$list = json_decode($string);
/* var_dump($string); */






//restituisco il json manipolato a JS
//modifico l'header del file in modo che venga interpetato come JSON
header('Content-Type: application/json');
//Stampo l'elemento php sotto forma di stringa
echo json_encode($list);
