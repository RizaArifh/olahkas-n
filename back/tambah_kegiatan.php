<?php
include "conn.php";

// $no=$_POST['in_no_keg'];
$nama=$_POST['in_nama_keg'];

$lasta = "SELECT MAX(no_keg) AS last_no FROM kegiatan";
$resulta = mysqli_query($con, $lasta);
$rowa = mysqli_fetch_array($resulta, MYSQLI_ASSOC);
$last_ida = $rowa['last_no'];
if($last_ida<=0){
    $l_1a=1;
}else{

$l_1a=$last_ida+1;
}

$data = mysqli_query($con,
"INSERT INTO kegiatan (no_keg,nama_kegiatan) VALUES('$l_1a','$nama')");


// print_r($nama);
header("location:../admin/kegiatan_rka.php");
?>