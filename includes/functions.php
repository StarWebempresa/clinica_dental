<?php
if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
            //casos de registros
        
        case 'insert_cita':
            insert_cita();
            break;

        case 'insert_factura':
            insert_factura();
            break;

        

        case 'insert_paciente':
            insert_paciente();
            break;

        

        case 'editar_paciente':
            editar_paciente();
            break;

        

        case 'editar_cita':
            editar_cita();
            break;


        case 'editar_user':
            editar_user();
            break;

        case 'insert_expediente':
            insert_expediente();
                break;

           
    }
}

function insert_expediente(){
    require_once("db.php");
    extract($_POST);

    $consulta = "INSERT INTO expedientes (id_paciente ,descripcion) VALUES ('$id_paciente','$descripcion')";

    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
        $response = array(
            'status' => 'success',
            'message' => 'Los datos se guardaron correctamente'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Ocurrió un error inesperado'
        );
    }

    echo json_encode($response);
}


function insert_factura()
{
    require_once("db.php");
    extract($_POST);

    $consulta = "INSERT INTO facturas (expediente ,especialidad) VALUES ('$expediente','$especialidad')";

    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
        $response = array(
            'status' => 'success',
            'message' => 'Los datos se guardaron correctamente'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Ocurrió un error inesperado'
        );
    }

    echo json_encode($response);
}



function insert_cita()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO citas (descripcion, duracion, fecha) VALUES ('$descripcion', '$duracion','$fecha')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        $response = array(
            'status' => 'success',
            'message' => 'Los datos se guardaron correctamente'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Ocurrió un error inesperado'
        );
    }

    echo json_encode($response);
}






function insert_paciente()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO paciente (nombre, apellido,correo,telefono,edad,birthdate) 
    VALUES ('$nombre','$apellido','$correo','$telefono','$edad','$birthdate')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        $response = array(
            'status' => 'success',
            'message' => 'Los datos se guardaron correctamente'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Ocurrió un error inesperado funcion'
        );
    }

    echo json_encode($response);
}



function editar_paciente()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE paciente SET nombre = '$nombre', apellido = '$apellido', correo = '$correo', telefono = '$telefono',
     edad='$edad', birthdate = '$birthdate' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}





function editar_cita()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE citas SET descripcion = '$descripcion',duracion = '$duracion',fecha = '$fecha' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}


function editar_user()
{
    require_once("db.php");
    extract($_POST);
    $consulta = "UPDATE users SET usuario = '$usuario', correo = '$correo', id_rol='$id_rol' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}
