    <?php
require_once('static/inc/config.php');
require_once('static/vendor/autoload.php');


$db = new MysqliDb (DB_HOST, DB_USER, DB_PASS, DB_NAME);

$action = $_POST['action'];

// Variables del formulario
$empresa = $_POST['empresa'];
$ruc = $_POST['ruc'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cargo = $_POST['cargo'];
$telefono = $_POST['num'];
$email = $_POST['correo'];

$source = $_POST['source'];
$medium = $_POST['medium'];
$campaign = $_POST['campaign'];
$landing = $_POST['landing'];

$pageUrl = $_SERVER['HTTP_REFERER'];
$ipAddress = $_SERVER["REMOTE_ADDR"];


if (isset($action) && $action == 'register'){
    $data = Array (
        'empresa' => $empresa,
        'ruc' => $ruc,
        'nombre' => $nombre,
        'apellido' => $apellido,
        'cargo' => $cargo,
        'telefono' => $telefono,
        'email' => $email,        
        'fecha' => date("Y-m-d"),

        'utm_source' => $source,
        'utm_medium' => $medium,
        'utm_campaign' => $campaign,
        'landing' => $landing,

        'page_url' => $pageUrl,
        'ip_address' => $ipAddress


        // expires = NOW() + interval 1 year
        // Supported intervals [s]econd, [m]inute, [h]hour, [d]day, [M]onth, [Y]ear
    );

    $id = $db->insert ('landing_sumtec', $data);
    if ($id){
        echo json_encode(array(
            "rpta"=>"ok",
            "msg"=>"Empresa creada con id = $id"
        ));

        include ('static/sendmail.php');

    } else {
        echo 'insert failed: ' . $db->getLastError();
    }

}
