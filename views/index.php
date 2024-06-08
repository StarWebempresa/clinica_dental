<?php
include "../includes/header.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pantalla de Inicio</h1><br>
               
        <!-- a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a -->
    </div>
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bienvenidos</h1>
               
        <!-- a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a -->
    </div>
    

    <!-- Content Row -->
    <div class="row">

        

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                <a class="collapse-item font-weight-bold " href="../views/pacientes.php">
                    <div class="row no-gutters align-items-center">
                        <img src="../img/pacientes.jpeg" width="200px" height="200px">
                        </div> 
                        <a class="collapse-item font-weight-bold " href="../views/pacientes.php">Pacientes</a>
                        
                        <div class="col-auto">
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                <a class="collapse-item font-weight-bold " href="../views/expediente.php">
                    <div class="row no-gutters align-items-center">
                        <img src="../img/expedientes.png" width="200px" height="200px">
                        </div> 
                        <a class="collapse-item font-weight-bold " href="../views/expediente.php">Expedientes</a>
                        
                        <div class="col-auto">
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                <a class="collapse-item font-weight-bold "  href="../views/facturas.php">
                    <div class="row no-gutters align-items-center">
                        <img src="../img/facturas.png" width="200px" height="200px">
                        </div> 
                        <a class="collapse-item font-weight-bold "  href="../views/facturas.php">Facturas</a>
                        
                        <div class="col-auto">
                        </div>
                    
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                <a class="collapse-item font-weight-bold " href="../views/citas.php">
                    <div class="row no-gutters align-items-center">
                        <img src="../img/calendario.jpg" width="200px" height="200px">
                        </div> 
                        <a class="collapse-item font-weight-bold " href="../views/citas.php">Citas</a>
                        
                        <div class="col-auto">
                        </div>

                </div>
            </div>
        </div>
    </div>

</div>
</div>

<!-- End of Main Content -->
<?php include "../includes/footer.php";
?>