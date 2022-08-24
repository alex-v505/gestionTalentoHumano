<?php
     if(isset($_GET['codigo_dep'])){
        include '../../model/conectar.php';
        $id = $_GET['codigo_dep'];
        $sql = "SELECT * FROM departamento
                WHERE codigo_dep =".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
    
        }
        
        if(isset($_POST['codigo_dep'])){
            include '../../model/conectar.php';
            $codigo = $_POST['codigo_dep'];
            $id_dep = $_POST['id_dep'];
            $nombre_dep = $_POST['nombre_dep'];
            $sql = "UPDATE departamento set id_dep ='".$id_dep."', nombre_dep ='".$nombre_dep."'
            WHERE codigo_dep =".$codigo;
            $result = $conn->query($sql);
            include '../../model/desconectar.php';
            header('Location: ../../view/departamento/index.php');
        }
?> 