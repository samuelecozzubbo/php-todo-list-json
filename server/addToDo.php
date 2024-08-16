<?php
//prendo il file json e lo salvo come stringa
$string = file_get_contents('toDo.json');
//trasformo la stringa in elemento php
$list = json_decode($string);
/* var_dump($string); */


//logica e manipolazione json
//Se in post mi viene inviata la chiave toDoItem aggiorno il json
if (isset($_POST['toDoItem'])) {
    $toDoItem = $_POST['toDoItem'];
    //aggiungo l'elemento alla lista
    $list[] = $toDoItem;
    //sovrascrivo il json esterno con la lista aggiornata
    file_put_contents('toDo.json', json_encode($list));
}



//restituisco il json manipolato a JS
//modifico l'header del file in modo che venga interpetato come JSON
header('Content-Type: application/json');
//Stampo l'elemento php sotto forma di stringa
echo json_encode($list);
