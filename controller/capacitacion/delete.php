<?php
include '../../model/conectar.php';
$sql = "SELECT * FROM capacitacion";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD

include '../../model/desconectar.php';



if(isset($_GET['codigo_capa']))
{
    include '../../model/conectar.php';
    $id = $_GET['codigo_capa'];
    $sql = "SELECT * FROM capacitacion 
            WHERE capacitacion.codigo_capa = ".$id ;
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
}
?>