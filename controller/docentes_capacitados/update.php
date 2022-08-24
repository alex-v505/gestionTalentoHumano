<?php
include '../../model/conectar.php';
$sql = "SELECT * FROM docentes ORDER BY nombre_doc;";
$result_doc = $conn->query($sql);
include '../../model/desconectar.php';

    if(isset($_GET['codigo_dc']))
    {
        include '../../model/conectar.php';
        $id = $_GET['codigo_dc'];
        $sql = "SELECT * FROM docentes_capacitados WHERE codigo_dc=".$id;
        $result_dc = $conn->query($sql);
        include '../../model/desconectar.php';
    }
    if(isset($_POST['codigo_dc']))
    {
        include '../../model/conectar.php';
        $codigo_dc = $_POST['codigo_dc'];
        $codigo_doc = $_POST['codigo_doc'];

        $sql = "UPDATE docentes_capacitados 
                SET codigo_doc='".$codigo_doc."'
                WHERE codigo_dc =".$codigo_dc;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/docentes_capacitados/index.php');
    }
?>