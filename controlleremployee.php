<?php
include ("modelemployee.php");
// $_SESSION['listkaryawan'] = array();
function insertkar(){
    $karyawan = new karyawan();
    $karyawan->nama = $_POST['nama'];
    $karyawan->jabatan = $_POST['jabatan'];
    $karyawan->usia = $_POST['usia'];
    array_push($_SESSION['listkaryawan'],$karyawan);
}
function indexkar(){
    // if(!isset($_SESSION['listkaryawan'])) $_SESSION['listkaryawan'] = [];
    return $_SESSION['listkaryawan'];
}
function deletekar($id){
    unset($_SESSION['listkaryawan'][$id]);
}
function editkar($id){
    $karyawan = new karyawan();
    $karyawan->nama = $_POST['nama'];
    $karyawan->jabatan = $_POST['jabatan'];
    $karyawan->usia = $_POST['usia'];
    $_SESSION['listkaryawan'][$id] = $karyawan;
}
?>