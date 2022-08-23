<?php
if(isset($_GET['codigo_sed']))
{

    include '../../model/conectar.php';
    $id = $_GET['codigo_sed'];
    $sql = "SELECT * FROM sede
    WHERE codigo_sed = ".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

}
?>