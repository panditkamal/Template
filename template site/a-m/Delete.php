<?php
$s_id = $_GET['s_id'];
    $db = mysqli_connect("localhost","root","","kk");
    if(!$db){
        echo "<script>alert('DataBase Connection lost')</script>";
    }
    $sql = "DELETE FROM `Contect us` WHERE `Contect us`.`sno` = '{$s_id}'";
    $result = mysqli_query($db, $sql);
    header('Location: localhost://workspace/new files/Responsive-Architect-Website-master/a-m/inauery.php');
    echo "<script>alert('delte data successfully')</script>";

?>