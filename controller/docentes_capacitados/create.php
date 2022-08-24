<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM docentes ORDER BY nombre_doc;";
    $result_doc = $conn->query($sql);
    include '../../model/desconectar.php';

   if(isset($_POST['codigo_doc']))
   {
       include '../../model/conectar.php';
       $codigo_dc = 0;
       $codigo_doc = $_POST['codigo_doc'];
       $sql = "INSERT INTO docentes_capacitados(codigo_dc, codigo_doc)
               VALUES (0,'".$codigo_doc."')";
       $result = $conn->query($sql);
       include '../../model/desconectar.php';
       header('location: ../../view/docentes_capacitados/index.php');
   }
?>