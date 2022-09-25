<?php
include ("modelofficeemplo.php");

// if(!isset($_SESSION['listofficeemplo'])){
//     $_SESSION['listofficeemplo'] = array();
// }
function insertofficeemplo(){
    $officeemplo = new officeemplo();
    $officeemplo->idnama = $_POST['idnama'];
    $officeemplo->idnamaoffice = $_POST['idnamaoffice'];
    array_push($_SESSION['listofficeemplo'],$officeemplo);
}
function indexofficeemplo(){
    // if(!isset($_SESSION['listofficeemplo'])) $_SESSION['listofficeemplo'] = [];
    return $_SESSION['listofficeemplo'];
}
function deleteofficeemplo($id){
    unset($_SESSION['listofficeemplo'][$id]);
}
?>