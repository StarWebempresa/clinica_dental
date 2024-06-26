<div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Agregar un nuevo usuario</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form action="" method="POST">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Usuario</label>
                                <input type="text" id="usuario" name="usuario" class="form-control" required>

                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Correo</label>
                                <input type="email" id="correo" name="correo" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Password</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Confirmar Password</label><br>
                                <input type="password" name="password2" id="password2" class="form-control" required>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="username">Rol de Usuario</label><br>
                        <select name="id_rol" id="id_rol" class="form-control" required>
                            <option value="">Selecciona una opcion</option>
                            <option value="1">Administrador</option>
                            <option value="2">Doctor</option>
                            <option value="3">Asistente</option>

                        </select>
                    </div>





                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="register" name="registrar">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>



<script type="text/javascript">
    $('#register').click(function(e) {
        e.preventDefault();
        var valid = this.form.checkValidity();

        if (valid) {
            var datos = new FormData();
            datos.append('usuario', $('#usuario').val())
            datos.append('correo', $('#correo').val())
            datos.append('password', $('#password').val())
            datos.append('password2', $('#password2').val())
            datos.append('id_rol', $('#id_rol').val())

            fetch('../includes/sesion/validar.php', {
                method: 'POST',
                body: datos,
            }).then((response) => response.json()).then((response => {
                confirmation(response);
            }))

        }
    });

    function confirmation(r) {
        if (r === 'success') {
            Swal.fire({
                'title': '¡Mensaje!',
                'text': 'Usuario Registrado',
                'icon': 'success',
                'showConfirmButton': 'false',
                'timer': '1500'
            }).then(function() {
                window.location = "usuarios.php";
            });
        }
        if (r === 'error') {
            Swal.fire({
                'title': 'Error',
                'text': 'No se creo el usuario',
                'icon': 'error'
            })
        }
        if (r === 'mail') {
            Swal.fire({
                'title': 'Error',
                'text': 'Este usuario ya esta registrado prueba con otro o inicia sesión',
                'icon': 'error'
            })
        }
        if (r === 'pass') {
            Swal.fire({
                'title': 'Error',
                'text': 'Las contraseñas no coinciden',
                'icon': 'error'
            })
        }


    }
</script>