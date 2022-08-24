<?php
     include '../../model/conectar.php';
     $sql = "SELECT * FROM carrera ORDER BY nombre_car;";
     $result_car = $conn->query($sql);
     include '../../model/desconectar.php';
 
     include '../../model/conectar.php';
     $sql = "SELECT * FROM capacitacion ORDER BY nombre_capa;";
     $result_capa = $conn->query($sql);
     include '../../model/desconectar.php';
     
    if(isset($_POST['codigo_car'])&& isset($_POST['codigo_capa']) && isset($_POST['nombre_doc']))
    {
        include '../../model/conectar.php';
        $codigo_doc = 0;
        $id_doc = $_POST['id_doc'];
        $cedula_doc = $_POST['cedula_doc'];
        $nombre_doc = $_POST['nombre_doc'];
        $apellido_doc = $_POST['apellido_doc'];
        $titulo_doc = $_POST['titulo_doc'];
        $codigo_car = $_POST['codigo_car'];
        $codigo_capa = $_POST['codigo_capa'];
        $sql = "INSERT INTO docentes(codigo_doc, id_doc, cedula_doc, nombre_doc, apellido_doc, titulo_doc, codigo_car, codigo_capa)
                VALUES (0,'".$id_doc."','".$cedula_doc."','".$nombre_doc."','".$apellido_doc."','".$titulo_doc."','".$codigo_car."','".$codigo_capa."')";
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/docentes/index.php');
    }
?>