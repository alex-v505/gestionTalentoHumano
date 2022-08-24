<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM sede";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
    
    if(isset($_GET['codigo_sed'])){

        include '../../model/conectar.php';

    $id = $_GET['codigo_sed'];
    $sql = "SELECT * FROM sede
            WHERE sede.codigo_sed=".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    }
    include '../../model/conectar.php';

    if(isset($_POST['codigo_sed'])){
        $id = $_POST['codigo_sed'];
        $sql = "DELETE FROM sede  WHERE codigo_sed =".$id;
        $result = $conn->query($sql);
        header('Location: ../../view/sede/index.php');
        include '../../model/desconectar.php';

    }
    include '../../model/desconectar.php';


?>