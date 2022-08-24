<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM sede ORDER BY nombre_sed;";
    $result_sed = $conn->query($sql);
    include '../../model/desconectar.php';

    include '../../model/conectar.php';
    $sql = "SELECT * FROM departamento ORDER BY nombre_dep;";
    $result_dep = $conn->query($sql);
    include '../../model/desconectar.php';
    
    if(isset($_POST['codigo_sed'])&& isset($_POST['codigo_dep']))
    {
        include '../../model/conectar.php';
        $codigo_car = 0;
        $id_car = $_POST['id_car'];
        $nombre_car = $_POST['nombre_car'];
        $codigo_sed = $_POST['codigo_sed'];
        $codigo_dep = $_POST['codigo_dep'];
        $sql = "INSERT INTO carrera(codigo_car, id_car, nombre_car, codigo_sed, codigo_dep)
                VALUES (0,'".$id_car."','".$nombre_car."','".$codigo_sed."','".$codigo_dep."')";
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/carrera/index.php');
    }
?>