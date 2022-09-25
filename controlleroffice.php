<?php
include ("modeloffice.php");
// $_SESSION['listoffice'] = array();
function insertoffice(){
    $office = new office();
    $office->namaoffice = $_POST['namaoffice'];
    $office->alamat = $_POST['alamat'];
    $office->kota = $_POST['kota'];
    $office->nohp = $_POST['nohp'];
    array_push($_SESSION['listoffice'],$office);
}
function indexoffice(){
    // if(!isset($_SESSION['listoffice'])) $_SESSION['listoffice'] = [];
    return $_SESSION['listoffice'];
}
function deleteoffice($id){
    unset($_SESSION['listoffice'][$id]);
}
function editoffice($id){
    $office = new office();
    $office->namaoffice = $_POST['namaoffice'];
    $office->alamat = $_POST['alamat'];
    $office->kota = $_POST['kota'];
    $office->nohp = $_POST['nohp'];
    $_SESSION['listoffice'][$id] = $office;
}
?>