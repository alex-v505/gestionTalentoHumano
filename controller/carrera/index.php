<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT car.codigo_car, car.id_car, car.nombre_car, se.nombre_sed, dep.nombre_dep FROM carrera car, sede se, departamento dep
    WHERE car.codigo_sed = se.codigo_sed
    AND dep.codigo_dep = car.codigo_dep";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
?>