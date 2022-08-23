<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT * FROM departamento";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
?>