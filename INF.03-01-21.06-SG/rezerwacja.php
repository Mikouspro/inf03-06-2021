<?php
if (!empty($_POST['data'])&&(!empty($_POST['ile'])&&(!empty($_POST['telefon'])&&(isset($_POST['zgoda']))))) {
    $data = $_POST['data'];
    $ile = $_POST['ile'];
    $telefon = $_POST['telefon'];
    $polaczenie = mysqli_connect('localhost','root','','baza');
    $pytanie = "INSERT INTO `rezerwacje`(`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES ('','','".$data."','".$ile."','".$telefon."');";
    $zapytanie = mysqli_query($polaczenie, $pytanie);
    echo "Dodano rezerwację do bazy";
    mysqli_close($polaczenie);
}
?>