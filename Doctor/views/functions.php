<?php
if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
            //casos de registros
        case 'insert_mat':
            insert_mat();
            break;

        case 'insert_grado':
            insert_grado();
            break;

        case 'insert_esp':
            insert_esp();
            break;

        case 'insert_prof':
            insert_prof();
            break;

        case 'insert_alumno':
            insert_alumno();
            break;

        case 'editar_profe':
            editar_profe();
            break;

        case 'editar_alum':
            editar_alum();
            break;

        case 'editar_mat':
            editar_mat();
            break;

        case 'editar_grado':
            editar_grado();
            break;

        case 'editar_esp':
            editar_esp();
            break;


        case 'editar_user':
            editar_user();
            break;

            /*case 'delete':
            delete();
            break;

        case 'delete_s':
            delete_s();
            break;*/
    }
}


function insert_esp()
{
    require_once("db.php");
    extract($_POST);

    $consulta = "INSERT INTO especialidades (especialidad) VALUES ('$especialidad')";

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

function insert_mat()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO materias (materia,id_profesor, per_ini, per_fin,id_grado) VALUES ('$materia','$id_profesor',
    '$per_ini','$per_fin','$id_grado')";
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

function insert_grado()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO grados (descripcion, duracion, fecha) VALUES ('$descripcion', '$duracion','$fecha')";
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


function insert_prof()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO profesores (cedula, nombres, apellidos,correo,edad,fecha_na) 
    VALUES ('$cedula', '$nombres','$apellidos','$correo','$edad','$fecha_na')";
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

function insert_alumno()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO alumnos (nombre, apellido,correo,telefono,edad,birthdate) 
    VALUES ('$nombre','$apellido','$correo','$telefono', '$edad','$birthdate')";
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


function editar_profe()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE profesores SET cedula = '$cedula', nombres = '$nombres', apellidos = '$apellidos', correo = '$correo',
    edad='$edad', fecha_na = '$fecha_na' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}

function editar_alum()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE alumnos SET nombre = '$nombre', apellido = '$apellido', correo = '$correo', telefono = '$telefono',
     edad='$edad', birthdate = '$birthdate' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}




function editar_mat()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE materias SET materia = '$materia', id_profesor = '$id_profesor', 
    per_ini = '$per_ini', per_fin = '$per_fin',id_grado = '$id_grado' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}



function editar_grado()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE grados SET descripcion = '$descripcion',duracion = '$duracion',fecha = '$fecha' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}

function editar_esp()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE especialidades SET especialidad = '$especialidad' WHERE id = '$id' ";
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
/*function delete()
{
    $id = $_POST['id'];
    require_once("db.php");


    $consulta = "DELETE FROM materias WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo 'success';
    } else {
        echo 'error';
    }
}

function delete_s()
{
    $id = $_POST['id'];
    require_once("db.php");


    $consulta = "DELETE FROM grados WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo 'success';
    } else {
        echo 'error';
    }
}
*/