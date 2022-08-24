

<?php



if(isset($_GET['codigo_dc']))
{
    include '../../model/conectar.php';
    $id = $_GET['codigo_dc'];
    $sql = "SELECT dc.codigo_dc, d.nombre_doc FROM docentes_capacitados dc, docentes d
            WHERE dc.codigo_doc = d.codigo_doc AND dc.codigo_dc=".$id ;
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
}
include '../../model/conectar.php';

    if(isset($_POST['codigo_dc'])){
        $id = $_POST['codigo_dc'];
        $sql = "DELETE FROM docentes_capacitado WHERE codigo_dc =".$id;
        $result = $conn->query($sql);
        header('Location: ../../view/docentes_capacitados/index.php');
       
    }
    include '../../model/desconectar.php';


?>
