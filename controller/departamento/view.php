<?php
if(isset($_GET['codigo_dep']))
{
    include '../../model/conectar.php';
    $id = $_GET['codigo_dep'];
    $sql = "SELECT * FROM departamento 
    WHERE codigo_dep = ".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
}
?>