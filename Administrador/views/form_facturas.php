<div class="modal fade" id="esp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Agregar nueva factura</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="espForm">

                    <label for="nombre" class="form-label">Expediente</label>
                        <select name="expediente" id="expediente" class="form-control">
                                    <option value="">Selecciona una opcion</option>
                                    <?php

                                    include("db.php");

                                    $sql = "SELECT * FROM paciente ";
                                    $resultado = mysqli_query($conexion, $sql);
                                    while ($consulta = mysqli_fetch_array($resultado)) {
                                        echo '<option value="' . $consulta['id'] . '">'. $consulta['id'].' - '. $consulta['nombre'] . ' ' . $consulta['apellido'] . '</option>';
                                    }

                                    ?>
                                </select>


                    <div class="form-group">
                        <label for="nombre" class="form-label">Precio</label>
                        <input type="text" id="especialidad" name="especialidad" class="form-control" required>
                    </div>


                    <br>

                    <input type="hidden" name="accion" value="insert_factura">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="register" name="registrar">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#espForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: '../includes/functions.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        alert('Éxito: Los datos se guardaron correctamente');
                        window.location = "facturas.php";
                    } else {
                        alert('Error: Ocurrió un error inesperado');
                    }
                },
                error: function(xhr, status, error) {
                    alert('Error: Ocurrió un error inesperado');
                }
            });
        });
    });
</script>