<?php
     if(isset($_GET['codigo_sed'])){

        include '../../model/conectar.php';
    
        $id = $_GET['codigo_sed'];
        $sql = "SELECT * FROM sede
                WHERE codigo_sed =".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
    
        }
        
        if(isset($_POST['codigo_sed'])){
            include '../../model/conectar.php';
            $id = $_POST['codigo_sed'];
            $nombre_sed = $_POST['nombre_sed'];
            $provincia_sed = $_POST['provincia_sed'];
            $ciudad_sed = $_POST['ciudad_sed'];
            $sql = "UPDATE sede set nombre_sed ='".$nombre_sed."', provincia_sed ='".$provincia_sed."', ciudad_sed ='".$ciudad_sed."' 
            WHERE codigo_sed =".$id;
            $result = $conn->query($sql);
            include '../../model/desconectar.php';
            header('Location: ../../view/sede/index.php');
        }
?> 