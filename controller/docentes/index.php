<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT d.codigo_doc, d.id_doc, d.cedula_doc, d.nombre_doc, d.apellido_doc, d.titulo_doc, cap.nombre_capa, car.nombre_car FROM docentes d, capacitacion cap, carrera car
    WHERE cap.codigo_capa = d.codigo_capa
    AND car.codigo_car = d.codigo_car";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
?>