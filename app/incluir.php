<?
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'conexao.php';

$id = rand(1, 999);
$nome = $_POST["nome"];
$email = $_POST["email"];
$comentario = $_POST["comentario"];

$query = "INSERT INTO mensagens(id, nome, email, comentairo) VALUES ('$id', '$nome', '$email', '$comentario')"

if ($link->$query($query) === TRUE) {
    echo "New record created succesfully";
} else {
    echo "Error: " . $link->error;
}
?>