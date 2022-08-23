<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT dc.codigo_dc, d.nombre_doc FROM docentes_capacitados dc, docentes d
    WHERE dc.codigo_doc = d.codigo_doc";
    $result = $conn->query($sql);

    include '../../model/desconectar.php';
?>