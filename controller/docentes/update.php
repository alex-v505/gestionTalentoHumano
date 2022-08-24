<?php

include '../../model/conectar.php';
$sql = "SELECT * FROM carrera ORDER BY nombre_car;";
$result_car = $conn->query($sql);
include '../../model/desconectar.php';

include '../../model/conectar.php';
$sql = "SELECT * FROM capacitacion ORDER BY nombre_capa;";
$result_capa = $conn->query($sql);
include '../../model/desconectar.php';

    if(isset($_GET['codigo_doc']))
    {
        include '../../model/conectar.php';
    $id = $_GET['codigo_doc'];
    $sql = "SELECT d.codigo_doc, car.codigo_car, cap.codigo_capa, d.id_doc, d.cedula_doc, d.nombre_doc, d.apellido_doc, d.titulo_doc, cap.nombre_capa, car.nombre_car FROM docentes d, capacitacion cap, carrera car
    WHERE cap.codigo_capa = d.codigo_capa
    AND car.codigo_car = d.codigo_car
    AND codigo_doc = ".$id;
    $result_doc = $conn->query($sql);
    include '../../model/desconectar.php';
    }
    if(isset($_POST['codigo_doc']))
    {
        include '../../model/conectar.php';
        $codigo_doc = $_POST['codigo_doc'];
        $id_doc = $_POST['id_doc'];
        $cedula_doc = $_POST['cedula_doc'];
        $nombre_doc = $_POST['nombre_doc'];
        $apellido_doc = $_POST['apellido_doc'];
        $titulo_doc = $_POST['titulo_doc'];
        $codigo_car = $_POST['codigo_car'];
        $codigo_capa = $_POST['codigo_capa'];
        $sql = "UPDATE docentes 
                SET id_doc='".$id_doc."',
                cedula_doc='".$cedula_doc."',
                nombre_doc='".$nombre_doc."',
                apellido_doc='".$apellido_doc."',
                titulo_doc='".$titulo_doc."',
                codigo_car='".$codigo_car."',
                codigo_capa='".$codigo_capa."'
                WHERE codigo_doc =".$codigo_doc;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/docentes/index.php');
    }
?>