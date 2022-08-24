<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM departamento";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
    
    if(isset($_GET['codigo_dep'])){

        include '../../model/conectar.php';

    $id = $_GET['codigo_dep'];
    $sql = "SELECT * FROM departamento
            WHERE departamento.codigo_dep =".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    }
    include '../../model/conectar.php';

    if(isset($_POST['codigo_dep'])){
        $id = $_POST['codigo_dep'];
        $sql = "DELETE FROM departamento WHERE codigo_dep =".$id;
        $result = $conn->query($sql);
        header('Location: ../../view/departamento/index.php');
        include '../../model/desconectar.php';

    }
    include '../../model/desconectar.php';


?>