<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM capacitacion";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
    
    if(isset($_GET['apl_id'])){

        include '../../model/conectar.php';

    $id = $_GET['codigo_capa'];
    $sql = "SELECT * FROM capacitacion
            WHERE capacitacion.codigo_capa = ".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    }
    include '../../model/conectar.php';

    if(isset($_POST['codigo_capa'])){
        $id = $_POST['codigo_capa'];
        $sql = "DELETE FROM capacitacion  WHERE codigo_capa =".$id;
        $result = $conn->query($sql);
        header('Location: ../../view/capacitaciones/index.php');
        include '../../model/desconectar.php';

    }
    include '../../model/desconectar.php';


?>