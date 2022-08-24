<?php include '../template/header.php' ?>
<?php include '../../controller/dashboard/index.php' ?>
<section class="content">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Docentes</span>
                    <span class="info-box-number">
                        <?php echo $total_doc?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Programas de Capacitación</span>
                    <span class="info-box-number"><?php echo $total_capa ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total de Carreras</span>
                    <span class="info-box-number">
                        <?php echo $total_car ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

    </div>
    <br><br><br><br>
    <center>
    <div class="cotainer">
        <img src="../dist/img/ESPEtransparente.png" height="200" width="800">
    </div>
    </center>
</section>

<?php include '../template/footer.php' ?>
    