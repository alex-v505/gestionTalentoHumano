<?php
    include '../../model/conectar.php';
    //numerico de Peliculas
    $sql = "SELECT count(codigo_doc) as total_doc FROM docentes ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_doc = $row['total_doc'];
    include '../../model/desconectar.php';
    //Nnumerico de socios
    include '../../model/conectar.php';
    $sql = "SELECT count(codigo_capa) as total_capa FROM capacitacion ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_capa = $row['total_capa'];
    include '../../model/desconectar.php';
    //Numerico de alquileres
    include '../../model/conectar.php';
    $sql = "SELECT count(codigo_car) as total_car FROM carrera ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_car = $row['total_car'];
    include '../../model/desconectar.php';
    /*//Meses de alquileres
    include '../../model/conectar.php';
    $sql = "SET lc_time_names = 'es_ES'; ";
    $sql_mes = "SELECT DISTINCT MONTHNAME(alq_fecha_desde) AS mes FROM alquileres;";
    $result = $conn->query($sql);
    $result_mes = $conn->query($sql_mes);
    $i = 0; 
    if ($result_mes->num_rows > 0) {          
        while($row = $result_mes->fetch_assoc()) {
            $total_mes[$i]=($row['mes']);
            $total_mes_js[$i] = json_decode($total_mes[$i]);
            $i++;
        }
    }

    print_r($total_mes);*/
    //include '../../model/desconectar.php';
?>