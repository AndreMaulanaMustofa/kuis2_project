<?php

$server = 'db';
$user = 'root';
$password = '';
$nama_database = 'db_bljr';

const AUTHOR = 'Andre Maulana Mustofa';
const NIM = '2041720211';

$sambung = mysqli_connect($server, $user, $password, $nama_database);
if (!$sambung) {
    die('Ada masalah koneksi ke database: ' . mysqli_connect_error());
}
