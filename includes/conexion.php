<?PHP




$link = 'mysql:localhost;dbname=tesis_db';
$user= 'root';
$pass='';

try{

$pdo= new PDO($link,$user,$pass);

echo 'Estais conectado a la Base de Datos';

}

catch (PDOException $e) {
    print "¡Error!: No se pudo conectar a la base de datos " . $e->getMessage() . "<br/>";
    die();
}

?>