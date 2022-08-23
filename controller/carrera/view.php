<?php
 include '../../model/conectar.php';
 $sql = "SELECT * FROM carrera";
 $result = $conn->query($sql);
 //Proceso de creacion de tabla y relleno de datos de la BDD
 include '../../model/desconectar.php';

if(isset($_GET['codigo_car']))
{
    include '../../model/conectar.php';
    $id = $_GET['codigo_car'];
    $sql = "SELECT car.codigo_car, car.id_car, car.nombre_car, se.nombre_sed, dep.nombre_dep FROM carrera car, sede se, departamento dep
    WHERE car.codigo_sed = se.codigo_sed
    AND dep.codigo_dep = car.codigo_dep
    AND car.codigo_car =".$id;
    $result = $conn->query($sql);

    include '../../model/desconectar.php';
}
?>